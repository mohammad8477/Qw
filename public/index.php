<?php 
require_once __DIR__ . '/../botstrap.php' ; 
$pash  = trim( str_replace( '/mame/Qw/','' ,parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)), '/') ;  

