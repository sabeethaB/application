<?php
$conn=mysqli_connect('localhost','root','root','mydatabase');

if(!$conn)
{
	echo "connection failed";
}
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['pwd'];

$check_email = mysqli_query($conn, " SELECT `email` FROM `mydatatable` WHERE email='$email'");

if(mysqli_num_rows($check_email)> 0)
{
    echo('Email Already exists');
}
else
{
    // if ($_SERVER["REQUEST_METHOD"] == "POST") 
    // {
    $result = mysqli_query($conn, "INSERT INTO `mydatatable` (`firstname`, `lastname`, `email`, `password`) VALUES ('$firstname', '$lastname', '$email', '$password')");
    // }
    echo('New Email Registered');
}
mysqli_close($conn);

?>