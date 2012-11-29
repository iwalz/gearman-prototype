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
        $client->addServer('localhost');
        $val = $client->doNormal("reverse", "Hello World!");
        $this->assertEquals("!dlroW olleH", $val);
    }
}

