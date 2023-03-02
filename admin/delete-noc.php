<?php
include "common/config.php";
$demo=new config;
if(isset($_GET['id']))
$id=$_GET['id']; 
$demo->deleteNOC($id);
header('Location: noc.php');
?>