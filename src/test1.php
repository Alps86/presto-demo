<?php

require_once __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

ini_set("display_errors", "on");
ini_set('memory_limit', '-1');

error_log(print_r($_REQUEST, true), 3, "/tmp/test.log");

$map = range(1, 100);

foreach (range(1, 3000000) as $i) {
    $rand_keys = array_rand($map, 1);
    echo sprintf('%d,test%d,%d', $i, $i, $map[$rand_keys] ) . "\n";
}