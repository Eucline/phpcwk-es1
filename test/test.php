<?php
/**
 * Created by PhpStorm.
 * User: p15229636
 * Date: 11/01/2018
 * Time: 12:02
 */

<<<<<<< HEAD
require_once('includes/test.php');
require_once('simpletest/test/autorun.php');
//require_once(dirname(__FILE__) . '/simpletest.php');
use PHPUnit\Framework\TestCase;
=======
require_once(dirname(__FILE__) . '/simpletest.php');

//use PHPUnit\Framework\TestCase;
>>>>>>> 285348d5581b33e2c211ad9e4f313cfa9cdcf855

final class test extends UnitTestCase
{
    public function testEncode()
    {
<<<<<<< HEAD
        $email = new userEmail();

        $stringEncode = 'qwerty@email.com';
        $encodedString = $email->encode64($stringEncode);
        $expectedLength = 24;

        $this->assertEqual($expectedLength, strlen($encodedString), $encodedString);
    }

    public function testDecode()
    {
        $email = new userEmail();

        $stringEncode = 'qwerty@email.com';
        $encodedString = $email->encode64($stringEncode);
        $decodeString = $email->encode64($encodedString);

        $this->assertEqual($stringEncode, $decodeString, decodeString);
=======
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
>>>>>>> 285348d5581b33e2c211ad9e4f313cfa9cdcf855
    }
}