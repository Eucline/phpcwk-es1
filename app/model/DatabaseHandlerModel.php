<?php
/**
 * Created by PhpStorm.
 * User: p15241925
 * Date: 10/01/2018
 * Time: 13:25
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

    public function set_msg_values($p_msg_source, $p_msg_time, $p_msg_message)
    {
        $this->c_msg_source = $p_msg_source;
        $this->c_msg_time = $p_msg_time;
        $this->c_msg_message = $p_msg_message;
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

    public function store_data_in_database()
    {
        $m_store_result = false;

        $this->c_obj_wrapper_db->set_db_handle( $this->c_obj_db_handle);
        $this->c_obj_wrapper_db->set_sql_queries( $this->c_obj_sql_queries);

        $m_store_result = $this->c_obj_wrapper_db->store_messages($this->c_msg_source, $this->c_msg_time, $this->c_msg_message);

        return $m_store_result;
    }
}