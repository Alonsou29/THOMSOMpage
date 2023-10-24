<?php 
include("assest/conexion.php");

$usuario = $_POST["User"];
$clave = $_POST["Pass"];


$busqueda = mysqli_query($conn,"SELECT User FROM usuarios WHERE User ='".$usuario."'and Pass = '".$clave."'") or die(mysqli_error($conn));
$buscando = mysqli_num_rows($busqueda);
if($buscando == 1){
    echo $buscando;
    header("panel.php");
}else{echo "No hay ususarios";}



?>