<?php
if(isset($_POST['fname']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
echo "<span class='success'>Form Submitted By <b>POST METHOD</b></span><br/>";
echo "First Name : ".$fname."<br/>Last Name : ".$lname;
}
?>
<?php
if(isset($_GET['fname']))
{
$fname = $_GET['fname'];
$lname = $_GET['lname'];
echo "<span class='success'>Form Submitted By <b>GET METHOD</b></span><br/>";
echo "First Name : ".$fname."<br/>Last Name : ".$lname;
}
?>