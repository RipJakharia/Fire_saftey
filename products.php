<?php 
    include "admin/common/config.php";
    $demo=new config;
    $result=$demo->selectProduct();
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <title>Explore Saftey Products</title>
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
         <!--==================================================================== 
            Start Header area
            =====================================================================-->
         <?php include "common/header.php" ?>
         <!--==================================================================== 
            End Header area
            =====================================================================-->
         <!--==================================================================== 
            Start Page Banner Section
            =====================================================================-->
         <section class="page-banner overlay">
            <div class="container">
               <div class="banner-inner">
                  <h2 class="wow fadeInUp" data-wow-duration="1.5s">Saftey Products</h2>
                  <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Explore Saftey Products</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </section>
         <!--==================================================================== 
            End Page Banner Section
            =====================================================================-->
         <!--==================================================================== 
            Start Get In Touch Section
            =====================================================================-->
         <section class="get-in-touch py-150 rpy-100">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="section-title">
                        <h2>Saftey <span>Products</span></h2>
                     </div>
                      </div>
                    <?php
                        while($js=mysqli_fetch_assoc($result))
                        { 
                    ?>
                     <div class="col-md-4">
                         <div class="card">
                            <img class="card-img-top" src="admin/product-upload/<?php echo $js['photo'];?>" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $js['name'];?></h5>
                                <a href="product-details.php?id=<?php echo $js['id'];?>" class="btn btn-primary">View Details</a>
                              </div>
                            </div>
                     </div>
                    <?php
                        }
                    ?>
                   
                </div>
            </div>
        </section>
      <!--==================================================================== 
         End Get In Touch Section
         =====================================================================-->
      <!--==================================================================== 
         Start Call To Action Section
         =====================================================================-->
      <section class="cta-section bg-orange pt-130 rpt-80 pb-135 rpb-100">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-8">
                  <div class="cta-text wow fadeInUp rmb-25" data-wow-duration="2s">
                     <h3>You Want To Work With Best Consulting Solutions Company?</h3>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="cta-btn wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                     <a href="contact.php" class="theme-btn">Contact Now <i class="fas fa-arrow-right"></i></a>
                  </div>
               </div>
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