<?php  
 $curdate=date("Y/m/d");
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                <!--    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
                     <li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                        <li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                     -->
				
                    
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                   


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             Room Booking Status
                             <small>Payment Details</small>
                             <br>
                             <small>  <?php echo  $curdate; ?> </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW 
				<?php
						include ('db.php');
						$sql = "SELECT h.`name` HotelName,t.`name` Room,h.`city` City,h.`country` Country,h.`postal/code-zip` PostalCode,t.`adults` Adults,t.`childs` Childs, t.`price-perday` Price,h.`Description` FROM `hotel` h,`room` r,`room-type` t WHERE 
h.`hotel-id`=r.`hotel-id` and r.`room_type-id`=t.`room_type-id` ";
						$re = mysqli_query($con,$sql);
						$c =0;
						while($row=mysqli_fetch_assoc($re) )
						{
								$new = $row['room-no'];
								//$cin = $row['cin'];
								//$id = $row['id'];
								if($new=="Not Conform")
								{
									$c = $c + 1;
									
								
								}
						
						}
		
				?> -->

					<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
							
							<div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											<button class="btn btn-default" type="button">
												 New Room Bookings  <span class="badge"><?php echo $c ; ?></span>
											</button>
											</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                           <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th> 	 
					    						<th>HotelName</th>
					    						<th>Room</th>
											<th>Guest</th>
                                             						<th>Country</th>
					 						<th>City</th>
											<th>Adults</th>
											<th>Childs</th>
											<th>CheckIn</th>
											<th>CheckOut</th>
											<th>Price</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
include ('db.php');
									$tsql = "SELECT @rownum:=@rownum + 1 as row_number,h.`hotel-id`,h.`name` HotelName,t.`name` Room,g.`name` Guest,h.`city` City,h.`country` Country,h.`postal/code-zip` PostalCode,t.`adults` Adults,t.`childs` Childs,b.`start-date` CheckIn,b.`end-date` CheckOut, t.`price-perday` Price,h.`Description`,g.`guest-id` FROM `hotel` h,`room` r,`room-type` t,`booking` b,`guest-details` g, (SELECT @rownum := 0) r WHERE 
h.`hotel-id`=r.`hotel-id` and r.`room_type-id`=t.`room_type-id` and r.`room-id`=b.`room-id` and b.`guest-id`=g.`guest-id`";
									$tre = mysqli_query($con,$tsql);
									while($trow=mysqli_fetch_assoc($tre) ) 
									{	
									
                                        $c =0;
                                        $new = $row['row_number'];
                      
                                if($new=="Not Conform")
                                {
                                    $c = $c + 1;
  
                                }
											echo"<tr>
												<th>".$trow['row_number']."</th>
												<th>".$trow['HotelName']."</th>
												<th>".$trow['Room']."</th>
												<th>".$trow['Guest']."</th>
												<th>".$trow['Country']."</th>
												<th>".$trow['City']."</th>
												<th>".$trow['Adults']."</th>
												<th>".$trow['Childs']."</th>
												<th>".$trow['CheckIn']."</th>
												<th>".$trow['CheckOut']."</th>
												<th>".$trow['Price']."</th>
												
												<th><a href='guest.php?pid=".$trow['guest-id']."&cin=".$trow['CheckIn']."&cout=".$trow['CheckOut']."&price=".$trow['Price']."'  class='btn btn-primary'>INVOICE</a></th>
												</tr>";
										//}	
									
									}
									?>
                                        
                                    </tbody>
                                </table>
								
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  --> 
                                        </div>
                                    </div>
                                </div><!--
								<?php
								
								$rsql = "SELECT `room-id` as 'stat' FROM `room`";
								$rre = mysqli_query($con,$rsql);
								$r =0;
								while($row=mysqli_fetch_array($rre) )
								{		
										$br = $row['stat'];
										if($br=="Conform")
										{
											$r = $r + 1;
											
											
											
										}
										
								
								}
						
								?>
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
											<button class="btn btn-primary" type="button">
												 Booked Rooms  <span class="badge"><?php echo $r ; ?></span>
											</button>
											
											</a>
                                        </h4>
                                    </div> -->
                                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
										<?php
										$msql = "SELECT * FROM `roombook`";
										$mre = mysqli_query($con,$msql);
										
										while($mrow=mysqli_fetch_array($mre) )
										{		
											$br = $mrow['stat'];
											if($br=="Conform")
											{
												$fid = $mrow['id'];
												 
											echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-blue'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$mrow['FName']."</h3>
														</div>
														<div class='panel-footer back-footer-blue'>
														<a href=show.php?sid=".$fid ."><button  class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
													Show
													</button></a>
															".$mrow['TRoom']."
														</div>
													</div>	
											</div>";				
											}

										}
										?>
                                           
										</div>
                                    </div>
                                </div>
                                <?php
								
								$fsql = "SELECT * FROM `booking`";
								$fre = mysqli_query($con,$fsql);
								$f =0;

								while($row=mysqli_fetch_assoc($fre) )
								{
										$f = $f + 1;
								
								}
						
								?>
                <!-- /. ROW  -->
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>
