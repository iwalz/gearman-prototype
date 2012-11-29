<?php
$worker= new GearmanWorker();
$ret = $worker->addServer('127.0.0.1', 4730);
if($ret) {
    echo "Connected" .  PHP_EOL;
}
$worker->addFunction("reverse", "my_reverse_function");
while ($worker->work());

function my_reverse_function($job)
{
    return strrev($job->workload());
}