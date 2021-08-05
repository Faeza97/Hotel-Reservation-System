

<?php
   session_start();
   require 'serverdb.php';
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
      <style type="text/css">.fancybox-margin{margin-right:13px;}</style>
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
                           <img class="logo img-responsive" src="images/logo.jpg" alt="#" width="243" height="61"> 			</a>
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
                     <div id="left_column" class="column col-xs-12 col-sm-3">
                        <div class="row margin-lr-0 block" id="filter_search_block">
                           <div class="filter_header">
                              <div class="col-sm-12">
                                 <p>Search Rooms</p>
                                 <hr class="theme-text-underline">
                              </div>
                           </div>
                           <div id="main-booking-form" class="col-sm-12 category_page_search_block clear-both">
                              <form action="search.php" autocomplete="on" autofill="on">
                                 <div class="form-group hotel_location_div">
                                    <label class="control-label" for="">Hotel Countrys</label> <input class="form-control" placeholder="Enter a country name" id="country" name="country" autocomplete="off" value="" city_cat_id="14" type="text">
                                 </div>
                                 <div class="form-group hotel_location_div">
                                    <label class="control-label" for="">Hotel City</label> <input 				class="form-control" placeholder="Enter a city name" id="city" name="city" autocomplete="off" value="" city_cat_id="14" type="text">
                                 </div>
                                 <div class="form-group htl_nm_cont">
                                    <label class="control-label" for="">Hotel Room Type</label>
                                    <select  class="form-control" id="room" name="room" style="">
                                       <option>General Rooms</option>
                                       <option>Delux Rooms</option>
                                       <option>Executive Rooms</option>
                                       <option>luxury Rooms</option>
                                    </select>
                                 </div>
                                 <div class="form-group htl_nm_cont">
                                    <label class="control-label" for="">Adults</label>
                                    <input class="form-control" placeholder="Enter number of adults" id="adults" name="adults" autocomplete="off" value="" city_cat_id="14" type="text">
                                 </div>
                                 <div class="form-group htl_nm_cont">
                                    <label class="control-label" for="">Childs</label>
                                    <input class="form-control" placeholder="Enter number of kids" id="childs" name="childs" autocomplete="off" value="" city_cat_id="14" type="text">
                                 </div>
                                 <div class="form-group">
                                    <div class="row">
				<div class="col-xs-12 col-sm-12">
                                          <label class="control-label" for="check_in_time">Check In Time</label>
                                          <div class="input-group"> <input class="form-control hasDatepicker" id="in" name="in" type="date" onchange="TDate()" required> <label class="input-group-addon" for="check_in_time"><i class="icon-calendar"></i></label></div>
                                          <p class="error_msg" id="check_in_time_error_p"></p>
                                       </div>
                                       <div class="col-xs-12 col-sm-12 margin-top-10">
                                          <label class="control-label" for="check_out_time">Check Out Time</label>
                                          <div class="input-group"> <input class="form-control hasDatepicker" id="out" name="out" type="date" onchange="TDate()" required> <label class="input-group-addon" for="check_out_time"><i class="icon-calendar"></i></label></div>
                                          <p class="error_msg" id="check_out_time_error_p"></p>
                                       </div>

                                       <hr>
                                        <div class="col-xs-12 col-sm-12 margin-top-10">
                                          <label class="control-label" for="amenities"> Room Amenities</label>                
                                          <div class="col-sm-12 lf_sub_cont">
                                               <div class="layered_filt">
                                                <input id="wifi" name="wifi" value="1" type="checkbox">
                                                <span class="filters_name">&nbsp;Wi-Fi</span>
                                             </div>
                                             <div class="layered_filt">
                                                <input id="news" name="news" value="2" type="checkbox">
                                                <span class="filters_name">&nbsp;News Paper</span>
                                             </div>
                                             <div class="layered_filt">
                                                <input id="gym" name="gym" value="3" type="checkbox">
                                                <span class="filters_name">&nbsp;Gym</span>
                                             </div>
                                             <div class="layered_filt">
                                                <input id="taxi" name="taxi" value="4" type="checkbox">
                                                <span class="filters_name">&nbsp;Taxi</span>
                                             </div>
                                             <div class="layered_filt">
                                                <input id="res" name="res" value="5" type="checkbox">
                                                <span class="filters_name">&nbsp;Restaurant</span>
                                             </div>
                                              <div class="layered_filt">
                                                <input id="spa" name="spa" value="6" type="checkbox">
                                                <span class="filters_name">&nbsp;Spa</span>
                                             </div>
                                             <div class="layered_filt">
                                                <input id="healthclub" name="healthclub" value="7" type="checkbox">
                                                <span class="filters_name">&nbsp;Health Club</span>
                                             </div>
                                              <div class="layered_filt">
                                                <input id="swim" name="swim" value="8" type="checkbox">
                                                <span class="filters_name">&nbsp;Swimming pool</span>
                                             </div>
                                              <div class="layered_filt">
                                                <input id="sa" name="sa" value="9" type="checkbox">
                                                <span class="filters_name">&nbsp;Sauna</span>
                                             </div>
                                              <div class="layered_filt">
                                                <input id="rs" name="rs" value="10" type="checkbox">
                                                <span class="filters_name">&nbsp;Room Services</span>
                                             </div>
                                              <div class="layered_filt">
                                                <input id="laun" name="laun" value="11" type="checkbox">
                                                <span class="filters_name">&nbsp;Laundry</span>
                                             </div>
                                              <div class="layered_filt">
                                                <input id="elv" name="elv" value="12" type="checkbox">
                                                <span class="filters_name">&nbsp;Elevator</span>
                                             </div>
                                               <div class="layered_filt">
                                                <input id="park" name="park" value="13" type="checkbox">
                                                <span class="filters_name">&nbsp;Parking</span>
                                             </div>
                                               <div class="layered_filt">
                                                <input id="bar" name="bar" value="13" type="checkbox">
                                                <span class="filters_name">&nbsp;Bar</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div> <button type="submit" class="btn btn-default button button-medium exclusive" > 				<span>Search</span> </button></div>
                              </form>
                           </div>
                        </div>
                     </div>
			<div id='center_column' class='center_column col-xs-12 col-sm-9'>
                                          <div class='row cat_cont'>
                                             <div class='col-sm-12'>
                                                <div class='row margin-lr-0' id='category_data_cont'>  
                        			    
                      <?php     
                        if($check) {
                        
                        $city = $_GET['city'];
                        $country = $_GET['country'];
                        $room = $_GET['room'];
                        $adults = $_GET['adults'];
                        $childs = $_GET['childs'];
                        $in = $_GET['in'];
                        $ot = $_GET['out'];
                        
                        // amenities
                        if (isset($_GET['wifi']) != null) { 
                        $wifi = $_GET['wifi'];
                        } else {$wifi = null;}
                        if (isset($_GET['news']) != null) { 
                        $news = $_GET['news'];
                        } else {$news = null;}
                        if (isset($_GET['power']) != null) { 
                        $power = $_GET['power'];
                        } else {$power = null;}
                        if (isset($_GET['frige']) != null) { 
                        $frige = $_GET['frige'];
                        } else {$frige = null;}
                        if (isset($_GET['res']) != null) { 
                        $res = $_GET['res'];
                        } else {$res = null;}
                        
                        if ($wifi == null && $news == null && $power == null && $frige == null && $res == null) {
                        $wifi = 1; $news = 2; $power = 3; $frige = 4; $res = 5;
                        }
                        
                        $sql = "SELECT h.`hotel-id`,h.`name` hname,h.`city`,h.`country`,h.`Description`,h.`URL-website`,(SELECT count(r2.`room_type-id`) FROM `room` r2 WHERE h.`hotel-id`= r2.`hotel-id` AND r.`room_type-id`=r2.`room_type-id` AND r2.`room-id` not in (SELECT r4.`room-id` FROM `booking` r4 WHERE STR_TO_DATE('".$in."', '%d-%m-%Y') BETWEEN r4.`start-date` AND r4.`end-date`) GROUP BY r2.`hotel-id`,r2.`room_type-id`) available, (SELECT r5.`room-id` FROM `room` r5 WHERE r5.`room-no`=r.`room-no` AND h.`hotel-id`= r5.`hotel-id`) roomid,
                        t.`adults`,t.`childs`,t.`name` tname,t.`picture`,t.`price-perday`,t.`total-rooms`
                        FROM `hotel` h, `room` r, `room-type` t, `room-type-amenities` m,`amenities` a
                        WHERE h.`hotel-id`= r.`hotel-id` AND r.`room_type-id`= t.`room_type-id` AND t.`room_type-id`= m.`room_type-id` AND m.`amenity-id`= a.`amenity-id`
                        AND upper(t.`name`) like upper('%". $room ."%') AND upper(h.`city`) like upper('%". $city ."%') AND upper(h.`country`) like upper('%". $country ."%') AND
                        t.`adults` like '%". $adults ."%' AND t.`childs` like '%". $childs ."%' AND a.`amenity-id` in ('".$wifi."','".$news."','".$power."','".$frige."','".$res."')
                        AND r.`room-id` not in (SELECT r3.`room-id` FROM `booking` r3 WHERE STR_TO_DATE('".$in."', '%d-%m-%Y') BETWEEN r3.`start-date` AND r3.`end-date`)
                        GROUP BY h.`hotel-id`,h.`name`,h.`city`,h.`country`,h.`Description`,h.`URL-website`,r.`room_type-id`,t.`adults`,t.`childs`,t.`name`,t.`picture`
                        ,t.`price-perday`,t.`total-rooms`";
                        
                        $result = mysqli_query($connection,$sql);
                        
                        while($row = mysqli_fetch_assoc($result)) {
                        
                        $sql_am = "SELECT a.`amenity-id`
                        FROM `room-type` t, `room-type-amenities` ra, `amenities` a
                        WHERE t.`room_type-id`=ra.`room_type-id` AND a.`amenity-id`=ra.`amenity-id`
                        AND t.`name` LIKE '%". $row['tname'] ."%' ";
                        
                        $result_am = mysqli_query($connection,$sql_am);
                        
                             echo "
                                                         <div class='col-sm-12 room_cont'>
                                                      <div class='row'><div class='col-sm-4'> <form action='' method='post'>
                                         <a href='{$row['URL-website']}'> 
                                       <img src='{$row['picture']}' class='img-responsive'> </a></div>
                                                                   <div class='col-sm-8'>
                                                                     <p class='rm_heading'>{$row['tname']}</p><hr>
                                             <h4>{$row['hname']}</h4>
                                             <h4>{$row['city']}, {$row['country']}</h4>
                                                                  <div class='rm_desc'>
                                                                     <p>{$row['Description']}</p>&nbsp;
                                                                     <a href='{$row['URL-website']}'>View More....</a>
                                                                  </div>
                                                      <p><span class='capa_txt'>Max Capacity:</span>
                                          <span class='capa_data'>{$row['total-rooms']} Rooms, {$row['adults']} Adults, {$row['childs']} child</span></p>
                                          <p><span class='capa_txt'>Available Bookings:</span><span class='capa_data'> {$row['available']}' Left <b>Hurry!</b></span></p>
                                                       <div class='rm_amenities_cont'>";
                        
                        while($row_am = mysqli_fetch_assoc($result_am)) {
                                    echo "<img src='images/{$row_am['amenity-id']}.png' class='rm_amen'>";
                        }
                                    echo "</div>
                                                        <div class='row margin-lr-0 pull-left rm_price_cont'> 
                                    <span class='pull-left rm_price_val '> $ {$row['price-perday']}.00 </span>                <span class='pull-left rm_price_txt'>/Per Night</span></div>
                        <input style='display:none;' id='rm-id' name='rm-id' value='{$row['roomid']}'/>
                                                        <button  name='btnBooking' id='btnBooking' class='btn btn-default button button-medium ajax_add_to_cart_button pull-right'><span>Book Now</span></button></form>
                                                         </div>
                                                     </div> </div>";  
                        }
                        
                        
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        if (isset($_POST['btnBooking'])) {
                        if (isset($_SESSION['login_user'])){
                        $user = $_SESSION['login_user'];
                        $roomid = $_POST['rm-id'];
                        $sql = 'INSERT INTO `booking` (`booking-id`, `start-date`, `end-date`, `room-id`, `guest-id`) VALUES ("",STR_TO_DATE("'.$in.'", "%d-%m-%Y"),STR_TO_DATE("'.$ot.'", "%d-%m-%Y"), "'.$roomid.'", (select `guest-id` from guest where email="'.$user.'" or username="'.$user.'"))';  
                        if(mysqli_query($connection, $sql)){  
                        if (mysqli_num_rows($result) > 0) {
                        echo '<script type="text/javascript">';
                        echo 'window.location.href="booking.php";';
                        echo '</script>';
                        }else{  
                        echo "<br>Could not insert record: ". mysqli_error($connection); 
                        }
                        }
                        
                        }else{
                        echo '<script type="text/javascript">';
                        echo 'window.location.href="login.php";';
                        echo '</script>';     
                        }
                        }
                        }
                        $connection->close();
                        }
                        
                        ?>
                  </div>
                  </div></div></div></div></div>
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
                           <p>We are Students in fourth Stage in engineering department. We started to make a project for our 4th stage project.</p>
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
                        <div class="row margin-lr-0 footer-payment-block"> <img src="images/icon-visa.png"> <img src="images/icon-master-card.png"> <img src="images/icon-american-express.png"> <img src="images/icon-paypal.png"></div>
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
                              <div class="form-group"> <input class="inputNew form-control grey newsletter-input" id="newsletter-input" name="email" size="18" value="Enter your e-mail" type="text"> <button type="submit" name="submitNewsletter" class="btn button button-medium newsletter-btn"> <span>Subscribe</span> </button> <input name="action" value="0" type="hidden"></div>
                           </form>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </footer>
         <div class="copyRightWrapper">
            <p class="copyRight"> © 2018 &nbsp;<a href="#">&nbsp;Hotel Reservation System</a>.&nbsp; All rights reserved.</p>
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
	 if (new Date(inDate).getTime() < new Date().getTime()) {
               alert("The Check in Date must be Greater or Equal to Today date");
               return false;
         }
         return true;
         }
           
      </script>
      <script type="text/javascript">
         $(function(){
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
         
            for (var i=0; i<arr.length; i++) {
              // separate the keys and the values
              var a = arr[i].split('=');
         
              // in case params look like: list[]=thing1&list[]=thing2
              var paramNum = undefined;
              var paramName = a[0].replace(/\[\d*\]/, function(v) {
                paramNum = v.slice(1,-1);
                return '';
              });
         
              // set parameter value (use 'true' if empty)
              var paramValue = typeof(a[1])==='undefined' ? true : a[1];
         
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


