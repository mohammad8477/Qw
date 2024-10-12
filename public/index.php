<?php 
require_once __DIR__ . '/../botstrap.php'; // اطمینان حاصل کنید که autoloading در این فایل فعال است
$q = false;  

$pash = trim(str_replace('/mame/Qw/', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)), '/');  

$routes = [
    'GET' => [
        'code' => ['controller' => 'App\\C\\Code', 'method' => 'index'], // استفاده از namespace درست
        'sigin' => ['controller' => 'SIGIN', 'method' => 'index'],  
        'sigup' => ['controller' => 'SIGUP', 'method' => 'index'],  
        'index' => ['controller' => 'SAFE', 'method' => 'index'],   
        "index/buy/([0-9]+)" => ['controller' => 'BAY', 'method' => 'index'], 
        'admin' => ['controller' => 'ADMIN', 'method' => 'index'],
    ], 
    'POST' => []
]; 

foreach ($routes[$_SERVER['REQUEST_METHOD']] as $route => $info) {
    if (preg_match("#^$route$#", $pash)) {
        // ایجاد شیء کنترلر با استفاده از namespace
        if (class_exists($info['controller'])) {
            $controller = new $info['controller'](); // ایجاد شیء از کلاس
            if (method_exists($controller, $info['method'])) {
                $controller->{$info['method']}(); // فراخوانی متد
                $q = true; 
            }
        } 
        break; 
    }
}

echo (!$q) ? '404' : ' ';