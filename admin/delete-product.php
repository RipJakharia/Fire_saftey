<?php
include "common/config.php";
$demo=new config;
if(isset($_GET['id']))
$id=$_GET['id']; 
$demo->deletePorduct($id);
header('Location: view-products.php');
?>