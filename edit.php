
<?php 

require_once("connection.php");
$ID=$_GET['GetID'];
$query="SELECT * FROM  empleados   WHERE ID='".$ID."' ";  
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result))
{

$ID=$row['ID'];
$conductor=$row['conductor'];
$vechiculo=$row['vechiculo'];
$producto=$row['producto'];
$lugar_cargo=$row['lugar_cargo'];
}







?>
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>

    <div class="transparent">
    <div class="separador">
</head>
<body>

<style>

.separador {
position: relative;
margin: 15px 0 0;
text-align: center;


}



.transparent {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
padding: 40px 80px;
width: 400px;
height: 400px;
background: rgba(0,0,0,0.8);
box-sizing: border-box;
box-shadow: rgba(0,0,0,0.5);
}




body {
margin: 0;
padding: 0;
}  

.multiverso {
display: flex;
width: 100%;
margin-bottom: 15px;

}

.icon {
padding:15px;
background-color: darkred;
color: white;
min-width: 50px;
text-align: center;

}


.universo {
padding: 15px;
width: 100%;
outline: none;
}  

.universo:focus {
border: 1px solid darkred;

}

.btn {

    background-color: dodgerblue;
    border:none;
    color: white;
    cursor: pointer;
    padding: 15px 20px;
    width: 100%;
    opacity:0.8;

}


.btn:hover {
opacity:1;


}



</style>


<form action="update.php?ID=<?php echo $ID?>" method="POST" style="max-width: 500px;margin:auto">




<div class="multiverso">
<i class="fa fa-user icon"></i>
<select class="universo" name="conductor"  id="conductor">
<option value="Conductor">Conductor</option>
<option value="Luis Armando Saj">Luis Armando Saj</option>
<option value="Michel Rosales">Michel Rosales</option>
<option value="Pablo Aceituno">Pablo Aceituno</option>
</select>
</div>



<div class="multiverso">
<i class="fa fa-truck icon"></i>
<select class="universo" name="vechiculo"  id="vechiculo">
<option value="Vechiculo">Vechiculo</option>
<option value="furgoneta">furgoneta</option>
<option value="Camión cisterna">Camión cisterna</option>
<option value="Camión cerrado">Camión cerrado</option>

</select>
</div>


<div class="multiverso">
<i class="fa fa-water icon"></i>

<select class="universo" name="producto"  id="producto">
<option value="Producto">Producto</option>
<option value="Naranjas">Naranjas</option>
<option value="Sandia">Sandia</option>
<option value="Piñas">Piñas</option>


</select>
</div>


<div class="multiverso">
<i class="fa-solid fa-place-of-worship icon"></i>
<select class="universo" name="lugar_cargo"  id="lugar_cargo">
<option value="Lugar de carga">lugar de cargo</option>
<option value="Zacapa">Zacapa</option>
<option value="Ciudad de Guatemala">Ciudad de Guatemala</option>
<option value="San Carlos">San Carlos</option>

</select>
</div>









<button class="btn" name="update">Actualizar</button>
</div>


</form>
    
</body>
</html>