<?php

$serv = 'localhost';
$user = 'root';
$pass = '';
$db = 'Register_DataBase';

try {
    $connection = mysqli_connect($serv,$user,$pass,$db);
}
catch (Exception $e) {
    echo 'Something went wrong: ',  $e->getMessage(), "\n";
} 
?>