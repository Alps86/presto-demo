<?php

require_once __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

ini_set("display_errors", "on");
ini_set('memory_limit', '-1');

error_log(print_r($_REQUEST, true), 3, "/tmp/test.log");

$map = range(1, 100);

$page = $_REQUEST['page'] - 1;
$pageSize = 200000;
$offset = $pageSize * $page;

foreach (range($offset + 1, $offset + $pageSize) as $i) {
    $rand_keys = array_rand($map, 1);
    echo sprintf('%d,test%d,%d', $i, $i, $map[$rand_keys] ) . "\n";
}