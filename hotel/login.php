

<?php
   session_start(); // Starting Session
   
   if(isset($_SESSION['login_user'])){
   header("location: index.php");
   }
   
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
      <link rel="stylesheet" href="bootstrap/css/style-awesome.css">
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
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
                        <li role="presentation" ><a href="index.php">Home</a></li>
                        <li role="presentation"><a href="contact.php">Contact</a></li>
                        <?php
                           if (isset($_SESSION['login_user'])){
                           echo "<li role="."presentation"."><a href="."logout.php".">Logout</a></li>";
                           }else{
                           echo "<li role="."presentation"."><a href="."login.php".">Sign In</a></li>";
                           }
                             ?>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </header>
      <div class="cotn_principal">
         <div class="cont_centrar">
            <div class="cont_login">
               <div class="cont_info_log_sign_up">
                  <div class="col_md_login">
                     <div class="cont_ba_opcitiy">
                        <h2>LOGIN</h2>
                        <p></p>
                        <button class="btn_login" onclick="cambiar_login()">LOGIN</button> 
                     </div>
                  </div>
                  <div class="col_md_sign_up">
                     <div class="cont_ba_opcitiy">
                        <h2>SIGN UP</h2>
                        <p></p>
                        <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
                     </div>
                  </div>
               </div>
               <div class="cont_back_info">
                  <div class="cont_img_back_grey">
                     <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
                  </div>
               </div>
               <div class="cont_forms" >
                  <div class="cont_img_back_">
                     <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
                  </div>
                  <form action="" method="post">
                     <div class="cont_form_login">
                        <!-- <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a> -->
                        <h2>LOGIN</h2>
                        <input id="user" name="user" placeholder="Email or Username" type="text">
                        <input id="password" name="password" placeholder="Password" type="password">
                        <button class="btn_login" name="submit" type="submit">LOGIN</button>
                  </form>
                  </div>
                  <form action="" method="post">
                     <div class="cont_form_sign_up">
                        <!--<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a> -->
                        <h2>SIGN UP</h2>
                        <input type="text" id="username" name="username" placeholder="UserName" />
                        <input type="text" id="email" name="email" placeholder="Email" />
                        <input type="password" id="password" name="password" placeholder="Password" />
                        <button class="btn_sign_up" name="btnSignUp" id="btnSignUp" type="submit">SIGN UP</button>
                  </form>
                  </div>
               </div>
               <?php
                  require 'serverdb.php';
                  if($check) {
                  
                  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                  
                      if (isset($_POST['btnSignUp'])) {
                  	$username = $_POST['username'];
                  	$email = $_POST['email'];
                  	$password = $_POST['password'];
                  	if ($username != null & $email != null & $password != null) {
                  	$sql = 'INSERT INTO guest (username, email, password) VALUES("'.$username.'","'.$email.'","'.$password.'")';  
                  	if(mysqli_query($connection, $sql)){  
                   	echo "<span><br>Record inserted successfully</span>";
                  	}else{  
                  	echo "<br>Could not insert record: ". mysqli_error($connection); 
                  	}
                  $username = null;
                  $email  = null;
                  $password = null; 
                  $_POST['username'] = null;
                  $_POST['email']  = null;
                  $_POST['password'] = null;
                  $_POST['btnSignUp'] = null;  
                  }	
                  }
                  }

                  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                  
                      if (isset($_POST['submit'])) {
                  	$user = $_POST['user'];
                  	$password = $_POST['password'];
                  $query = "select * from guest where password='".$password."' AND (email='".$user."' or username='".$user. "')";
                  $result = mysqli_query($connection,$query);
                  
                  if (mysqli_num_rows($result) > 0) {
                  $_SESSION['login_user']=$user; // Initializing Session
                  	echo '<script type="text/javascript">';
        		echo 'window.location.href="index.php";';
        		echo '</script>';
                  } else {
                  echo "<br><span>Email or Password is invalid</span>";
                  }
                  }
		  }
                  $connection->close();
                  }
                  
                  ?>
            </div>
         </div>
      </div>
      <script  src="bootstrap/js/cambiar-sign-up.js"></script>
   </body>
</html>


