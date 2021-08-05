<?php
   session_start();
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Hotels Resevation System</title>
   <!-- Bootstrap -->
   <link rel="stylesheet" href="bootstrap/css/style.min.css">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="bootstrap/css/responsive-slider.css">
   <link rel="stylesheet" href="bootstrap/css/animate.css">
   <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
   <link rel="stylesheet" href="bootstrap/css/style.css">
   <script type="text/javascript" src="countries.js"> </script>
   <link href="bootstrap/css/css.css" rel="stylesheet" type="text/css">
   <script type="text/javascript" async="" src="bootstrap/js/analytics.js"></script>
   <script async="" src="bootstrap/js/js.js"></script>
   <style type="text/css">
      .fancybox-margin {
         margin-right: 13px;
      }
   </style>
   <script async="" src="bootstrap/js/js.js"></script>
   <!--  <link rel="stylesheet" href="bootstrap/css/css-min.css" type="text/css" media="all"> -->

</head>

<body>
   <header>
      <div class="containerr">
         <div class="row">
            <nav class="navbar navbar-default" role="navigation">
               <div class="containerr-fluid">
                  <div class="navbar-header">
                     <div class="navbar-brand">
                        <a href="/">
                           <h1>Hotel Reservation System</h1>
                        </a>
                     </div>
                  </div>
                  <div class="menu">
                     <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="index.php">Home</a></li>
                        <li role="presentation"><a href="contact.php">Contact</a></li>
                        <?php
                              if (isset($_SESSION['login_user'])) {
                                  echo "<li role="."presentation"."><a href="."logout.php".">Logout</a></li>";
                              } else {
                                  echo "<li role="."presentation"."><a href="."login.php".">Sign In</a></li>";
                              }
                                ?>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
   </header>
   <!-- Responsive slider - START -->
   <div class="slider">
      <div>
         <div>
            <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
               <div class="slides" data-group="slides">
                  <ul>
                     <li>
                        <div class="slide-body" data-group="slide">
                           <img src="images/slide1.jpg" alt="" class="img-responsive">
                        </div>
                     </li>
                     <li>
                        <div class="slide-body" data-group="slide">
                           <img src="images/slide2.jpg" alt="" class="img-responsive">
                        </div>
                     </li>
                     <li>
                        <div class="slide-body" data-group="slide">
                           <img src="images/slide3.jpg" alt="" class="img-responsive">
                        </div>
                     </li>
                     <li>
                        <div class="slide-body" data-group="slide">
                           <img src="images/slide4.jpg" alt="" class="img-responsive">
                        </div>
                     </li>
                  </ul>
               </div>
               <a class="slider-control left" href="#" data-jump="prev">
                  <i class="fa fa-angle-left fa-2x"></i>
               </a>
               <a class="slider-control right" href="#" data-jump="next">
                  <i class="fa fa-angle-right fa-2x"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
   <!-- Responsive slider - END -->
   <div class="container">
      <div class="row">
         <div class="bg">
            <div style="top: 520px;" class="booking-form-container container">
               <div class="booking-form-inner-container">
                  <div id="main-booking-form" class="style-2">
                     <form class="booking-form clearfix" action="search.php">
                        <!-- Do Not remove the classes -->
                        <div class="input-daterange clearfix">
                           <div class="booking-fields col-xs-6 col-md-12">
                              <!-- 

                                 <input type="text" name="country" placeholder="Country">
                                 <input type="text" name="city" placeholder="City">
 <br />Select Country (without states):
        <select id="country2" name="country2"></select>
        <br />
                              -->

                              <select id="country" name="country" placeholder="Country"></select>
                              <br />
                              <select name="city" id="city" placeholder="City"></select>
                              <br />

                              <script language="javascript">
                                 populateCountries("country", "city");
                                 populateCountries("country2");
                              </script>
                           </div>
                           <!-- <div class="booking-fields col-xs-6 col-md-12" data-date-format="dd MM yyyy"
                                 data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                 Choose check in date
                                 <input type="date" placeholder="Choose check in date"  class="" name="in" onchange="TDate()" required>
                                 <i class="fa fa-calendar"></i>
                              </div>
                              <div class="booking-fields col-xs-6 col-md-12">
                                 Choose check out date
                                 <input type="date" placeholder="Choose check in date"  class="" name="out" onchange="TDate()" required>
                                 <i class="fa fa-calendar"></i>
                              </div>
-->
                           <div class="col-xs-12 col-sm-12">
                              <label class="control-label" for="check_in_time">Check In Time</label>
                              <div class="input-group"> <input class="form-control hasDatepicker" id="in" name="in"
                                    type="date" onchange="TDate()" required> <label class="input-group-addon"
                                    for="check_in_time"><i class="icon-calendar"></i></label></div>
                              <p class="error_msg" id="check_in_time_error_p"></p>
                           </div>
                           <div class="col-xs-12 col-sm-12 margin-top-10">
                              <label class="control-label" for="check_out_time">Check Out Time</label>
                              <div class="input-group"> <input class="form-control hasDatepicker" id="out" name="out"
                                    type="date" onchange="TDate()" required> <label class="input-group-addon"
                                    for="check_out_time"><i class="icon-calendar"></i></label></div>
                              <p class="error_msg" id="check_out_time_error_p"></p>
                           </div>
                        </div>
                        <div class="booking-fields col-xs-6 col-md-12">
                           <select name="adults" style="" required>
                              <option value="">How Many Adult?</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                           </select>
                           <!-- End of Select boxes -->
                        </div>
                        <div class="booking-fields col-xs-6 col-md-12">
                           <select name="childs" style="" required>
                              <option value="">How Many Children ?</option>
                              <option value="0">0</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                           </select>
                        </div>
                        <div class="booking-fields col-xs-6 col-md-12">
                           <select name="room" style="">
                              <option>General Rooms</option>
                              <option>Delux Rooms</option>
                              <option>Executive Rooms</option>
                              <option>luxury Rooms</option>
                           </select>
                        </div>
                        <div class="booking-button-container">
                           <input class="btn btn-default" value="Check Availability" type="submit">
                           <!-- Submit button -->
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script async="" src="https://www.google-analytics.com/analytics.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="bootstrap/js/jquery-2.1.1.min.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
   <script src="bootstrap/js/responsive-slider.js"></script>
   <script src="bootstrap/js/wow.min.js"></script>
   <script>
      wow = new WOW({}).init();

      function TDate() {
         var inDate = document.getElementById("in").value;
         var outDate = document.getElementById("out").value;

         if (new Date(outDate).getTime() <= new Date(inDate).getTime()) {
            alert("The Check out Date must be Greater or Equal to Checkin date");
            return false;
         }
         if (new Date(inDate).getTime() < new Date().getTime()) {
            alert("The Check in Date must be Greater or Equal to Today date");
            return false;
         }
         return true;
      }
   </script>
</body>

</html>