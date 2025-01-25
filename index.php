<?php 


$integer = 50; 
$float = 5.5;
$string = 'I love Aulab';
$boolean = true; 

var_dump($integer);
var_dump($float);
var_dump($string); 
var_dump($boolean);

define('INTEGER', $integer);
define('FLOAT', $float);
define('STRING', $string);
define('BOOLEAN', $boolean);


echo INTEGER ."\n";
echo FLOAT ."\n";
echo STRING ."\n";
echo BOOLEAN ."\n";



?>