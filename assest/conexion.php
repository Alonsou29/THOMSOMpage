<?php 

$user="root";
$clave="";
$host="localhost";
$port= 0;
$db="Botellones";

$conn=mysqli_connect($host,$user,$clave,$db);

if(!$conn){
    echo "error ".mysqli_connect_error();}
?>