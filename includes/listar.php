<?php
include('conexion_1.php');
//require('intropage.php');
include('header.php'); 
$con=new Conexion;
$conectar=$con->con();
$can = $conectar->query("SELECT * FROM productos ORDER BY id_producto");
include_once 'encabezado.php';
?>


    <h3 align="center">Catalogo de productos</h3>
    <div>
			<a class="btn btn-success" href="altas.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
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
                <th ><h3>Actualizar</h3></th>
                <th ><h3>Eliminar</h3></th>
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
				<td><a href="actualizar.php?idprod=<? echo $dato['id_producto'];?>"> <p align="center"><img align=center width="35" height="35" src="../img/editar.png"/>  </p></a></td>
	            <td><a href="bajas.php?idprod=<? echo $dato['id_producto'];?>">  <p align="center"><img width="35" height="35" src="../img/borrar.png"/></p></a></td>
	            <?php }
            	?>
            </tr>
		</tbody>
	</table>
<?php  
include_once 'piepagina.php';?>