<?php
/**
 * Created by PhpStorm.
 * User: Eucline Sweeney
 * Date: 15/01/2018
 * Time: 4:36 AM
 */
require_once('simpletest/test/autorun.php');

class AllTests extends TestSuite {
    function AllTests() {
        $this->TestSuite('All tests');
        $this->addFile('log_test.php');
    }
}