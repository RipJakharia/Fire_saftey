<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <title>NOC</title>
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
                  <h2 class="wow fadeInUp" data-wow-duration="1.5s">Apply Noc</h2>
                  <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Noc</li>
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
                        <h2>Apply <span>NOC</span></h2>
                     </div>
                     <form  enctype="multipart/form-data" class="call-back-form" action="savenoc.php" method="post">
                        <h6>Building Details</h6>
                        <br>
                        <div class=" row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="b_usages" placeholder="Building Usage" required="">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="b_name" placeholder="Name of Buliding" required="">
                              </div>
                           </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                 <select class="form-control" name="type" required="">
                                    <option value="industrial">Industrial</option>
                                    <option value="commerical">Commerical</option>
                                    <option value="residential">Residential</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="b_floor" placeholder="Number of Sactioned Floors" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="p_area" placeholder="Parking Area" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="p_id" placeholder="Unique Property Id" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="height" placeholder="Height (in mtrs)" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="area" placeholder="Land Area (sqr mtrs)" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="total" placeholder="Total Covered Area (sqr mtrs)" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="b_address" placeholder="Building Address" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="landmark" placeholder="Landmark" required="">
                              </div>
                           </div>
                        </div>
                        <h6>Surroundings Area Details</h6>
                        <br>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="lside" placeholder="Left  Side" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="rside" placeholder="Right Side" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="fside" placeholder="Front Side" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="bside" placeholder="Back Side" required="">
                              </div>
                           </div>
                        </div>
                        <br>
                        <div class="row">
                           <div class="col-md-6">
                              <h6>Basement Details </h6>
                              <div class="form-group">
                                 <input class="form-control" type="text" name="basement" placeholder="Number of Basements" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <h6>Floor Details</h6>
                              <div class="form-group">
                                 <input class="form-control" type="text" name="floor_number" placeholder="Number of Actual Floors" required="">
                              </div>
                              <div class="form-group">
                                 <input class="form-control" type="text" name="floor_area" placeholder="Ground Floor Area(sqr mtrs) " required="">
                              </div>
                           </div>
                        </div>
                        <h6>Owner Details</h6>
                        <Br>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="o_name" placeholder="Name of Owner" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="o_number" placeholder="Contact No." required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="o_city" placeholder="City" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="o_address" placeholder="Address" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="o_landmark" placeholder="Landmark" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="o_state" placeholder="State" required="">
                              </div>
                           </div>
                        </div>
                        <h6>Applicant Details </h6>
                        <Br>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="name" placeholder="Name of Applicant" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="city" placeholder="City" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="contact" placeholder="Contact No" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="address" placeholder="Complete Address" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="landmartk" placeholder="Landmark" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="state" placeholder="State" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input class="form-control" type="text" name="email" placeholder="Email" required="">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Upload Documents</label>
                                 <input class="form-control" type="file" name="p_document">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Upload Photo</label>
                                 <input class="form-control" type="file" name="p_photo">
                              </div>
                           </div>
                        </div>
                        <br>
                        <div class="checkbox">
                           <label><input type="checkbox">&nbsp;I have checked application form carefully and above details are true in the best of my knowledge</label>
                        </div>
                  </div>
                  <div class="form-group mb-0 text-center">
                  <input class="theme-btn" type="submit" name="submit" value="Submit Now">
                  </div>
                  </form>
               </div>
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