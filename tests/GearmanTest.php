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
        $ret = $client->addServer('localhost', 4730);
        if($ret) {
            echo "Connected" .  PHP_EOL;
        }
        $val = $client->doNormal("reverse", "Hello World!");
        $this->assertEquals("!dlroW olleH", $val);
    }
}

