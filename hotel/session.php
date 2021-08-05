
<?php
require 'serverdb.php';
if ($check) {
$user = $_SESSION['login_user'];

$query = "select * from guest where password='".$password."' AND (email='".$user."' or username='".$user. "')";
$result = mysqli_query($connection,$query);

if (mysqli_num_rows($result) > 0) {

$_SESSION['login_user']=$user; // Initializing Session
header("location: index.php"); // Redirecting To Other Page
} else {
echo "<br><span>Email or Password is invalid</span>";
}
}

if(!isset($login_session)){
$connection->close(); // Closing Connection
header('Location: login.php'); // Redirecting To Home Page
}
?>

