<?php 
require_once __DIR__ . '/../botstrap.php';
 
new App\M\User() ;  
$q = false;  
$q = false;  

$pash = trim(str_replace('/mame/Qw/', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)), '/');  
$pash = trim(str_replace('/mame/Qw/', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)), '/');  

$routes = [
    'GET' => [
        'Creat_account' => ['controller' => 'App\\C\\Creat_account', 'method' => 'index'] ,  
        '' => ['controller' => 'App\\C\\indexpage', 'method' => 'index'],
        'index' => ['controller' => 'App\\C\\indexpage', 'method' => 'index'],
        'code' => ['controller' => 'App\\C\\Code', 'method' => 'index'],
        'Product' => ['controller' => 'App\\C\\Product', 'method' => 'index'],
        'sigup' => ['controller' => 'App\\C\\Creat_account', 'method' => 'index'] ,    
        'sigin' => ['controller' => 'App\\c\\Sigin', 'method' => 'index'],  
        'Forgot_password' => ['controller' => 'Forgot_password', 'method' => 'index'], //bog
        "index/buy/([0-9]+)" => ['controller' => 'BAY', 'method' => 'index'], 
        'admin' => ['controller' => 'ADMIN', 'method' => 'index'],
    ], 
    'POST' => [
        
        'sigup' => ['controller' => 'App\\c\\Creat_account', 'method' => 'index'] , 
        'sigin' => ['controller' => 'App\\c\\Sigin', 'method' => 'index'] //bog
    ]
];

foreach ($routes[$_SERVER['REQUEST_METHOD']] as $route => $info) {
    if (preg_match("#^" . preg_quote($route, '#') . "$#", $pash)) {
        // ایجاد شیء کنترلر با استفاده از namespace
        if (class_exists($info['controller'])) {
            $controller = new $info['controller'](); // ایجاد شیء از کلاس
            if (method_exists($controller, $info['method'])) {
               ($controller->{$info['method']}());
               exit  ; 
                
                $q = true; 
            }
        } 
        break; 
    }
}

if (!$q) {
  echo   require_once __DIR__ . "/../app/V/404 error/index.php"; 
}