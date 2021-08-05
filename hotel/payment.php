

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
                  <div id="center_column" class="center_column col-xs-12 col-sm-12">
                     <h1 class="page-heading bottom-indent">Order history</h1>
                     <p class="info-title">Here are the orders you've placed since your account was created.</p>
                     <div class="block-center" id="block-history">
                        <table id="order-list" class="table table-bordered footab default footable-loaded footable">
                           <thead>
                              <tr>
                                 <th class="first_item footable-first-column" data-sort-ignore="true">Order reference</th>
                                 <th class="item footable-sortable">Date<span class="footable-sort-indicator"></span></th>
                                 <th data-hide="phone" class="item footable-sortable">Total price<span class="footable-sort-indicator"></span></th>
                                 <th data-hide="phone" class="item footable-sortable">Due Price<span class="footable-sort-indicator"></span></th>
                                 <th data-sort-ignore="true" data-hide="phone,tablet" class="item">Payment</th>
                                 <th class="item footable-sortable">Status<span class="footable-sort-indicator"></span></th>
                                 <th class="item footable-sortable">Refund Status<span class="footable-sort-indicator"></span></th>
                                 <th data-sort-ignore="true" data-hide="phone,tablet" class="item">Invoice</th>
                                 <th data-sort-ignore="true" data-hide="phone,tablet" class="last_item footable-last-column">&nbsp;</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr class="first_item ">
                                 <td class="history_link bold footable-first-column"><span class="footable-toggle"></span> <a class="color-myaccount" href="javascript:showOrder(1,%208,%20'/index.php?controller=order-detail');"> GJRMZFVIT </a></td>
                                 <td data-value="20180313162001" class="history_date bold"> 03/13/2018</td>
                                 <td class="history_price" data-value="0.000000"> <span class="price"> $0.00 </span></td>
                                 <td class="history_price" data-value="0"> <span class="price"> $0.00 </span></td>
                                 <td class="history_method">Free order</td>
                                 <td data-value="2" class="history_state"> <span class="label dark" style="background-color:#32CD32; border-color:#32CD32;"> Payment accepted </span></td>
                                 <td class="history_refund _status"> --</td>
                                 <td class="history_invoice"> <a class="link-button" href="/index.php?controller=pdf-invoice&amp;id_order=8" title="Invoice" target="_blank"> <i class="icon-file-text large"></i>PDF </a></td>
                                 <td class="history_detail footable-last-column"> <a class="btn btn-default button button-small" href="javascript:showOrder(1,%208,%20'/index.php?controller=order-detail');"> <span> Details<i class="icon-chevron-right right"></i> </span> </a></td>
                              </tr>
                           </tbody>
                        </table>
                        <div id="block-order-detail" class="unvisible">&nbsp;</div>
                     </div>
                     <ul class="footer_links clearfix">
                        <li> <a class="btn btn-default button button-small" href="booking.php"> <span> <i class="icon-chevron-left"></i> Back to Your Account </span> </a></li>
                        <li> <a class="btn btn-default button button-small" href="index.php"> <span><i class="icon-chevron-left"></i> Home</span> </a></li>
                     </ul>
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


