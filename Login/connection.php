<?php
$servername="localhost";
$username="root";
$password="";
$database="form";

$con=mysqli_connect($servername,$username,$password,$database);

if(!$con)
{
   die("error connection".mysqli_error($con));
}

?>