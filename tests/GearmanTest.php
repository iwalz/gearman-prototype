<?php

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * test case.
 */
class GearmanTest extends PHPUnit_Framework_TestCase
{
    public function testReverseFunction() 
    {
        $client= new GearmanClient();
        $client->addServer();
        $val = $client->do("reverse", "Hello World!");
        $this->assertEquals("!dlroW olleH", $val);
    }
}

