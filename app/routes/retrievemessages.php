<?php
/**
 * Created by PhpStorm.
 * User: p15241925
 * Date: 08/12/2017
 * Time: 10:49
 */

 use \Psr\Http\Message\ServerRequestInterface as Request;
 use \Psr\Http\Message\ResponseInterface as Response;

 $app->post(
   '/retrievemessages',
   function(Request $request, Response $response) use ($app)
   {
     $arr_tainted_params = $request->getParsedBody();

     $validator = $this->get('validator');
     $message_model = $this->get('message_model');

     $tainted_username = $arr_tainted_params['username'];
     //$validated_username = $validator->validate_username($tainted_username);
     $tainted_password = $arr_tainted_params['password'];
     //$validated_password = $validator->validate_password($tainted_password);
     $tainted_mnumber = $arr_tainted_params['mnumber'];
       settype($tainted_mnumber, "integer");
     //$validated_mnumber = $validator->validate_unit_type($tainted_mnumber);

    // Get messages from soap server through MessageHandlerModel.php
     $message_model->set_retrieve_parameters(
       $tainted_username,
       $tainted_password,
       $tainted_mnumber
     );

     $message_model->perform_retrieve_messages();
     $retrieve_messages_result = $message_model->get_result();

     if ($retrieve_messages_result === null)
     {
       $retrieve_messages_result = 'cannot retrieve messages from M2M service';
     }

     $wrapper_mysql = $this->get('mysql_wrapper');
     $db_handle = $this->get('dbase');
     $sql_queries = $this->get('sql_queries');
     $dbmsg_model = $this->get('dbmsg_model');

    $dbmsg_model->set_msg_values("source", "time", $retrieve_messages_result);
    $dbmsg_model->set_wrapper_db($wrapper_mysql);
    $dbmsg_model->set_db_handle($db_handle);
    $dbmsg_model->set_sql_queries($sql_queries);
    $dbmsg_model->store_data_in_database();
    $store_result = $dbmsg_model->get_storage_result();
    var_dump($store_result);


     return $this->view->render($response,
       'display_result.html.twig',
       [
         'css_path' => CSS_PATH,
         'landing_page' => LANDING_PAGE,
         'initial_input_box_value' => null,
         'page_title' => APP_NAME,
         'page_heading_1' => APP_NAME,
         'page_heading_2' => 'Result',

         'username' => $tainted_username,
         'password' => $tainted_password,
         'mnumber' => $tainted_mnumber,
         'result' => $retrieve_messages_result,
       ]);
   });
