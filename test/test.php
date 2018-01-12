<?php
/**
 * Created by PhpStorm.
 * User: p15229636
 * Date: 11/01/2018
 * Time: 12:02
 */

require_once(dirname(__FILE__) . '/simpletest.php');

//use PHPUnit\Framework\TestCase;

class test extends TestCase{
    public function testUsername()
    {
        $this->assertInstanceOf(
            username::class,
            username::fromString('17qwerty')
        );
    }

    public function testMnumber()
    {
        $this->assertInstanceOf(
            Mnumber::class,
            Munumber::fromInteger(18)
        );
    }
}