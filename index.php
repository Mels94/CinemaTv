<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/application/config/define.php';
session_start();
date_default_timezone_set('Asia/Yerevan');

use application\components\Router;

spl_autoload_register(function ($className) {
    $fileName = str_replace("\\", "/", $className . ".php");
    if (file_exists($fileName)) {
        require $fileName;
    }
});

$router = new Router;
$router->run();



/*$ca = [
    '1' => [
        'price' => 50,
        'seats' => 6,
        'name' => 'Luxe'
    ],
    '2' => [
        'price' => 30,
        'seats' => 8,
        'name' => 'Standard'
    ],
    '3' => [
        'price' => 20,
        'seats' => 10,
        'name' => 'Cheap'
    ]
];
echo json_encode($ca);*/
