<?php 

require_once("connection.php");
if(isset($_POST['update']))
{


    $ID=$_GET['ID'];
    $conductor=$_POST['conductor'];
    $vechiculo=$_POST['vechiculo'];
    $producto=$_POST['producto'];
    $lugar_cargo=$_POST['lugar_cargo'];
    $query="UPDATE empleados SET conductor='".$conductor."', vechiculo='".$vechiculo."',  producto='".$producto."', lugar_cargo='".$lugar_cargo."' WHERE ID='".$ID."' ";
    $result=mysqli_query($conn,$query);
    if($result)

   header("location:view.php");

    else 
    {

        echo"revisa tu query nuevamente";
    }
}


else 
{
    header("location:portal.php");
}













?>