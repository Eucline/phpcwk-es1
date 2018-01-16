<?php
/**
 * Created by PhpStorm.
 * User: p15241925
 * Date: 08/12/2017
 * Time: 10:49
 *
 * Part of the controller.
 * Main function for retrieving and storing messages taken from soap server.
 * Validation is called from here as well.
 * MessageHandlerModel.php holds soap object, does soap calling and parsing is done there as well.
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

     // fetch and validate user input
     $tainted_username = $arr_tainted_params['username'];
     $validated_username = $validator->sanitise_string($tainted_username);
     $tainted_password = $arr_tainted_params['password'];
     $validated_password = $validator->sanitise_string($tainted_password);
     $tainted_mnumber = $arr_tainted_params['mnumber'];
     //settype($tainted_mnumber, "integer");
     $validated_mnumber = $validator->validate_integer($tainted_mnumber);

    /*********************
    * get messages below *
    **********************/
    // Get messages from soap server through MessageHandlerModel.php
     $message_model->set_retrieve_parameters(
       $validated_username,
       $validated_password,
       $validated_mnumber
     );
     $message_model->perform_retrieve_messages();

     // parse array of messages
     $message_model->parse_messages();
     $retrieve_messages_result = $message_model->get_parsed_result();

     if ($retrieve_messages_result === null)
     {
         $store_message = 'Could not retrieve messages from M2M service';
     } else {
         $store_message = 'Sucessfully retrieved messages from M2M service';
     }

     /***********************
     * store messages below *
     ************************/
     $wrapper_mysql = $this->get('mysql_wrapper');
     $db_handle = $this->get('dbase');
     $sql_queries = $this->get('sql_queries');
     $dbmsg_model = $this->get('dbmsg_model');

     $dbmsg_model->set_wrapper_db($wrapper_mysql);
     $dbmsg_model->set_db_handle($db_handle);
     $dbmsg_model->set_sql_queries($sql_queries);

     // loop through parsed array then validate and store each message
     foreach ($retrieve_messages_result as $value) {
       $validated_source = $validator->sanitise_string($value[0]->sourcemsisdn);
       $validated_time = $validator->sanitise_string($value[0]->receivedtime);
       $validated_message = $validator->sanitise_string($value[0]->message);

       $dbmsg_model->set_message_values($validated_source, $validated_time, $validated_message);
       $dbmsg_model->store_data_in_database();
     }

     $store_result = $dbmsg_model->get_storage_result();
     if (!$store_result){
         $store_message2 = " Successfully stored messages!";
     } else {
         $store_message2 = " Could not store messages / No new messages to store";
     }
     //var_dump($store_result);
     //var_dump($retrieve_messages_result);



     return $this->view->render($response,
       'homepageform.html.twig',
       [
           'css_path' => CSS_PATH,
           'landing_page' => LANDING_PAGE,
           'method' => 'post',
           'method2' => 'post',
           'action' => './retrievemessages',
           'action2' => './displaymessages',
           'initial_input_box_value' => null,
           'page_title' => APP_NAME,
           'page_heading_1' => APP_NAME,
           'page_heading_2' => 'Retrieval of 17-3110-Ad messages from M2M service server',
           'page_text' => 'Enter your M2M username, password and number of messages to be read',

           'result' => $store_message,
           'result2' => $store_message2,

       ]);
   });
