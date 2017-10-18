<?php 


require __DIR__.'/vendor/autoload.php' ; 
require __DIR__.'/kernel.php' ; 


$connect = $container->get('entityManager') ; 
$result = $connect->query('SELECT * FROM `symfony_demo_post` ') ; 





$db2 = $container->get('db2') ; 

print_r($db2) ; 