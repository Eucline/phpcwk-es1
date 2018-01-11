<?php

class Validator
{
  public function __construct() { }

  public function __destruct() { }

  public function validate_temperature($p_temperature_to_check)
  {
    $m_checked_temperature = false;

    if (isset($p_temperature_to_check))
    {
      $minimum_temperature_value = LOWEST_CENTIGRADE_TEMPERATURE;
      $m_checked_value = filter_var($p_temperature_to_check, FILTER_VALIDATE_FLOAT);
      if ($m_checked_value >= $minimum_temperature_value)
      {
        $m_checked_temperature = $m_checked_value;
      }
    }
    return $m_checked_temperature;
  }

  public function validate_unit_type($p_type_to_check)
  {
    $m_checked_unit_type = false;
    $m_arr_unit_type = TEMP_UNITS;
    $result = array_key_exists($p_type_to_check, $m_arr_unit_type);

    if ($result === true)
    {
      $m_checked_unit_type = $p_type_to_check;
    }

    return $m_checked_unit_type;
  }
}
