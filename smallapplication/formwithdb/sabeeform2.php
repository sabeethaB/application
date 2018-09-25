<?php
$conn=mysqli_connect('localhost','root','root','sabeetha');
if(!conn)
{
	echo "connection failed";
}
else
{
	echo "connected successfully";
}
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
echo "</br>".$firstname."</br>".$lastname;

$query="INSERT INTO `sabeethatable`(`firstname`, `lastname`) VALUES ('$firstname','$lastname')";
$connect=mysqli_query($conn,$query);

// if(isset($_POST["firstname"]))
// {
// 	echo .$firstname."".$lastname;
// }
mysqli_close($conn);
?>
