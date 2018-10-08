<?php include('register.php'); ?>
<?php
mysqli_select_db("mydatabase");
$dbchart=mysqli_query($conn,"SELECT firstname , COUNT(lastname) as y FROM mydatatable GROUP BY firstname");
$data=array();
foreach($dbchart as $row)
{
  $data[]=$row;
}
 print json_encode($data);
?>