<?php  
require 'conexion_1.php';  
include 'header.php';
$con=new Conexion();
$conectar=$con->con();
//recibir el id de mostrar
$id=$_GET['idprod'];
if(isset ($id)){
    //$resultado=$conectar->query("delete from producto where id_producto='$borrar'");
    $resultado=$conectar->query("DELETE FROM productos where id_producto='$id'");
    //mostrar un header y mientras un animacion
    header( "refresh:3; url=listar.php" );
 }else{

 }
?>