<?php

require_once __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

ini_set("display_errors", "on");
ini_set('memory_limit', '-1');

error_log(print_r($_REQUEST, true), 3, "/tmp/test.log");

foreach (range(1, 100) as $i) {
    echo sprintf('%d,test%d', $i, $i ) . "\n";
}