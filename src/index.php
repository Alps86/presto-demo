<?php

require_once __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

ini_set("display_errors", "on");

error_log(print_r($_REQUEST, true), 3, "/tmp/test.log");

$schema = [
    'web' => [
        [
            'name' => 'test1',
            'sources' => ['http://web:80/test1.php'],
            'columns' => [
                [
                    'name' => 'id',
                    'type' => 'BIGINT'
                ],
                [
                    'name' => 'name',
                    'type' => 'VARCHAR'
                ],
                [
                    'name' => 'category',
                    'type' => 'BIGINT'
                ]
            ]
        ],
        [
            'name' => 'category',
            'sources' => ['http://web:80/test2.php'],
            'columns' => [
                [
                    'name' => 'id',
                    'type' => 'BIGINT'
                ],
                [
                    'name' => 'name',
                    'type' => 'VARCHAR'
                ]
            ]
        ]
    ]
];

echo json_encode($schema);
