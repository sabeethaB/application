<?php 
if(isset($_POST["firstname"]))
{
 $firstname=$_POST["firstname"];
 $lastname=$_POST["lastname"];
 echo "Firstname:".$_POST["firstname"]."</br>";
 echo "Lastname:".$_POST["lastname"]."</br>";		
}
?>