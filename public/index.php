<?php 
require_once __DIR__ . '/../botstrap.php' ; 

$darkhast =  $_SERVER['REQUEST_METHOD']  ; 
 echo $url = trim(substr($_SERVER['REQUEST_URI'] , 9))  ;
$routes = [
    'GET' => [
        "" => ['controller' => 'app\controllers\HomeController' , 'method' => 'index'],

        "posts" => ['controller' => 'app\controllers\PostController' , 'method' => 'index'],
        "posts/show/([0-9]+)" => ['controller' => 'app\controllers\PostController' , 'method' => 'show']
    ],
    'POST' => []
];

