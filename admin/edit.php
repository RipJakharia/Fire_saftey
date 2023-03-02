<?php 
include "common/config.php";
$demo=new config;
if(isset($_GET['id']))
$id=$_GET['id'];
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $price=$_POST['price'];
  $file_type=$_FILES['p_photo']['tmp_name'];
  $tmp_loc=$_FILES['p_photo']['tmp_name'];
  $p_photo=$_FILES['p_photo']['name'];
  $new_path="product-upload/".$p_photo;
  $upload=move_uploaded_file($tmp_loc,$new_path);
  $description= $_POST['description'];
  $result=mysqli_query($demo->config,"UPDATE `products` SET `name`= '".$name."' ,`price`='".$price."',`photo`='".$p_photo."',`description`='".$description."' WHERE `id` = '".$id."'");
  header('Location:view-products.php');
 }
 ?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edit Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <?php include "common/css.php";?>
</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
       <?php include "common/header.php"; ?>
         <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumb-area pt-65 pb-70 bg-img" style="background: #2d2d2d;">
            <div class="container">
                <div class="breadcrumb-wrap text-center">
                    <h3>Edit Product</h3>
                    <ol class="breadcrumb breadcrumb-list">
                        <li class="breadcrumb-item"><a href="admindashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div>
            </div>
        </div>
    
        <!-- Login Page Start Here -->
        <div class="login white-bg ptb-80">
            <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                        <div class="login-form">
                             <form class="mt-5" method="POST" action="" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">Product Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name" placeholder="Product Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Product Price</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="price" placeholder="Product Price">
                                       
                                    </div>
                                </div>
                                     <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label" name="photo">Product Photo</label>
                                    <div class="col-sm-7">
                                        <input type="file" class="form-control" name="p_photo">
                                       
                                    </div>
                                </div>
                                     <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Product Description</label>
                                    <div class="col-sm-7">
                                      <textarea  class="form-control" name="description" placeholder="Product Description"></textarea>
                                    </div>
                                </div>
                                     

                                <div class="login-details text-center mb-25">
                                  
                                    <button type="submit" name="submit" class="login-btn">Save</button>
                                </div>
                               
                            </form>
                        </div>
                   </div>
               </div>
            </div>
        </div>
     
    </div>
    <!-- Main Wrapper End Here -->

</body>

</html>