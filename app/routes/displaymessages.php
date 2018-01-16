<?php
/**
 * Created by PhpStorm.
 * User: p15241925
 * Date: 15/01/2018
 * Time: 13:12
 * part of the controller.
 * This script posts the messages using twig.
 * Messages are retrieved from the database.
 * Validation is called from here as well.
 * DatabaseHandlerModel.php handles all message traffic to and from its database.
 * the clean messages stored are then displayed through a twig template.
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post(
    '/displaymessages',
    function(Request $request, Response $response) use ($app)
    {
        $validator = $this->get('validator');
        $wrapper_mysql = $this->get('mysql_wrapper');
        $db_handle = $this->get('dbase');
        $sql_queries = $this->get('sql_queries');
        $dbmsg_model = $this->get('dbmsg_model');
        $dbmsg_model->set_wrapper_db($wrapper_mysql);
        $dbmsg_model->set_db_handle($db_handle);
        $dbmsg_model->set_sql_queries($sql_queries);

        // get data from database
        $msgs_from_db = $dbmsg_model->get_data_from_database();
        //var_dump($msgs_from_db);


        // sanitise and validate data from database
        $temp_array = array();
        $temp_arr_tot = array();
        foreach ($msgs_from_db as $value) {
            $temp_array['msg_source'] = $validator->sanitise_string($value['msg_source']);
            $temp_array['msg_time'] = $validator->sanitise_string($value['msg_time']);
            $temp_array['msg_message'] = $validator->sanitise_string($value['msg_message']);
            $temp_arr_tot[] = $temp_array;
        }

        return $this->view->render($response,
            'display_result.html.twig',
            [
                'css_path' => CSS_PATH,
                'landing_page' => LANDING_PAGE,
                'initial_input_box_value' => null,
                'page_title' => APP_NAME,
                'page_heading_1' => APP_NAME,
                'page_heading_2' => 'Displaying messages for ',

                'message_arr' => $temp_arr_tot,
            ]);

    });