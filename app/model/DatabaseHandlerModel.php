<?php
/**
 * Created by PhpStorm.
 * User: p15241925
 * Date: 10/01/2018
 * Time: 13:25
 *
 * This is part of the model which holds the messages temporarily.
 * The main usage of this class is to call store_data_in_database
 * and get_data_from_database functions.
 */

class DatabaseHandlerModel
{
    private $c_msg_source;
    private $c_msg_time;
    private $c_msg_message;
    private $c_arr_storage_result;
    private $c_obj_wrapper_db;
    private $c_obj_db_handle;
    private $c_obj_sql_queries;

    public function __construct()
    {
        $this->c_msg_source = null;
        $this->c_msg_time = null;
        $this->c_msg_message = null;
        $this->c_arr_storage_result = null;
        $this->c_obj_wrapper_db = null;
        $this->c_obj_db_handle = null;
        $this->c_obj_sql_queries = null;
    }

    public function __destruct() { }

    public function set_message_values($p_source, $p_time, $p_message)
    {

        $this->c_msg_source = $p_source;
        $this->c_msg_time = $p_time;
        $this->c_msg_message = $p_message;

//        var_dump($this->c_msg_source);
//        var_dump($this->c_msg_time);
//        var_dump($this->c_msg_message);
        //$this->c_msg_source = $p_msg_source;
        //$this->c_msg_time = $p_msg_time;
        //$this->c_msg_message = $p_msg_message;
    }

    public function set_wrapper_db($p_obj_wrapper_db)
    {
        $this->c_obj_wrapper_db = $p_obj_wrapper_db;
    }

    public function set_db_handle($p_obj_db_handle)
    {
        $this->c_obj_db_handle = $p_obj_db_handle;
    }

    public function set_sql_queries($p_obj_sql_queries)
    {
        $this->c_obj_sql_queries = $p_obj_sql_queries;
    }

    public function get_storage_result()
    {
        return $this->c_arr_storage_result;
    }

    /* returns a boolean representing if the storage was successful*/
    public function store_data_in_database()
    {
        $m_store_result = false;

        $this->c_obj_wrapper_db->set_db_handle( $this->c_obj_db_handle);
        $this->c_obj_wrapper_db->set_sql_queries( $this->c_obj_sql_queries);

        $m_store_result = $this->c_obj_wrapper_db->store_messages($this->c_msg_source, $this->c_msg_time, $this->c_msg_message);

        return $m_store_result;
    }
    /* returns a boolean representing if the retrieval was successful*/
    public function get_data_from_database()
    {
        $this->c_obj_wrapper_db->set_db_handle( $this->c_obj_db_handle);
        $this->c_obj_wrapper_db->set_sql_queries( $this->c_obj_sql_queries);

        $m_get_result = $this->c_obj_wrapper_db->get_all_messages();

        return $m_get_result;
    }
}
