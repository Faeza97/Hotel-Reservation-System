<?php
   session_start();
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <title>Contact</title>
   <!-- Bootstrap -->
   <!--  <script type='text/javascript' src='scripttt.js'></script> -->
   <link rel="stylesheet" href="bootstrap/css/style.min.css">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="bootstrap/css/responsive-slider.css">
   <link rel="stylesheet" href="bootstrap/css/animate.css">
   <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
   <link rel="stylesheet" href="bootstrap/css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
   <header>
      <div class="containerr">
         <div class="row">
            <nav class="navbar navbar-default" role="navigation">
               <div class="containerr-fluid">
                  <div class="navbar-header">
                     <div class="navbar-brand">
                        <!--   <img src="img/20171224_185225.jpg"> -->
                        <a href="/">
                           <h1>Hotel Reservation System</h1>
                        </a>
                     </div>
                  </div>
                  <div class="menu">
                     <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"><a href="index.php">Home</a></li>
                        <li role="presentation" class="active"><a href="contact.php">Contact</a></li>
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
   <div class="container">
      <h1 class="title">Contact</h1>
      <!-- form -->
      <div class="contact">
         <div class="row">
            <div class="col-sm-12">
               <div class="map">
                  <iframe
                     src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12884.55715396597!2d44.016238!3d36.163165!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400724a92e583837%3A0x791a5405f8679d0c!2sSalahaddin+University+-+College+of+Science!5e0!3m2!1sen!2s!4v1518368815025"
                     width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
               <div class="col-sm-6">
                  <div class="spacer">
                     <h4>Write to us</h4>
                     <form role="form">
                        <div class="form-group">
                           <input type="email" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                           <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                           <input type="phone" class="form-control" id="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                           <textarea type="email" class="form-control" placeholder="Message" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-default">Send</button>
                     </form>
                  </div>
               </div>
            </div>
            <!-- form -->
            <div class="col-sm-6">
               <!-- Introduction Row -->
               <div class="row">
                  <div class="col-lg-12">
                     <h4>About Us</h4>
                     <!-- <small>It's Nice to Meet You!</small> -->
                     </h1>
                     <p class="aboutc">
                        I am <strong>Faeza Salman</strong>, Student in fourth Stage in engineering department. I started
                        to make a Final
                        Research project
                        for our 4th stage for Graduation, which is related to Hotel Reservation System under the
                        supervision
                        of Mr. Salar The purpose of the project is booking a room in a hotel.
                        If you have any questions or suggestions you can join us through these (options).
                     </p>
                     <h4>Find Us</h4>
                     <a href="https://facebook.com/"><i class="fa fa-facebook"
                           style="background: #3B5998;"></i></a>&ensp;
                     <a href="https://twitter.com/"><i class="fa fa-twitter" style="background: #55ACEE;"></i></a>&ensp;
                     <a href="https://google.com/"><i class="fa fa-google" style="background: #dd4b39;"></i></a>&ensp;
                     <a href="https://linkedin.com/"><i class="fa fa-linkedin"
                           style="background: #007bb5;"></i></a>&ensp;
                     <a href="https://youtube.com/"><i class="fa fa-youtube" style="background: #bb0000;"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <!-- Team Members Row -->
         <!-- <div class="row">
            <div class="col-lg-12 text-center">
               <h2 class="page-header" style="font-family: times;">Our Team</h2>
            </div>
            <div class="col-lg-3 col-sm-6 "> -->
         <!--  <img class="img-circle img-responsive img-center" src= "user1.png"> -->
         <!-- <h3 style="font-family: times;"> &ensp;Fayza Salman
                  <small style="font-family: times;color: #f60;"> <br> &ensp; Student</small>
               </h3>
               <p style="font-family: times;">E-mail: <font style="color: #f60;">fayza@gmail.com</font> <br /> Phone No:
                  <font style="color: #f60;">(+111) 123 456</font>
               </p>
            </div> -->
         <!-- <div class="col-lg-3 col-sm-6 ">
            <h3 style="font-family: times;"> &ensp;Lona Amanj
               <small style="font-family: times;color: #f60;"> <br> &ensp; Student</small>
            </h3>
            <p style="font-family: times;">E-mail: <font style="color: #f60;">lona@gmail.com</font> <br/> Phone No: <font style="color: #f60;">(+111) 123 456</font> </p>
         </div>
         <div class="col-lg-3 col-sm-6 ">
            <h3 style="font-family: times;"> &ensp;Zaynab Sudad
               <small style="font-family: times;color: #f60;"> <br> &ensp; Student</small>
            </h3>
            <p style="font-family: times;">E-mail: <font style="color: #f60;">zaynab@gmail.com</font> <br/> Phone No: <font style="color: #f60;">(+111) 123 456</font> </p>
         </div>
         <div class="col-lg-3 col-sm-6 ">
            <h3 style="font-family: times;"> &ensp;Chnar Ahmed
               <small style="font-family: times;color: #f60;"> <br> &ensp; Student</small>
            </h3>
            <p style="font-family: times;">E-mail: <font style="color: #f60;">chnar@gmail.com</font> <br/> Phone No: <font style="color: #f60;">(+111) 123 456</font> </p>
         </div> -->
         <!-- </div>
         <hr> -->
</body>

</html>