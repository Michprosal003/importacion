<?php 

require_once("connection.php");
if(isset($_POST['submit']))
{
if(empty($_POST['conductor']) ||   empty($_POST['vechiculo']) ||   empty($_POST['producto']) ||     empty($_POST['lugar_cargo'])) 

echo"completa este campo";

else 
{
    $conductor=$_POST['conductor'];
    $vechiculo=$_POST['vechiculo'];
    $producto=$_POST['producto'];
    $lugar_cargo=$_POST['lugar_cargo'];
    $query="INSERT INTO empleados (conductor,vechiculo,producto,lugar_cargo)VALUES('$conductor','$vechiculo','$producto','$lugar_cargo')";
    $result=mysqli_query($conn,$query);
    if($result)

   header("location:view.php");

    else 
    {

        echo"revisa tu query nuevamente";
    }
}
}

else 
{
    header("location:portal.php");
}













?>