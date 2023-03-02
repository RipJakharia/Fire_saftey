<?php 
include "common/config.php";
$demo=new config;

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
  $demo->insertProduct($name,$price,$p_photo,$file_type,$tmp_loc,$description);
 }
  $result=$demo->selectProduct();
 ?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>View Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
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
                    <h3>View Product</h3>
                    <ol class="breadcrumb breadcrumb-list">
                        <li class="breadcrumb-item"><a href="admindashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">View Product</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Regester Page Start Here -->
        <div class="register-area white-bg ptb-80">
		    <div class="container">
            <h3 class="login-header">View Product</h3>
		        <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">Product Name</th>
                          <th scope="col">Product Price</th>
                          <th scope="col">Product Photo</th>
                          <th scope="col">Product Description</th>
                          <th scope="col">Edit</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        while($js=mysqli_fetch_assoc($result))
                          { 
                      ?>
                        <tr>
                            <td><?php echo $js['name'];?></td>
                            <td><?php echo $js['price'];?></td>
                            <td><img src="product-upload/<?php echo $js['photo'];?>" style="height: 100px;"></td>
                            <td><?php echo $js['description'];?></td>
                            <td><a href="edit.php?id=<?php echo $js['id'];?>">Edit</a></td>
                            <td><a href="delete-product.php?id=<?php echo $js['id'];?>">Delete</a></td>
                        </tr>
                        </tbody>
                      <?php
                        }
                      ?>
                </table>

		    </div>
		</div>
     
    </div>

</body>

</html>