<?php
include "common/config.php";
$demo=new config;
if(isset($_GET['id']))
$id=$_GET['id']; 
$demo->deleteOrders($id);
header('Location: order.php');
?>