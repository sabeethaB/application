<?php include('register.php'); ?>
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
<button type="submit" name="submit" id="submit" style="height: 35px;width: 60px; background-color: #FF98CF;color: white;border-radius: 5px;">Login</button><br><br>
<?php 

$email=$_POST['email'];
$pass=$_POST['pwd'];
// echo $email;
// echo $pass;
mysqli_select_db("mydatabase");
$db=mysqli_query($conn,"SELECT `email`, `password` FROM `mydatatable`");

while($row=mysqli_fetch_array($db))
{
	$emails=$row['email'];
	$passwords=$row['password'];
	// echo $email1;
	// echo $password1;
}
if($email == $emails && $pass == $passwords)
{
  ?><span style="color:green;font-size: 20px;"><?php echo "login successfully, Move to next page"; ?><?php echo "<script> window.location.assign('afterlogin.php');</script>" ?> </span><?php
 }  
else
{
   ?><span style="color:red;font-size: 20px;"><?php echo "Invalid email and password, Please Register Properly"; ?><?php echo "<script> window.location.assign('log_in.php');</script>" ?></span><?php
 }

?>
<p>Don't have an account <b><a href="details.php">Register</a></b></p>
</fieldset>
</div>
</form>
<br>
</body>
</html>
