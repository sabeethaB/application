<!DOCTYPE html>
<html lang="en">
<head>
  <title>Application11</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/application12.js"></script>
</head>
<body>
<div class="container">
<div class="panel panel-default" style="width: 500px !important;margin-top: 20px;border-color: #613E97;">
<div class="panel-heading" style="background-color:#613E97;color: white;text-align: center;font-size: 20px;">Login Page</div>
<form action="application11.php" method="POST">
<div class="panel-body">
<label>First Name:</label>
<input type="text" name="firstname" id="firstname"><br><br>
<label>Last Name:</label>
<input type="text" name="lastname"  id="lastname"><br><br>
<label>Password:</label>
<input type="Password" name="password" id="password"><br><br>
<?php include "application13.php"; ?>
</div>
<div class="panel-footer"  style="background-color: #613E97;">
<button name="submit" name="submit" value="submit" id="submit" style="background-color: #A958A5;color: white;padding: 5px 20px 5px 20px ;margin-left: 280px !important;">Submit</button><br>
</div>
</form>
</div>
</div>
</body>
</html>

