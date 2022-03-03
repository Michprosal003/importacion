<?php 

require_once("connection.php");
$query="SELECT * FROM  empleados";
    $result=mysqli_query($conn,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <title>Importacion</title>
</head>
<body>
    
<table class="table table-bordered table-striped table-hover">
    <tr>
<td>ID</td>
<td>CONDUCTOR</td>
<td>VECHICULO</td>
<td>PRODUCTO</td>
<td>LUGAR DE CARGO</td>
<td>ACCION</td>
<td>ACCION</td>
<td>ACCION</td>
    </tr>




<?php 

while($row=mysqli_fetch_assoc($result))
{

$ID=$row['ID'];
$conductor=$row['conductor'];
$vechiculo=$row['vechiculo'];
$producto=$row['producto'];
$lugar_cargo=$row['lugar_cargo'];




?>

<tr>
<td><?php echo $ID?></td>
<td><?php echo $conductor?></td>
<td><?php echo $vechiculo?></td>
<td><?php echo $producto?></td>
<td><?php echo $lugar_cargo?></td>
<td><a href="edit.php?GetID=<?php echo $ID?>"class="btn btn-warning">Actualizar</a></td>
<td><a href="delete.php?DEL=<?php echo $ID?>"class="btn btn-primary">Eliminar</a></td>
<td><a href="paginacion.php"class="btn btn-danger">  Consulta</a></td>
</tr>

<?php 
}
?>

</table>

















</body>
</html>