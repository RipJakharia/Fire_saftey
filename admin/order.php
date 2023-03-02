<?php 
include "common/config.php";
$demo=new config;
$result=$demo->selectOrder();
 ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Order</title>
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
                    <h3>Order</h3>
                    <ol class="breadcrumb breadcrumb-list">
                        <li class="breadcrumb-item"><a href="admindashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Order</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Regester Page Start Here -->
        <div class="register-area white-bg ptb-80">
		    <div class="container">
            <h3 class="login-header">View Order</h3>
		        <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Address</th>
                          <th scope="col">Product Name</th>
                          <th scope="col">Product Price</th>
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
                            <td><?php echo $js['email'];?></td>
                            <td><?php echo $js['phone'];?></td>
                            <td><?php echo $js['address'];?></td>
                            <td><?php echo $js['pname'];?></td>
                            <td><?php echo $js['price'];?></td>
                            <td><a href="delete-order.php?id=<?php echo $js['id'];?>">Delete</a></td>
                        </tr>
                        </tbody>
                      <?php
                        }
                      ?>


                      </tbody>
                </table>

		    </div>
		</div>
     
    </div>

</body>

</html>