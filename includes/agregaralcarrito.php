<?php 
$id_producto=$_GET['idprod'];
require_once 'conexion_1.php';
if(!isset($id_producto)){
	return null;
}else{
$con=new Conexion;
$conectar=$con->con();
$can = $conectar->query("SELECT * FROM productos WHERE id_producto=$id_producto LIMIT 1");
	session_start();
	# Buscar producto dentro del cartito
	$indice = false;
	for ($i = 0; $i < count($_SESSION["carrito"]); $i++) {
    	if ($_SESSION["carrito"][$i]->id_producto === $id_producto) {
        	$indice = $i;
        	break;
    	}
	}
	# Si no existe, lo agregamos como nuevo
	if ($indice === false) {
	    $producto->cantidad = 1;
	    $producto->total = $producto->precioVenta;
	    array_push($_SESSION["carrito"], $producto);
	} else {
	    # Si ya existe, se agrega la cantidad
	    # Pero espera, tal vez ya no haya
	    $cantidadExistente = $_SESSION["carrito"][$indice]->cantidad;
	    # si al sumarle uno supera lo que existe, no se agrega
	    if ($cantidadExistente + 1 > $producto->existencia) {
	        header("Location: ./vender.php?status=5");
	        exit;
	    }
	    $_SESSION["carrito"][$indice]->cantidad++;
	    $_SESSION["carrito"][$indice]->total = $_SESSION["carrito"][$indice]->cantidad * $_SESSION["carrito"][$indice]->precioVenta;
	}
	header("Location: ./vender.php");
	
}//else
////////////
 ?>
