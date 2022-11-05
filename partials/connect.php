<?php
session_start();
$con  = new mysqli('localhost','root','','vertex_academy');
error_reporting(0);
if(!$con){
   
     die(mysqli_error($con));
}

?>