<?php
   session_start();
   require 'serverdb.php';

   if (!isset($_SESSION['login_user'])) {
       echo '<script type="text/javascript">';
       echo 'window.location.href="login.php";';
       echo '</script>';
   }
?>
<!DOCTYPE html>
<html style="" class="" lang="en-us">

<head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta charset="utf-8">
   <title>Hotel Reservation System</title>
   <meta name="description" content="This category are for hotels only">
   <meta name="robots" content="index,follow">
   <meta name="viewport" content="width=device-width, maximum-scale=1.6, initial-scale=1.0">
   <meta name="apple-mobile-web-app-capable" content="yes">
   <link rel="icon" type="image/vnd.microsoft.icon" href="#">
   <link rel="shortcut icon" type="image/x-icon" href="#">
   <link rel="stylesheet" href="bootstrap/css/css-min.css" type="text/css" media="all">
   <link href="bootstrap/css/css.css" rel="stylesheet" type="text/css">
   <script type="text/javascript" async="" src="bootstrap/js/analytics.js"></script>
   <script async="" src="bootstrap/js/js.js"></script>
   <style type="text/css">
      .fancybox-margin {
         margin-right: 13px;
      }
   </style>
</head>

<body id="category" class="category show-left-column hide-right-column lang_en" style="">
   <div id="page" style="">
      <div class="header-container" style="">
         <header id="header" style="background-color:#252525;">
            <div class="banner">
               <div class="container">
                  <div class="row"></div>
               </div>
            </div>
            <div class="nav">
               <div class="container">
                  <div class="row">
                     <nav></nav>
                  </div>
               </div>
            </div>
            <div>
               <div class="container">
                  <div class="row">
                     <div id="header_logo" class="col-xs-4">
                        <a href="index.php" title="Home">
                           <img class="logo img-responsive" src="images/logo.jpg" alt="#" width="243" height="61"> </a>
                     </div>
                  </div>
               </div>
         </header>
      </div>
      <div class="columns-container">
         <div id="columns" class="container">
            <div id="slider_row" class="row">
               <div id="top_column" class="center_column col-xs-12 col-sm-12"></div>
            </div>
            <div class="row">
               <div id="center_column" class="center_column col-xs-12 col-sm-12">


                  <div id="order-detail-content" class="table_block table-responsive">
                     <table id="cart_summary" class="table table-bordered stock-management-on">
                        <thead>
                           <tr class="table_head">
                              <th class="cart_product">Room Image</th>
                              <th class="cart_description">Room Description</th>
                              <th>Room Capacity</th>
                              <th>Rooms</th>
                              <th>Check-in Date</th>
                              <th>Check-out Date</th>
                              <th class="cart_unit">Unit Price</th>
                           </tr>
                        </thead>
                        <?php
