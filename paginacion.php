<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <title>Paginacion</title>
    
</head>
<body>


<nav>
<img src="wallpaper/depositphotos_99576690-stock-illustration-tipper-truck-logo.jpg" alt="avatar" class="avatar">



</nav>





<?php 


$conn=mysqli_connect("localhost","root","","eempresa");

$por_pagina=10;

if(isset($_GET['pagina']))
{
    $pagina=$_GET['pagina'];
}

else 
{
    $pagina=1;
}



$empieza=($pagina-1) * $por_pagina;
$query="SELECT * FROM empleados LIMIT $empieza,$por_pagina";
$resultado=mysqli_query($conn,$query);
?>


<table class="table table-hover table-bordered table-striped ">
<tr>
<td>ID</td>
<td class="bg-warning">CONDUCTOR</td>
<td class="bg-secondary">VECHICULO</td>
<td class="bg-danger">PRODUCTO</td>
<td class="bg-success">LUGAR DE CARGO</td>
</tr>

<?php 

while($fila=mysqli_fetch_assoc($resultado))
{


?>

<tr>
<td><?php echo $fila['ID'];?></td>
<td><?php echo $fila['conductor'];?></td>
<td><?php echo $fila['vechiculo'];?></td>
<td><?php echo $fila['producto'];?></td>
<td><?php echo $fila['lugar_cargo'];?></td>
</tr>

<?php 
}
?>





</table>


<div>

<?php 

$query="SELECT * FROM empleados";
$resultado=mysqli_query($conn,$query);

$total_registros=mysqli_num_rows($resultado);
$total_paginas=ceil($total_registros/$por_pagina);

echo"<center><a href='paginacion.php?pagina=1'>Anterior</a>";

for($i=1; $i<=$total_paginas; $i++)

{

 echo"<a a href='paginacion.php?pagina=".$i."'> ".$i."</a>";
}

echo"<a href='paginacion.php?pagina=$total_paginas'> Siguiente</a></center>";



?>








</div>



<style>

.college{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-transform: uppercase;
    color: white;





}



    a{

  padding:15px;
  color: white;
  background: darkred;
  text-decoration: none;
  border: 1px solid darkorange;
  display: inline-block;



    }

nav {
    margin: 0;
    padding: 0;
background: darkcyan;
background-image: url("wallpaper/camion.jpg");
background-repeat: no-repeat;
background-size: cover;





}


    img.avatar{
      width: 7%;
      border-radius: 50%;
      margin-bottom: 15px;
   
    


    }


</style>





</body>
</html>
