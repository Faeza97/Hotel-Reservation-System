
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$check = true;
$connection = new mysqli("localhost","root","","hotels-reservation");
if($connection->connect_error){
   $check = false;
echo 'connection unsuccessfull'.'<br>'.$connection->connect_error.'<br>';
}
?>
