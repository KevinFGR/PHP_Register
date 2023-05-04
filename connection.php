<?php

$serv = 'localhost';
$user = 'root';
$pass = '';
$db = 'database';

$connection = mysqli_connect($serv,$user,$pass,$db);

if(!$connection){
    die('Flaha ao conectar com o banco de dados' . mysqli_connect_error());
}

?>