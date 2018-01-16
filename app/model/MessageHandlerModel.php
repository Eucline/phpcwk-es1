<?php
/**
 * part of the model. handles the soap object and callings to the soap server.
 * holds messages temporarily. parsing is done here.
 *
 */
class MessageHandlerModel {

  private $c_username;
  private $c_password;
  private $c_mnumber;
  private $c_result;
  private $c_arr_parsed_result;

  public function __construct(){}

  public function __destruct(){}

  public function set_retrieve_parameters($p_username, $p_password, $p_mnumber)
  {
    $this->c_username = $p_username;
    $this->c_password = $p_password;
    $this->c_mnumber = $p_mnumber;
  }
  /* main function to be called from controller(retrievemessages.php
   * returns a boolean if retrieval was successful or not*/
  public function perform_retrieve_messages()
  {
    $result = null;
    $obj_soap_client_handle = null;
    $obj_soap_client_handle = $this->create_soap_client();

    if ($obj_soap_client_handle !== false)
    {
      $result = $this->get_messages($obj_soap_client_handle);
    }
    //var_dump($result);

    $this->c_result = $result;
  }

    private function create_soap_client()
    {
    $obj_soap_client_handle = false;

    $m_arr_soapclient = ['trace' => true, 'exceptions' => true];
    $m_wsdl = 'https://m2mconnect.ee.co.uk/orange-soap/services/MessageServiceByCountry?wsdl';

    try
    {
      $obj_soap_client_handle = new SoapClient($m_wsdl, $m_arr_soapclient);
//      var_dump($obj_soap_client_handle->__getFunctions());
//      var_dump($obj_soap_client_handle->__getTypes());
    }
    catch (SoapFault $m_obj_exception)
    {
      trigger_error($m_obj_exception);
    }

    return $obj_soap_client_handle;
  }

  /**
   * soapcall for looking at messages stored containing the string "17-3110-Ad" which is how the group
   * identifies its own messages
   */
  private function get_messages($p_obj_soap_client_handle)
  {
    $m_result = null;
    $temp_arr2 = array();
    $group_number = "17-3110-Ad";
    try
    {
      //$message_array = $p_obj_soap_client_handle->__soapCall('peekMessages', array($m_arr_userinfo));
      $message_array = $p_obj_soap_client_handle->peekMessages($this->c_username, $this->c_password, $this->c_mnumber, "", "");

//      var_dump($p_obj_soap_client_handle->__getLastRequest());
//      var_dump($p_obj_soap_client_handle->__getLastResponse());
//      var_dump($p_obj_soap_client_handle->__getLastRequestHeaders());
//      var_dump($p_obj_soap_client_handle->__getLastResponseHeaders());

        foreach ( $message_array as $value )
        {
            if (strpos($value, $group_number) !== false){
                $temp_arr2[] = $value;
            }
        }
        $m_result = $temp_arr2;
    }
    catch (SoapFault $m_obj_exception)
    {
      trigger_error($m_obj_exception);
    }

    return $m_result;
  }

  /** parses the stored array of messages*/
  public function parse_messages()
  {
    $temp_arr = array();
    foreach ( $this->c_result as $value )
    {
      $temp_arr[] = simplexml_load_string($value) or die("cant parse it");
    }
    $this->c_arr_parsed_result = $temp_arr;
  }

  public function get_result()
  {
    return $this->c_result;
  }
  public function get_parsed_result()
  {
    return $this->c_arr_parsed_result;
  }

}
