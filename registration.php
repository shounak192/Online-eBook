<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="description" content="Online eBook/Library">
<meta name="keywords" content="Online, eBook, Library">
<meta name="author" content="Shounak Sengupta- https://www.linkedin.com/in/shounak192/">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="refresh" content="40">
<link rel="shortcut icon" href="favicon.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<title>Member Registration</title>
<style>
body{
background-image: url("userwallpaper.jpg");
background-size:cover;
color:#fff;
}
body,.btn-reg {
	background-color: #d3d3d3;
	font-family: 'Montserrat', sans-serif;
	color: #000;
	font-size: 14px;
	letter-spacing: 1px;
}
.active {
	border-bottom: 2px solid #000;
}
.btn-reg {
	background-color: #1161ed;
	color: #FFF;
	width: 100%;
	padding: 10px 20px;
	display: block;
	height: 39px;
	border-radius: 20px;
	margin-top: 30px;
	transition: all 0.5s ease-in-out;
	border: none;
	text-transform: uppercase;
}
.btn-reg:hover {
	background: #4082f5;
	box-shadow: 0px 4px 35px -5px #4082f5;
	cursor: pointer;
}
.login {
	position: relative;
	height: 560px;
	width: 405px;
	margin: auto;
	padding: 60px 60px;
	box-shadow: 0px 30px 60px -5px #000;
	display: inline-block;
	vertical-align:middle;
}
legend{
	font-size: 14px;
	font-weight: bold;
}
.redirect {
	color: blue;
}
.redirect:hover {
	color: #3070A0;
}

</style>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	<div class="login">
<h2 class="active"> Registration Page</h2>




<div class="row mb-3">
<!-- <label for="inputname" class="col-sm-2 col-form-label">Name</label> -->
<div class="col-sm-10">
<input type="text" name="membername" class="form-control" id="inputname" placeholder="Enter name">
</div>
</div>




<div class="row mb-3">
<!-- <label for="inputEmail3" class="col-sm-2 col-form-label" >Email</label> -->
<div class="col-sm-10">
<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Enter email">
</div>
</div>




<div class="row mb-3">
<!-- <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label> -->
<div class="col-sm-10">
<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Enter password">
</div>
</div>




<fieldset class="row mb-3">
<legend class="col-form-label col-sm-2 pt-0">State</legend>

<select name="gridRadios" id="state" class="form-check">
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>

</fieldset>
<legend>Upload Profile Picture</legend>
<input type="file" name="uploadfile" value=""/>


<a href="userlanding.php">
<button type="submit" class="btn-reg" name="register">Register</button>
</a>

<br><b><a class="redirect" href="userlogin.php"> Redirect to Login</a></b>
</div>
</form>
</body>
</html>




<?php
// for data inserting..........
include_once 'registrationPagedatabase.php';
session_start();
$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="image/".$filename;
move_uploaded_file($tempname,$folder);



//echo "<img src='$folder' height='100' width='100' />";




//print_r($_FILES["uploadfile"]);
if(isset($_POST['register']))
{



$membername = $_POST['membername'];
$email= $_POST['email'];
$state= $_POST['gridRadios'];
$pass = $_POST['password'];
if($email!="" && $pass!="" && $filename!="" )
{
$query ="insert into registration (member_id, member_name,email,state,password,image_Src) VALUES (' ','$membername','$email','$state','$pass','$folder')";
$data = mysqli_query($conn,$query);
if($data)
{
// $_SESSION['user_name']=$email;
// header("location: userlanding.php");
echo "<br><br><h5 style=\"color:green\"><b><center>Registration Successfull!</b></h5>";
}
else {
echo "<br><br><center>Incomplete form";
}
}
else {
echo "<br><br><center>Error!";
}
}
?>
