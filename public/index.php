<?php 
require_once __DIR__ . '/../botstrap.php' ;
$q = false ;  
$pash  = trim( str_replace( '/mame/Qw/','' ,parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)), '/') ;  
<<<<<<< HEAD

$routes = 
[
    'GET' => 
    [
          'code' =>['controller'=> 'app/C/code.php' , 'method' =>'index'] , 
         'sigin' =>['controller'=> 'SIGIN' , 'method' =>'index'] ,  
         'sigup' =>['controller'=> 'SIGUP' , 'method' =>'index'] ,  
          'index' =>['controller'=> 'SAFE' , 'method' =>'index'] ,   
"index/buy/([0-9]+)" =>['controller'=> 'BAY' , 'method' =>'index'] , 
         'admin' =>['controller'=> 'ADMIN' , 'method' =>'index'] ,

    ] , 
    'POST' =>[]
] ; 
foreach($routes[$_SERVER['REQUEST_METHOD']] as $route=>$info){
    if(preg_match("#^$route$#" , $pash)){
        echo "ok" ; 
        $q = true ; 
        break ; 
    }
}
echo (!($q== 1)) ? '404' : ' ' ; 
=======
$method =
[
    $GET = [
        'code'   => ['CODE' , 'index']   , 
        'signin' => [ 'SIGIN' , 'index'] , 
        'signup' => ['SIGNUP' , 'index']
        
    ]  ,   
    $post = []
] ; 
>>>>>>> d952198a9878ac63d362e5bc8676c4a36b39cb3c
