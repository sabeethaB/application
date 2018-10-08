<?php

$mysqli =mysqli_connect('localhost','root','root','player');

$query = sprintf("SELECT `playerid`, `score` FROM `score` ORDER BY playerid");

$result = $mysqli->query($query);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

$result->close();

$mysqli->close();

print json_encode($data);

?>