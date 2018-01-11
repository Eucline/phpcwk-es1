<?php
/**
 *
 * https://m2mconnect.ee.co.uk/orange-soap/services/MessageServiceByCountry?wsdl
 */
class MessageHandlerModel {

  private $c_username;
  private $c_password;
  private $c_mnumber;
  private $c_result;

  public function __construct(){}

  public function __destruct(){}

  public function set_retrieve_parameters($p_username, $p_password, $p_mnumber)
  {
    $this->c_username = $p_username;
    $this->c_password = $p_password;
    $this->c_mnumber = $p_mnumber;
  }

  public function perform_retrieve_messages()
  {
    $result = null;
    $obj_soap_client_handle = null;
    $obj_soap_client_handle = $this->create_soap_client();

    if ($obj_soap_client_handle !== false)
    {
      $result = $this->get_messages($obj_soap_client_handle);
    }
    var_dump($result);

    $this->c_result = current($result);
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



  private function get_messages($p_obj_soap_client_handle)
  {
    $m_result = null;
    $m_arr_userinfo = array(
      'username' => $this->c_username,
      'password' => $this->c_password,
      'count' => $this->c_mnumber,
      'deviceMsisdn' => "",
      'countryCode' => ""
    );
    //var_dump($m_arr_userinfo);

    try
    {
      //$message_array = $p_obj_soap_client_handle->__soapCall('peekMessages', array($m_arr_userinfo));
      $message_array = $p_obj_soap_client_handle->peekMessages($this->c_username, $this->c_password, $this->c_mnumber, "", "");
      $m_result = $message_array;
//      var_dump($p_obj_soap_client_handle->__getLastRequest());
//      var_dump($p_obj_soap_client_handle->__getLastResponse());
//      var_dump($p_obj_soap_client_handle->__getLastRequestHeaders());
//      var_dump($p_obj_soap_client_handle->__getLastResponseHeaders());

    }
    catch (SoapFault $m_obj_exception)
    {
      trigger_error($m_obj_exception);
    }

    return $m_result;
  }



  public function get_result()
  {
    return $this->c_result;
  }
}
