<?php
include('conexion_1.php');
//require('intropage.php');

$con=new Conexion;
$conectar=$con->con();
$can = $conectar->query("SELECT * FROM productos ORDER BY id_producto");
include_once 'encabezado.php'; 
?>
    <h3 align="center">Catalogo de productos</h3>
    <a href="mostrarcarro.php"><h3 align="center">Ir al carro</h3></a>
    <table width="90%" border="2">
		<thead>
			<tr>
				<th ><h3>Id_Prod</h3></th>
				<th ><h3>Nombre</h3></th>
				<th ><h3>Descricion</h3></th>
				<th ><h3>Precio venta</h3></th>
				<th ><h3>Stock</h3></th>
                <th ><h3>Imagen</h3></th>
                <th ><h3>Categoria</h3></th>
                <th ><h3>Agregar al carrito</h3></th>
			</tr>
		</thead>
		<tbody>
			<?php 
				while ($dato=mysqli_fetch_array($can)) {
			?>
			<tr>
				<td><?php echo $dato['id_producto'];?></td>
				<td><?php echo $dato['nombre'];?></td>
				<td><?php echo $dato['descripcion'];?></td>
				<td><?php echo $dato['precio_venta'];?></td>
				<td><?php echo $dato['stock'];?></td>
				<td><p align="center"><img src="img/<?php echo $dato['imagen'];?>" width="40" height="40" /></p></td>
				<td><?php echo $dato['id_categoria'];?></td>
				<td><a href="agregaralcarrito.php?idprod=<? echo $dato['id_producto'];?>"> <p align="center"><img align=center width="25" height="25" src="../img/carrito.png"/>  </p></a></td>
	            <?php }
            	?>
            </tr>
		</tbody>
	</table>
<?php  
include_once 'piepagina.php';?>