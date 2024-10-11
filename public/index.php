<?php 
require_once __DIR__ . '/../botstrap.php' ;
$q = false ;  
$pash  = trim( str_replace( '/mame/Qw/','' ,parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)), '/') ;  

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