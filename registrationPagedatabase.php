<?php
$servername ="localhost";
$username ="root";
$password ="";
$db ="simplewebsite";
// $servername ="sql101.epizy.com";
// $username ="epiz_28589549";
// $password ="VO93rOgzTJ0Uru";
// $db ="epiz_28589549_simplewebsite";

$conn = mysqli_connect($servername,$username,$password,$db);

if(!$conn)
{
  die("connection Failed".mysqli_connect_error()+" error");
}
?>
