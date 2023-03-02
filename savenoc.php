<?php 
include "admin/common/config.php";
$demo=new config;
if(isset($_POST['submit']))
{
  $b_usages=$_POST['b_usages'];
  $b_name=$_POST['b_name'];
  $b_floor=$_POST['b_floor'];
  $p_area=$_POST['p_area']; 
  $p_id = $_POST['p_id'];
  $height = $_POST['height'];
  $area=$_POST['area'];
  $total=$_POST['total'];
  $b_address=$_POST['b_address'];
  $landmark=$_POST['landmark']; 
  $lside = $_POST['lside'];
  $rside = $_POST['rside'];
  $fside=$_POST['fside'];
  $bside=$_POST['bside'];
  $basement=$_POST['basement'];
  $floor_number=$_POST['floor_number']; 
  $floor_area = $_POST['floor_area'];
  $o_name = $_POST['o_name'];
  $o_number=$_POST['o_number'];
  $o_city=$_POST['o_city'];
  $o_address=$_POST['o_address'];
  $o_landmark=$_POST['o_landmark']; 
  $o_state = $_POST['o_state'];
  $name = $_POST['name'];
  $city=$_POST['city'];
  $contact=$_POST['contact'];
  $address=$_POST['address'];
  $landmartk=$_POST['landmartk']; 
  $state = $_POST['state'];
  $email = $_POST['email'];
  $file_types=$_FILES['p_document']['tmp_name'];
  $tmp_locs=$_FILES['p_document']['tmp_name'];
  $p_document=$_FILES['p_document']['name'];
  $new_paths="product-document/".$p_document;
  $uploads=move_uploaded_file($tmp_locs,$new_paths);
  $file_type=$_FILES['p_photo']['tmp_name'];
  $tmp_loc=$_FILES['p_photo']['tmp_name'];
  $p_photo=$_FILES['p_photo']['name'];
  $new_path="photo/".$p_photo;
  $type=$_POST['type'];
  // echo $type;
  // die();
  $upload=move_uploaded_file($tmp_loc,$new_path);
  $demo->insertNOC($b_usages,$b_name,$b_floor,$p_area,$p_id,$height,$area,$total,$b_address,$landmark,$lside,$rside,$fside,$bside,$basement,$floor_number,$floor_area,$o_name,$o_number,$o_city,$o_address,$o_landmark,$o_state,$name,$city,$contact,$address,$landmartk,$state,$email,$p_document,$file_types,$tmp_locs,$p_photo,$file_type,$tmp_loc,$type);
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
          
            <h1 style="margin-top: 24%;width: 100%;font-size: 71px;">Your NOC is successfully submitted!</h1>
        </div>
    
    </div>
    <!--End pagewrapper-->
    
</body>
</html>