<?php include('register.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>SQL Operation</title>
</head>
<body>
<form name="form" method="POST" action="form.php" autocomplete="off">
	<table>
	<tr>
		<td>First name</td>
		<td><input type="text" name="fname" placeholder="firstname"></td>
	</tr>
	<tr>
		<td>Last name</td>
		<td><input type="text" name="lname" placeholder="lastname"></td>
	</tr>
	<tr>
		<td>E-mail</td>
		<td><input type="text" name="mail" placeholder="email"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" name="pwd" placeholder="password"></td>
	</tr>
	<tr>
		<input type="submit" name="submit1" value="Insert">
		<input type="submit" name="submit2" value="Delete">
		<input type="submit" name="submit3" value="update">
		<input type="submit" name="submit4" value="show">	
	</tr>		
    </table>
</form>
<?php
$pwd= $_POST['pwd'];
$mail=$_POST["mail"];
$lname=$_POST["lname"];
$fname=$_POST["fname"];
if(isset($_POST["submit1"]))
{
	$r=mysqli_query($conn,"INSERT INTO `sabeetable` (`firstname`, `lastname`, `email`, `password`) VALUES('$fname','$lname','$mail','$pwd')");
	// echo "inserted";
}
if(isset($_POST["submit2"]))
{
	$q=mysqli_query($conn,"DELETE FROM `sabeetable` WHERE `firstname`='$fname'");
	// echo "inserted";
}
if(isset($_POST["submit3"]))
{
	$t=mysqli_query($conn,"UPDATE `sabeetable` SET `firstname`='$fname' WHERE `firstname`='sathish'");
	// echo "inserted";
}
if(isset($_POST["submit4"]))
{
	$res=mysqli_query($conn,"SELECT * FROM `sabeetable`");
	echo "<table>";
	echo "<tr>";
	echo "<th>"; echo "firstname"; echo "</th>";
	echo "<th>"; echo "lastname"; echo "</th>";
	echo "<th>"; echo "email"; echo "</th>";
	echo "<th>"; echo "password"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
	  $first=$row['firstname'];
	  $last=$row['lastname'];
	  $email1=$row['email'];
	  $Pass=$row['password'];
	  echo "<tr>"; 
	  echo "<td>"; echo $first;  echo "</td>";
	  echo "<td>"; echo $last;  echo "</td>";
	  echo "<td>"; echo $email1;  echo "</td>";
	  echo "<td>"; echo $Pass;  echo "</td>";
	  echo "</tr>"; 	  				
	}
	echo "</table>";	
}
?>
</body>
</html>