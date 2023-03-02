<?php
include "common/config.php";
$demo=new config;
if(isset($_GET['id']))
$id=$_GET['id']; 
$demo->deleteContacts($id);
header('Location:contact.php');
?>