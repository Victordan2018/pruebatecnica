<?php
require_once 'conexion_1.php';
//require('intropage.php');

$con=new Conexion;
$conectar=$con->con();
$can = $conectar->query("SELECT * FROM categorias ORDER BY id_categoria");
include_once 'encabezado.php'; 
?>
    <h3 align="center">Catalogo de categorias</h3>
    <div>
		<a class="btn btn-success" href="altascategorias.php">Nuevo <i class="fa fa-plus"></i></a>
	</div>
	<br>
    <table width="90%" border="2">
		<thead>
			<tr>
				<th ><h3>Id_categoria</h3></th>
				<th ><h3>Nombre</h3></th>
				<th ><h3>Descripcion</h3></th>
				<th ><h3>Color</h3></th>
                <th ><h3>Actualizar</h3></th>
                <th ><h3>Eliminar</h3></th>
			</tr>
		</thead>
		<tbody>
			<?php 
				while ($dato=mysqli_fetch_array($can)) {
			?>
			<tr>
				<td><?php echo $dato['id_categoria'];?></td>
				<td><?php echo $dato['nombre'];?></td>
				<td><?php echo $dato['descripcion'];?></td>
				<td><?php echo $dato['color'];?></td>
				<td><a href="actualizarcategorias.php?idcat=<? echo $dato['id_categoria'];?>"> <p align="center"><img align=center width="35" height="35" src="../img/editar.png"/>  </p></a></td>
	            <td><a href="bajascategorias.php?idcat=<? echo $dato['id_categoria'];?>">  <p align="center"><img width="35" height="35" src="../img/borrar.png"/></p></a></td>
	            <?php }
            	?>
            </tr>
		</tbody>
	</table>
<?php  
include_once 'piepagina.php';
?>