if ($check) {
    $user = $_SESSION['login_user'];
    $sql = 'select * from `room` r,`room-type` t, `booking` b where r.`room_type-id`=t.`room_type-id` and r.`room-id`=b.`room-id` and b.`booking-id` not in (select `booking-id` from `booking-payment`) and b.`guest-id` = (select `guest-id` from guest where email="'.$user.'" or username="'.$user.'")';
                       
    $result = mysqli_query($connection, $sql);
                        
    while ($row = mysqli_fetch_assoc($result)) {
        echo        "<tbody>
                              <tr class='table_body'>
                                 <td class='cart_product'> <img src='{$row['picture']}' class='img-responsive'> </td>
                                 <td class='cart_description'>
                                    <p class='product-name'> {$row['name']}</p>
                                 </td>
                                 <td>
                                    <p class='text-left'> {$row['adults']} Adults, {$row['childs']} Children</p>
                                 </td>
                                 <td class='text-center'>
                                    <p> {$row['total-rooms']}</p>
                                 </td>
                                 <td class='text-center'>
                                    <p> {$row['start-date']}</p>
                                 </td>
                                 <td class='text-center'>
                                    <p> {$row['end-date']}</p>
                                 </td>
                                 <td class='cart_unit'>
                                    <p class='text-center'> <span class='product_original_price '> $ {$row['price-perday']}.00 </span></p>
                                 </td>
                              </tr>
                           </tbody>";
    }
    $sqlsum = 'select sum(t.`price-perday`) total from `room` r,`room-type` t, `booking` b where r.`room_type-id`=t.`room_type-id` and r.`room-id`=b.`room-id` and b.`booking-id` not in (select `booking-id` from `booking-payment`) and b.`guest-id` = (select `guest-id` from guest where email="'.$user.'" or username="'.$user.'")';
    $resultsum = mysqli_query($connection, $sqlsum);
                        
    while ($rowsum = mysqli_fetch_assoc($resultsum)) {
        echo 			  "<tfoot>
                              <tr class='table_tfoot table_total_tr cart_total_price '>
                                 <td colspan='4' class='total_price_container text-right'>
                                    <span>Total</span>
                                    <div class='hookDisplayProductPriceBlock-price'></div>
                                 </td>
                                 <td colspan='3' class='price' id='total_price_container'> <span id='total_price'>$ {$rowsum['total']}.00</span></td>
                              </tr>
                           </tfoot>";
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['btnPayment'])) {
            $user = $_SESSION['login_user'];
            $acid = $_POST['ac-id'];
            $sql1 = 'INSERT INTO `payment` (`payment-id`, `amount`, `account/card-no`, `guest-id`) VALUES ("",(select sum(t.`price-perday`) total from `room` r,`room-type` t, `booking` b where r.`room_type-id`=t.`room_type-id` and r.`room-id`=b.`room-id` and b.`booking-id` not in (select `booking-id` from `booking-payment`) and b.`guest-id` = (select `guest-id` from guest where email="'.$user.'" or username="'.$user.'")),"'.$acid.'", (select `guest-id` from guest where email="'.$user.'" or username="'.$user.'"))';
            
            mysqli_query($connection, $sql1);
            
            $sql2 = 'select * from `room` r,`room-type` t, `booking` b where r.`room_type-id`=t.`room_type-id` and r.`room-id`=b.`room-id` and b.`booking-id` not in (select `booking-id` from `booking-payment`) and b.`guest-id` = (select `guest-id` from guest where email="'.$user.'" or username="'.$user.'")';
                        
            $results2 = mysqli_query($connection, $sql2);
                        
            while ($rows2 = mysqli_fetch_assoc($results2)) {
                $sql3 = 'INSERT INTO `booking-payment` (`booking-id`,`payment-id`) VALUES ((select max(b.`booking-id`) from `room` r,`room-type` t, `booking` b where r.`room_type-id`=t.`room_type-id` and r.`room-id`=b.`room-id` and b.`booking-id` not in (select bt.`booking-id` from `booking-payment` bt) and b.`guest-id` = (select `guest-id` from `guest` where `email`="'.$user.'" or `username`="'.$user.'")),(select ifnull(max(`payment-id`),0) from `payment`))';
                mysqli_query($connection, $sql3);
            }
            
            echo '<script type="text/javascript">';
            echo 'window.location.href="payment.php";';
            echo '</script>';
        }
    }
    $connection->close();
}
?>


                     </table>
                  </div>

                  <div id="opc_new_account" class="opc-main-block">
                     <div id="opc_new_account-overlay" class="opc-overlay" style="display: none;"></div>
                     <h1 class="page-heading step-num">Hotel Booking</h1>
                     <form class="box">
                        <fieldset>
                           <h3 class="page-subheading">Already registered?</h3>
                           <p><a href="login.php" id="openLoginFormBlock">» Click here</a></p>
                        </fieldset>
                     </form>

                     <form action="" method="post">
                        <fieldset>


                           <h3 class="page-subheading top-indent">Account Details</h3>
                           <div class="text form-group"> <label>Account No <sup>*</sup></label> <input
                                 class="text form-control validate" id='ac-id' name='ac-id' type="text" required />
                           </div>
                           <div class="required text form-group"> <label for="firstname">First name </label> <input
                                 class="text form-control validate" id="firstname" name="firstname"
                                 data-validate="isName" type="text"></div>
                           <div class="required text form-group"> <label for="lastname">Last name </label> <input
                                 class="text form-control validate" id="lastname" name="lastname" data-validate="isName"
                                 type="text"></div>
                           <br> <button name='btnPayment' id='btnPayment'
                              class="btn btn-default button button-medium ajax_add_to_cart_button">
                              <span>Payment</span></button>
                        </fieldset>

                     </form>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-container">
         <footer id="footer" class="container">
            <div class="row margin-btm-50">
               <div class="col-sm-3">
                  <div class="row">
                     <section class="col-xs-12 col-sm-12">
                        <div class="row margin-lr-0 footer-section-heading">
                           <p>About</p>
                           <hr>
                        </div>
                        <div class="row margin-lr-0 footer-about-hotel">
                           <p>We are Students in fourth Stage in engineering department. We started to make a project
                              for our 4th stage project.</p>
                        </div>
                     </section>
                  </div>
               </div>
               <div class="col-sm-3">
                  <div class="row">
                     <section class="col-xs-12 col-sm-12">
                        <div class="row margin-lr-0 footer-section-heading">
                           <p>Explore</p>
                           <hr>
                        </div>
                        <div class="row margin-lr-0">
                           <ul class="footer-explore-section">
                              <li class="item"> <a title="Home" href="index.php"> Home </a></li>
                              <li class="item"> <a title="Contact" href="contact.php"> Contact </a></li>
                           </ul>
                        </div>
                     </section>
                  </div>
               </div>
               <div class="col-sm-3">
                  <div class="row">
                     <section class="col-xs-12 col-sm-12">
                        <div class="row margin-lr-0 footer-section-heading">
                           <p>payment accepted</p>
                           <hr>
                        </div>
                        <div class="row margin-lr-0 footer-payment-block"> <img src="images/icon-visa.png"> <img
                              src="images/icon-master-card.png"> <img src="images/icon-american-express.png"> <img
                              src="images/icon-paypal.png"></div>
                     </section>
                  </div>
               </div>
               <div class="col-sm-3">
                  <div class="row">
                     <section class="col-xs-12 col-sm-12">
                        <div class="row margin-lr-0 footer-section-heading">
                           <p>GET NOTIFICATIONS</p>
                           <hr>
                        </div>
                        <div class="row margin-lr-0">
                           <form action="" method="post">
                              <div class="form-group"> <input class="inputNew form-control grey newsletter-input"
                                    id="newsletter-input" name="email" size="18" value="Enter your e-mail" type="text">
                                 <button type="submit" name="submitNewsletter"
                                    class="btn button button-medium newsletter-btn"> <span>Subscribe</span> </button>
                                 <input name="action" value="0" type="hidden">
                              </div>
                           </form>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </footer>
         <div class="copyRightWrapper">
            <p class="copyRight"> © 2018 &nbsp;<a href="#">&nbsp;Hotel Reservation System</a>.&nbsp; All rights
               reserved.</p>
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
         var inDate = getAllUrlParams().in;
         var outDate = getAllUrlParams().out;

         if (new Date(outDate).getTime() <= new Date(inDate).getTime()) {
            alert("The Check out Date must be Greater or Equal to Checkin date");
            return false;
         }
         return true;
      }
   </script>
   <script type="text/javascript">
      $(function() {
         //var txt = $('#search').val();
         var rt = getAllUrlParams().room;
         var cty = getAllUrlParams().city;
         var coutry = getAllUrlParams().country;
         var inn = getAllUrlParams().in;
         var ot = getAllUrlParams().out;
         var adult = getAllUrlParams().adults;
         var child = getAllUrlParams().childs;
         document.getElementById("country").value = coutry;
         document.getElementById("city").value = cty;
         document.getElementById("room").value = rt.replace("+", " ");
         document.getElementById("adults").value = adult;
         document.getElementById("childs").value = child;
         document.getElementById("in").value = inn;
         document.getElementById("out").value = ot;
         /*
         var res = txt.replace("+", "):contains(");
         //alert(res);
         //alert(url.substring( url.indexOf('?') + 5 ));
         //$( "div:contains("+txt+")" ).css( "text-decoration", "underline" );
         $(".room_cont").hide();
         $(".room_cont:contains("+res+")").show(); */
      });

      function getAllUrlParams(url) {

         // get query string from url (optional) or window
         var queryString = url ? url.split('?')[1] : window.location.search.slice(1);

         // we'll store the parameters here
         var obj = {};

         // if query string exists
         if (queryString) {

            // stuff after # is not part of query string, so get rid of it
            queryString = queryString.split('#')[0];

            // split our query string into its component parts
            var arr = queryString.split('&');

            for (var i = 0; i < arr.length; i++) {
               // separate the keys and the values
               var a = arr[i].split('=');

               // in case params look like: list[]=thing1&list[]=thing2
               var paramNum = undefined;
               var paramName = a[0].replace(/\[\d*\]/, function(v) {
                  paramNum = v.slice(1, -1);
                  return '';
               });

               // set parameter value (use 'true' if empty)
               var paramValue = typeof(a[1]) === 'undefined' ? true : a[1];

               // (optional) keep case consistent
               //  paramName = paramName.toLowerCase();
               //  paramValue = paramValue.toLowerCase();

               // if parameter name already exists
               if (obj[paramName]) {
                  // convert value to array (if still string)
                  if (typeof obj[paramName] === 'string') {
                     obj[paramName] = [obj[paramName]];
                  }
                  // if no array index number specified...
                  if (typeof paramNum === 'undefined') {
                     // put the value on the end of the array
                     obj[paramName].push(paramValue);
                  }
                  // if array index number specified...
                  else {
                     // put the value at that index number
                     obj[paramName][paramNum] = paramValue;
                  }
               }
               // if param name doesn't exist yet, set it
               else {
                  obj[paramName] = paramValue;
               }
            }
         }

         return obj;
      }
   </script>
</body>

</html>