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
    <title>ONLINE HOTELS RESERVATIONn</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="home.php">MAIN MENU </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
			
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
                        <a class="active-menu" href="settings.php"><i class="fa fa-dashboard"></i>Room Status</a>
                    </li>
					<li>
                        <a  href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    <li>
                        <a   href="roomdel.php"><i class="fa fa-pencil-square-o"></i> Delete Room</a>
                    </li>
					

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Available <small> Rooms | </small>
                           <small>  <?php echo  $curdate; ?> </small>
                        </h1>
                    </div>
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
                                             						<th>Country</th>
					 						<th>City</th>
											<th>Adults</th>
											<th>Childs</th>
											<th>Price</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
include ('db.php');
									$tsql = "SELECT @rownum:=@rownum + 1 as row_number,h.`hotel-id`,r.`room-id`,h.`name` HotelName,t.`name` Room,h.`city` City,h.`country` Country,h.`postal/code-zip` PostalCode,t.`adults` Adults,t.`childs` Childs, t.`price-perday` Price,h.`Description` FROM `hotel` h,`room` r,`room-type` t, (SELECT @rownum := 0) r WHERE 
h.`hotel-id`=r.`hotel-id` and r.`room_type-id`=t.`room_type-id`";
									$tre = mysqli_query($con,$tsql);
									while($trow=mysqli_fetch_assoc($tre) ) 
									{
	
									
										//if($co=="Not Conform")
										//{
											echo"<tr>
												<th>".$trow['row_number']."</th>
												<th>".$trow['HotelName']."</th>
												<th>".$trow['Room']."</th>
												<th>".$trow['Country']."</th>
												<th>".$trow['City']."</th>
												<th>".$trow['Adults']."</th>
												<th>".$trow['Childs']."</th>
												<th>".$trow['Price']."</th>
												
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
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
 
                  
               
                
