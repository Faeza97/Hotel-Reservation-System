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
    <title>ONLINE HOTELS RESERVATION</title>
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
                        <a  href="settings.php"><i class="fa fa-dashboard"></i>Rooms Status</a>
                    </li>
					<li>
                        <a  class="active-menu" href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    <li>
                        <a  href="roomdel.php"><i class="fa fa-desktop"></i> Delete Room</a>
                    </li>
					

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           NEW ROOM <small>  <?php echo  $curdate; ?> </small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ADD NEW ROOM
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                               <label>Type Of Room *</label>
                                            <select name="name"  class="form-control" required>
                        <option value selected ></option>
                         <option value="GENERAL Room">General Rooms</option>
                         <option value="Delux Room"> Delux Rooms</option>
                          <option value="EXECUTIVE ROOM">Executive Rooms</option>
                            <option value="LUXURY ROOM">Luxury Rooms</option>
                                            </select>
                              </div>
							   <div class="form-group ">
                                    <label >Country</label>
                                    <input class="form-control" placeholder="Enter the Country name"  name="country" autocomplete="off" value="" city_cat_id="14" type="text">
                                 </div>
                                  <div class="form-group ">
                                    <label >City</label>
                                    <input class="form-control" placeholder="Enter the City name"  name="city" autocomplete="off" value="" city_cat_id="14" type="text">
                                 </div>
								<div class="form-group">
                          <label>Hotel Name</label>
                       <select name="hotel" class="form-control" required>
                                                <option value selected ></option>
                        <option value="Rotana">Rotana Hotel</option>
                        <option value="Crystal">Crystal Hotel</option>
                                                <option value="Quaint">Quaint Hotel </option>
                          <option value="Classy">Classy Hotel</option>
                                                <option value="family">Family Motel</option>
                    </select> 
                </div>
                             <div class="form-group ">
                                    <label >Street Add.</label>
                                    <input class="form-control" placeholder="street-address"  name="street-address" autocomplete="off" value="" city_cat_id="14" type="text">
                                 </div>
                                 <div class="form-group ">
                                    <label >Description</label>
                                    <input class="form-control" placeholder="Description of the Hotel"  name="Description" autocomplete="off" value="" city_cat_id="14" type="text">
                                 </div>
                                 <div class="form-group ">
                                    <label >Postal code/zip</label>
                                    <input class="form-control" placeholder="Enter the Postal zip code"  name="postal/code-zip" autocomplete="off" value="" city_cat_id="14" type="text">
                                 </div>
                            <div class="form-group">
                             <label>How Many Adult?</label>
                              <select name="adults" class="form-control" >
                                 <option value=""></option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="5">5</option>
                              </select>
                              <!-- End of Select boxes -->
                           </div>
                           <div class="form-group">
                              <label>How Many Children ?</label>
                              <select name="childs" class="form-control">
                                 <option value=""></option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="5">5</option>
                              </select>
                                            
                               </div>
                                 <div class="form-group ">
                                    <label >Price Pernight</label>
                                    <input class="form-control" placeholder="Enter the price pernight"  name="price-pernight" autocomplete="off" value="" city_cat_id="14" type="text">
                                 </div>
                                  <div class="form-group ">
                                    <label >Total rooms</label>
                                    <input class="form-control" placeholder="Enter the total rooms"  name="total-rooms" autocomplete="off" value="" city_cat_id="14" type="text">
                                 </div>
                                  <div class="form-group ">
                                    <label >Room no</label>
                                    <input class="form-control" placeholder="Enter the room-no"  name="room-no" autocomplete="off" value="" city_cat_id="14" type="text">
                                 </div>
                                 <div class="form-group ">
                                    <label >Hotel URL</label>
                                    <input class="form-control" placeholder="Enter URL-website"  name="URL-website" autocomplete="off" value="" city_cat_id="14" type="text">
                                 </div>				 
                 
