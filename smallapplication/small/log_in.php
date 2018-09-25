<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form autocomplete="off" method="POST" action="log_in.php">
	<div align="center" style="margin-top: 190px;">
		<fieldset style="width: 500px;background-color: #CFB9EC;border-radius: 5px;">
		<legend><h1 style="color: #003AA1;">Login</h1></legend>
		<br>
	<label  style="margin-left:-145px;">Email : </label><br>
	<input type="text" name="email" required style="width: 200px;height: 30px;" required minlength="5" maxlength="20" title="maximum length of email is 12">
<br>

<label style="margin-left:-120px;">Password : </label><br>
<input type="password" name="pwd" required style="margin-top: 10px;width: 200px;height: 30px;" minlength="3" maxlength="10" title="maximum length of password is 12">
<br><br>
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
    ?><span style="color:red;"><?php echo('Email Already exists'); ?></span></br></br><?php
}
else
{
    // if ($_SERVER["REQUEST_METHOD"] == "POST") 
    // {
    $result = mysqli_query($conn, "INSERT INTO `mydatatable`(`firstname`, `lastname`, `email`, `password`) VALUES ('$firstname','$lastname','$email','$password')");
    // }
    ?><span style="color:red;"><?php echo('New Email Registered'); ?></span></br><?php
}

// $un = $_POST['email'];
// $pw = $_POST['pwd'];
//     print $un . "_" . $pw;

//     $query = mysqli_query($conn, "SELECT `email`, `password` FROM mydatatable WHERE email='$un' AND password='$pw'");

//     $result_can = mysqli_query($conn, $query);


//     while ($row = mysql_fetch_assoc($result_can)) {


//         $check_username = $row['email'];
//         $check_password = $row['password'];
//     }
//     if ($un == $check_username && $pw == $check_password) {
//         $message = "sucessfully login";
//         echo "<script type='text/javascript'>alert('$message');</script>";
//         header("Location: afterlogin.php");
//     } else {
//         $message = "incorrect username and password";
//         echo "<script type='text/javascript'>alert('$message');</script>";
//         header("Location: log_in.php");
//     }
?>
<button type="submit" style="height: 35px;width: 60px; background-color: #FF98CF;color: white;border-radius: 5px;">Login</button>
<p>Don't have an account <b><a href="details.php">Register</a></b></p>
</fieldset>
</div>
</form>
<br>
</body>
</html>
