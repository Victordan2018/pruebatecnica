<?php
session_start();
include('conexion_1.php');
//require('intropage.php');
include('header.php'); 
$idprod = implode( ', ', array_keys($_SESSION['productos']));

$con=new Conexion;
$conectar=$con->con();
$can = $conectar->query('SELECT * FROM productos where id_producto='.$idprod.'');
?>
<table>
  <thead>
     <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Subtotal</th>
        <th> </th>    
    </tr>
  </thead>
  <tbody>
<?php
$total = 0;
while ($row=mysqli_fetch_array($can)) {
      $quantity = $_SESSION['productos'][$row['id_producto']];
      $subtotal = $quantity * $row['precio_venta'];
      $total += $subtotal;
?>
     <tr>
          <td><a href="product_details?product_id=<?php echo $product['id'];?>"><?php echo $row['id_producto']; ?></a></td>
          <td><?php echo $row['nombre']; ?></td>
          <td><?php echo $row['precio_venta']; ?></td>
          <td><?php echo $quantity; ?></td>
          <td><?php echo $subtotal; ?></td>
          <td><button onclick="window.location.href='remove_from_cart.php?product_id=<?php echo $product['id']; ?>'">Quitar del carrito</button></td>
     </tr>
<?php
}?>
  </tbody>
</table>
<p>Total: <?php echo $total;?></p>