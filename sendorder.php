<?php 
include "admin/common/config.php";
$demo=new config;

if(isset($_POST['submit']))
{
   $name=$_POST['name'];

   $email=$_POST['email'];
 
   $phone=$_POST['phone'];

   $address=$_POST['address']; 

   $pname = $_POST['pname'];

   $price = $_POST['price'];

   $demo->insertOrder($name,$email,$phone,$address,$pname,$price);
 }

 ?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Success</title>
    <!-- Fav Icons -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/leaflet.css">
    <link rel="stylesheet" href="assets/css/spacing.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
</head>

<body>

   <div class="page-wrapper">


        <?php include "common/header.php" ?>
        <div class="container">
          
            <h1 style="margin-top: 24%;width: 100%;font-size: 71px;">Your Order is sucessfully sent!</h1>
        </div>
    
    </div>
    <!--End pagewrapper-->
    
</body>
</html>