<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Online eBook/Library">
    <meta name="keywords" content="Online, eBook, Library">
    <meta name="author" content="Shounak Sengupta- https://www.linkedin.com/in/shounak192/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="40">
    <title>View Members</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
body {
  background-image: url("adminloginwallpaper.jpg");
  background-size: cover;
  color: #fff;
  text-align:center;
  font-size:20px;
  font-weight: bold;
  padding-top: 50px;
}
td
{
    padding : 10px;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
a:hover {
  width: fixed;
}
.button {
 text-decoration: none;
 float:right;
  padding: 12px;
  margin: 15px;
  color: white;
  width: 25px;
  position:fixed;
  right:10px;
  top:5px;
  background-color: black;
  transition: width .35s;
  -webkit-transition: width .35s;
  overflow: hidden
}
a:hover .logout{
  opacity: .9;
}
.logout {
  font-size: .8em;
  font-family: 'Oswald', sans-serif;
  position:fixed;
    right:10px;
    top:5px;

  bottom: -4px;
  overflow: hidden;
  letter-spacing: 1px;
  opacity: 0;
  transition: opacity .45s;
  -webkit-transition: opacity .35s;
}
a {
  text-decoration: none;
}
.active {
  border-bottom: 2px solid #fff;
}
.logoutbtncls {
  position:fixed;
   right:10px;
   top:5px;
   margin:20px;
}
</style>
</head>
<?php
include("registrationPagedatabase.php");
error_reporting(0);

$query = "SELECT * FROM registration";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total!=0)
{
    ?>
    <body>
    <table class="center">
        <tr class="active">
            <th style="text-align:center">Member Id</th>
            <th style="text-align:center">Name</th>

            <th style="text-align:center">Email</th>
            <th style="text-align:center">Password</th>
            <th colspan = "2" style="text-align:center;font-family:georgia,garamond,serif;">Operations</th>
        </tr>

    <?php

    while($result= mysqli_fetch_assoc($data))
    {
            echo "<tr>
                    <td>".$result['member_id']."</td>
                    <td>".$result['member_name']."</td>

                    <td>".$result['email']."</td>
                    <td>".$result['password']."</td>
                    <td><a href='update.php?di=$result[member_id]&nm=$result[member_name]&em=$result[email]&sl=$result[password]' style=\"color: #7DF9FF\">Edit</td>
                    <td><a href= 'delete.php?di=$result[member_id]&nm=$result[member_name]&em=$result[email]&sl=$result[password]' style=\"color:#ef3038\">Delete</td>
                     </tr>";

    }
}
else{
    echo "No record found";
}
?>

</table>
<div class="logoutbtncls">
<a href="index.php?logout='1'" class="btn btn-info btn-lg">
  <span class="glyphicon glyphicon-log-out"></span> Log out
</a>
</div>
</body>
<!--<script>
function checkdelete()
{
    return confirm('Are you sure you want to delete this data??');
}-->
<?php
if(isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user_name']);
  header('location:index.php');
}
?>
