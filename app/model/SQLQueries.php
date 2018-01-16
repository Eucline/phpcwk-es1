<?php

/**
	* SQLQueries.php
	*
	* hosts all SQL queries to be used by the Model
	*
	* Author: CF Ingrams
	* Email: <clinton@cfing.co.uk>
	* Date: 22/10/2017
	*
    * Modified by: Jimmie.S p15241925
    * Altered to fit coursework assignment for ctec3110.
    *
	* @author CF Ingrams <clinton@cfing.co.uk>
	* @copyright CFI
	*/

class SQLQueries
{
	public function __construct() { }

	public function __destruct() { }

  public static function create_msg_var()
	{
		$m_query_string  = "INSERT INTO messages ";
		$m_query_string .= "SET msg_source = :p_msg_source, ";
		$m_query_string .= "msg_time = :p_msg_time, ";
		$m_query_string .= "msg_message = :p_msg_message ";
		return $m_query_string;
	}

	public static function get_table_values()
	{
		$m_query_string  = "SELECT * ";
		$m_query_string .= "FROM messages ";
		return $m_query_string;
	}
}
