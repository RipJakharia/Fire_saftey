<?php 
include "common/config.php";
$demo=new config;
$result=$demo->selectNOC();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Noc</title>
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
                    <h3>Noc</h3>
                    <ol class="breadcrumb breadcrumb-list">
                        <li class="breadcrumb-item"><a href="admindashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Noc</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Regester Page Start Here -->
        <div class="register-area white-bg ptb-80">
		    <div class="container">
            <h3 class="login-header">View Noc</h3>
		        <table class="table table-bordered table-responsive">
                      <thead>
                        <tr>
                         
                          <th scope="col">Building Usage</th>
                          <th scope="col">Name of Buliding</th>
                          <th scope="col">Number of Sactioned Floors</th>
                          <th scope="col">Type</th>


                          <th scope="col">Parking Area</th>
                          <th scope="col">Unique Property Id</th>
                          <th scope="col">Height (in mtrs)</th>


                          <th scope="col">Land Area (sqr mtrs)</th>
                          <th scope="col">Total Covered Area (sqr mtrs)</th>
                          <th scope="col">Building Address</th>


                          <th scope="col">Landmark</th>
                          <th scope="col">Left  Side</th>
                          <th scope="col">Right Side</th>

                          <th scope="col">Front Side</th>
                          <th scope="col">Back Side</th>
                          <th scope="col">Number of Basements</th>


                          <th scope="col">Number of Actual Floors</th>
                          <th scope="col">Ground Floor Area(sqr mtrs)</th>
                          <th scope="col">Name of Owner</th>

                          <th scope="col">Contact No.</th>
                          <th scope="col">City</th>
                          <th scope="col">Address</th>



                          <th scope="col">Landmark</th>
                          <th scope="col">State</th>
                          <th scope="col">Name of Applicant</th>



                          <th scope="col">City</th>
                          <th scope="col">Contact No</th>
                          <th scope="col">Complete Address</th>


                          <th scope="col">Landmark</th>
                          <th scope="col">State</th>
                          <th scope="col">Email</th>

                           <th scope="col">Document</th>
                          <th scope="col">Photo</th>
                          <th scope="col">Delete</th>



                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
                        <?php
                        while($js=mysqli_fetch_assoc($result))
                          { 
                        ?>
                        <tr>
                            <td><?php echo $js['b_usages'];?></td>
                            <td><?php echo $js['b_name'];?></td>
                            <td><?php echo $js['b_floor'];?></td>
                            <td><?php echo $js['type'];?></td>
                            

                            <td><?php echo $js['p_area'];?></td>
                            <td><?php echo $js['p_id'];?></td>
                            <td><?php echo $js['height'];?></td>


                            <td><?php echo $js['area'];?></td>
                            <td><?php echo $js['total'];?></td>
                            <td><?php echo $js['b_address'];?></td>



                            <td><?php echo $js['landmark'];?></td>
                            <td><?php echo $js['lside'];?></td>
                            <td><?php echo $js['rside'];?></td>



                            <td><?php echo $js['fside'];?></td>
                            <td><?php echo $js['bside'];?></td>
                            <td><?php echo $js['basement'];?></td>


                            <td><?php echo $js['floor_number'];?></td>
                            <td><?php echo $js['floor_area'];?></td>
                            <td><?php echo $js['o_name'];?></td>


                            <td><?php echo $js['o_number'];?></td>
                            <td><?php echo $js['o_city'];?></td>
                            <td><?php echo $js['o_address'];?></td>


                            <td><?php echo $js['o_landmark'];?></td>
                            <td><?php echo $js['o_state'];?></td>
                            <td><?php echo $js['name'];?></td>


                            <td><?php echo $js['city'];?></td>
                            <td><?php echo $js['contact'];?></td>
                            <td><?php echo $js['address'];?></td>




                               <td><?php echo $js['landmartk'];?></td>
                            <td><?php echo $js['state'];?></td>
                               <td><?php echo $js['email'];?></td>
                            



                            <td><img src="../photo/<?php echo $js['photo'];?>" style="height: 100px;"></td>
                            <td><img src="../product-document/<?php echo $js['document'];?>" style="height: 100px;"></td>
                      
                            <td><a href="delete-noc.php?id=<?php echo $js['id'];?>">Delete</a></td>
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