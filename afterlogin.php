<?php include('register.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Table display of data</title>
<style type="text/css">
table
{
  border: 2px solid #1DACD6;
  background-color: #FAA76C;
}
th
{
	border-bottom: 5px solid #FFFFF;
}
td
{
	border-bottom: 2px solid black;
}
#chart-container 
{
	width: 640px;
	height: auto;
}
</style>	
</head>
<body>
<h1>Table show of firstname, lastname, email, password</h1>
<?php
mysqli_select_db("mydatabase");
$dbafterlogin=mysqli_query($conn,"SELECT `firstname`, `lastname`, `email`, `password` FROM `mydatatable`");

echo "<table>";
echo "<tr><th>FirstName</th><th>LastName</th><th>Email</th><th>Password</th></tr>";
while($row=mysqli_fetch_array($dbafterlogin, MYSQLI_ASSOC))
{
  echo "<tr><td>";
  echo $row['firstname'];
  echo "</td><td>";
  echo $row['lastname'];
  echo "</td><td>";
  echo $row['email'];
  echo "</td><td>";
  echo $row['email'];
  echo "</td></tr>";
}
echo "</table>";
?>
<p><a href="chart.php">Charts</a></p>
</body>
</html>