<div class="form-group ">
Room Image: <br /><input type="file" name="picture" ><br /> 
<input type="submit" name="add" value="Add New" class="btn btn-primary"> 
</div>
							</form>
							<?php
							 include('db.php');
							 if(isset($_POST['add']))
							 {
						$rname = $_POST['name'];
                        $rtid='room-type_id';
						$adults = $_POST['adults'];
						$childs = $_POST['childs'];
                    $price=$_POST['price-pernight'];
                    $picture=$_POST['picture'];
                    $total=$_POST['total-rooms'];
                    $roomno=$_POST['room-no'];
                    $hcountry=$_POST['country'];
                   $hcity=$_POST['city'];
                    $hname=$_POST['name'];
                     $hid=$_POST['hotel'];;
                    $hstad=$_POST['street-address'];
                    $hdes=$_POST['Description'];
                    $hzip=$_POST['postal/code-zip'];
                    $hurl=$_POST['URL-website'];
										
					//$check="SELECT @rownum:=@rownum + 1 as row_number,h.`hotel-id`,r.`room-id`,h.`name` HotelName,t.`name` Room,h.`city` City,h.`country` Country,h.`postal/code-zip` PostalCode,t.`adults` Adults,t.`childs` Childs, t.`price-perday` Price,h.`Description` FROM `hotel` h,`room` r,`room-type` t, (SELECT @rownum := 0) r WHERE h.`hotel-id`=r.`hotel-id` and r.`room_type-id`=t.`room_type-id`";
                    //"SELECT * FROM room-type WHERE name = '$rname' AND adults = '$adults' childs='$childs' price-pernight='$price' total-rooms='$total') ";
                    // (SELECT * FROM room WHERE room_type-id=room_type-id (Select * from Hotel WHERE Hotel-id=Hotel-id)
										//$rs = mysqli_query($con,$check);
										/*$data = mysqli_fetch_array($rs, MYSQLI_NUM);
										if($data[0] > 1) {
											echo "<script type='text/javascript'> alert('Room Already in Exists')</script>";
											
										}

										else
										{*/
							 
										
$sql ="INSERT INTO `room-type`(`name`, `adults`,`childs` ,`price-perday`, `picture`,`total-rooms`) VALUES ('".$rname."','".$adults."','".$childs."' , '".$price."','images/".$picture."','".$total."')" ;

$sql1 ="INSERT INTO `hotel` (`country`, `city`, `name`, `street-address`, `Description`, `postal/code-zip`, `URL-website`) VALUES ( '".$hcountry."' ,'".$hcity."', '".$hname."' , '".$hstad."' , '".$hdes."' , '".$hzip."' , '".$hurl."' )" ;
                            
            
 $sql2="INSERT INTO `room`(`room-no`, `hotel-id`, `room_type-id`) VALUES ('".$roomno."' , (select max(`hotel-id`) from `hotel`) , (select max(`room_type-id`) from `room-type`))";
                    
 $sql3="INSERT INTO `room-type-amenities` (`room_type-id`, `amenity-id`) VALUES ((select max(`room_type-id`) from `room-type`), '1');";

if(mysqli_query($con,$sql)){
 if (mysqli_query($con,$sql1))  {
	if (mysqli_query($con,$sql2)) {
	mysqli_query($con,$sql3);
 echo "Record inserted successfully";  
}
}
}else{  
echo '<script>alert("Sorry ! Check The System") </script>' ;
}  
                  

									/*	if(mysqli_query($con,$sql))
										{
										 echo '<script>alert("New Room Added") </script>' ;
										}else {
											echo '<script>alert("Sorry ! Check The System") </script>' ;
										} }*/
							 
							}
							
							?>
                        </div>
                        
                    </div></div>
                </div>
                   </div>
                  
            <div class="row">
                <div>
                    <div class="panel panel-primary">
                       <div class="panel-heading">
                            ROOMS INFORMATION
                        </div>
                        <div class="panel-body">
								<!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <?php
						$sql = "SELECT * FROM `room-type` t,`room` r,`hotel` h WHERE t.`room_type-id`=r.`room_type-id` and r.`hotel-id`=h.`hotel-id` and t.`room_type-id` not in(select `room_type-id` from `room-type-amenities` )";
						$re = mysqli_query($con,$sql)
						?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tbody> <tr>
                                            <th>Room ID</th>
                                            <th>Room Name</th>
                                            <th>Country</th>
                                            <th>City</th>
                                             <th>Hotel Name</th>
                                            <th>Street add.</th>
                                              <th>Postal/code zip</th>
											                      <th>No of Adults</th>
                                             <th>No of Childs</th>
                                            <th>Price-pernight</th>
                                                 <th>Room no</th>
                                            <th>URL</th>
                                             <th>Picture</th>
                                            <th>Total Rooms</th>   
                                        </tr>
                                    
                                   
									
									<?php
										while($row= mysqli_fetch_assoc($re))
										{
												$id = $row['room_type-id'];
											if($id % 2 == 0) 
											{
								echo "<tr class=odd gradeX>
								 <td>".$row['room_type-id']."</td>
                           <td>".$row['name']."</td>
                           <td>".$row['country']."</td>
                           <td>".$row['city']."</td>
                           <td>".$row['name']."</td>
                            <td>".$row['Description']."</td>
                             <td>".$row['postal/code-zip']."</td>
                           <td>".$row['adults']."</td>
                           <td>".$row['childs']."</td>
                           <td>".$row['price-pernight']."</td>
                            <td>".$row['room-no']."</td>
                                <td>".$row['URL-website']."</td>
                                <td>".$row['picture']."</td>
                            <th>".$row['total-rooms']."</th>

												</tr>";
											}
											else
											{
							echo"<tr class=even gradeC>
							<td>".$row['room_type-id']."</td>
                           <td>".$row['name']."</td>
                           <td>".$row['country']."</td>
                           <td>".$row['city']."</td>
                           <td>".$row['name']."</td>
                            <td>".$row['Description']."</td>
                             <td>".$row['postal/code-zip']."</td>
                           <td>".$row['adults']."</td>
                           <td>".$row['childs']."</td>
                           <td>".$row['price-pernight']."</td>
                            <td>".$row['room-no']."</td>
                                <td>".$row['URL-website']."</td>
                                <td>".$row['picture']."</td>
                            <th>".$row['total-rooms']."</th>
												</tr>";
											
											}
										}
									?>
                                    </tbody></thead>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--  <td>".$row['name']."</td>
                          <td>".$row['adults']."</td>
                          <td>".$row['childs']."</td>
                          <td>".$row['price-pernight']."</td>
                          <td>".$row['picture']."</td>
                         <th>".$row['total-rooms']."</th>
                         
                      End Advanced Tables -->
    
                       </div>
                        
                    </div>
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
