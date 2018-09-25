<!-- <?php include("register.php"); ?> -->
<html>
<head>
<style type="text/css">
</style>	
</head>
<body>
	<form method="POST" action="details.php" autocomplete="off">
	<div align="center" style="margin-top: 190px;">
		<fieldset style="width: 500px;background-color: #CFB9EC;border-radius: 5px;height: 700px;">
		<legend><h1 style="color: #003AA1;">Registration</h1></legend>
		<br>
<label style="margin-left:-110px;">First name : </label><br>
<input type="text" name="firstname" required style="width: 200px;height: 30px;" minlength="3" maxlength="10" title="maximum length of firstname is 10">
<br>

<label style="margin-left:-110px;">Last name : </label><br>
<input type="text" name="lastname" required style="margin-top: 10px;width: 200px;height: 30px;" minlength="3" maxlength="10" title="maximum length of lastname is 10">
<br>

<label style="margin-left:-150px;">Email: </label><br> 
<input type="text" name="email" required style="margin-top: 10px;width: 200px;height: 30px;" minlength="5" maxlength="20" title="maximum length of email is 20">
<br>
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
</input></br>
<label style="margin-left:-120px;">Password: </label><br>
<input type="password" name="pwd" required style="margin-top: 10px;width: 200px;height: 30px;"  minlength="5" maxlength="10" title="maximum length of password is 10">
<br>
<div style="margin-top: 10px;margin-left: 5px;">
<b><input type="submit" name="save" value="Register" style="height: 35px;background-color: #D085AC;color: white;border-radius: 5px;"></b>
<b><input type="reset" name="cancel" value="Cancel" style="height: 35px;background-color: #3AA16C;color: white;border-radius: 5px;"></b>
</div>
<div>
<p>Alraedy have an account?  <b><a href="log_in.php">Login</a></b></p>
</div>
</div>
</fieldset>
</form><br>
</body>
</html>

