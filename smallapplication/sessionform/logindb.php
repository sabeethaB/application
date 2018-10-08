<?php 

$conn=mysqli_connect('localhost','root','root','sessiondb');
if(!conn)
{
	echo "not connected";
}
else
{
	echo "connected successfully";
}
$username= $_POST['username'];
$password= $_POST['password'];

// $query=mysqli_query($conn ,"INSERT INTO `sessiontable`(`username`, `password`) VALUES ('$username','$password')");

$query1 = mysql_query($conn, "SELECT * FROM `sessiontable` WHERE username='$username' AND password='$password'");

$rows = mysql_num_rows($query1);
if ($rows == 1) 
{
$_SESSION['login_user']=$username; // Initializing Session
header("location: loginpage.php"); // Redirecting To Other Page
} 
else 
{
$error = "Username or Password is invalid";
}

mysqli_close();
?>