<?php
   include "admin/common/config.php";
   $demo=new config;
   $id=$_GET['id'];
   $productDetail=mysqli_query($demo->config,"select * from `products` where `id` ='$id'");
   ?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <title>Product Details</title>
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
   </head>
   <body>
      <div class="page-wrapper">
         <!-- Preloader -->
         <div class="preloader"></div>
         <?php include "common/header.php" ?>
         <section class="page-banner overlay">
            <div class="container">
               <div class="banner-inner">
                  <h2 class="wow fadeInUp" data-wow-duration="1.5s">Product Detail</h2>
                  <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </section>
         <section class="service-details pt-140 pb-150 rpt-90 rpb-100">
            <div class="container">
               <div class="row">
                  <?php
                     while($js=mysqli_fetch_assoc($productDetail))
                     { 
                     ?>
                  <div class="col-lg-8">
                     <div class="service-details-content">
                        <div class="section-title">
                           <h2><?php echo $js['name'];?> </h2>
                        </div>
                        <div class="details-image">
                           <img src="admin/product-upload/<?php echo $js['photo'];?>" alt="Service Details Image">
                        </div>
                        <p><?php echo $js['description'];?></p>
                     </div>
                  </div>
                  <div class="col-lg-4" style="background: #2d2d2d; border-radius: 16px">
                     <div class="service-sidebar" style="max-width: initial;margin-left: 0;margin-top: 24px;">
                        <div class="sidebar-widget service-widget">
                           <form  class="call-back-form" name="call-back-form" action="sendorder.php" method="post">
                              <div class="form-group">
                                 <input type="text" name="name" class="form-control" placeholder="Name Here" required="">
                              </div>
                              <div class="form-group">
                                 <input type="email" name="email" class="form-control" placeholder="Email Here" required="">
                              </div>
                              <div class="form-group">
                                 <input type="text" name="phone" class="form-control" placeholder="Phone">
                              </div>
                              <div class="form-group">
                                <input type="hidden" name="pname" value="<?php echo $js['name'];?>">
                                <input type="hidden" name="price" value="<?php echo $js['price'];?>">
                              </div>
                              <div class="form-group">
                                <textarea name="address" rows="7" class="form-control" placeholder="Address..."></textarea>
                            </div>
                            </div>
                            
                        </div>
                        <div class="form-group mb-0 text-center">
                        <button class="theme-btn" value="Submit" name="submit">Submit Now <i class="fas fa-arrow-right"></i></button>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
               <?php
                  }
                  ?>
            </div>
      </div>
      </section>
      <?php include "common/footer.php"?>
      </div>
      <!--End pagewrapper-->
      <!-- jequery plugins -->
      <script src="assets/js/jquery-3.5.1.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/slick.min.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/leaflet.min.js"></script>
      <script src="assets/js/appear.js"></script>
      <!-- Custom script -->
      <script src="assets/js/script.js"></script>
   </body>
</html>