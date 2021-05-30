<?php
include_once 'registrationPagedatabase.php';
session_start();
$profile_name=$_SESSION['user_name'];
$query1="select * from registration where email ='$profile_name'";
$data=mysqli_query($conn,$query1);
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="40">
    <meta name="description" content="Online eBook/Library">
    <meta name="keywords" content="Online, eBook, Library">
    <meta name="author" content="Shounak Sengupta- https://www.linkedin.com/in/shounak192/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Landing</title>
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
        background-image: url("userwallpaper.jpg");
        background-size: cover;
        color: #fff;
        text-align:center;
        font-size:20px;
        font-weight: bold;
        position:absolute;
        top: 30%;
        left:40%;
        bottom:30%;
      }
	  a{
		  font-size=30px;
	  }
	 .form-label{
				font-size: 15px;
	 }
   a[name="logout"] {
     position:absolute; top:0; right:0; left:1;
   }
   @import url(https://fonts.googleapis.com/css?family=Oswald:400);
   .navigation {
  width: 100%;
  background-color: black;
}
body{
background-color: #d3d3d3;
font-family: 'Montserrat', sans-serif;
color: #000;
font-size: 14px;
letter-spacing: 1px;
margin-left: auto;
margin-right: auto;
width: auto;
}
img {
  width: 20px;
  border-radius: 25px;
  float: left;
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
  border-radius: 12px;
  background-color: black;
  transition: width .35s;
  -webkit-transition: width .35s;
  overflow: hidden
}

a:hover {
  width: fixed;
}

a:hover .logout{
  opacity: .9;
}

a {
  text-decoration: none;
}
.logoutbtncls {
  position:fixed;
   right:10px;
   top:5px;
   margin:20px;
}

    </style>
  </head>
  <body style="overflow:hidden;">
      <h1>Welcome <?php echo $result['member_name'] ; ?> !</h1><br>

		<form method="post" enctype ="multipart/form-data">
      <?php echo "<button type=\"submit\" name=\"viewpdfbtn\" class=\"btn-viewpdf\"><a href= 'userupdateprofile.php?di=$result[member_id]&nm=$result[member_name]&em=$result[email]&sl=$result[password]' >Edit Profile</td>
           </button>"; ?>
           &emsp;
        <button type="submit" name="viewpdfbtn" class="btn-viewpdf"><a href="viewpdf.php">View pdf</a></button>

        <!-- <div class="navigation">
        <a class="button" href="adminlogin.php?logout='1'" name="logout" style="color:red;">
          <img src="admindp.jpg">
          <div class="logout">Logout</div></a>
        </div> -->
        <div class="logoutbtncls">
        <a href="index.php?logout='1'" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
      </div>
			</form>

  </body>
</html>
<?php


   if(isset($_GET['logout'])) {
     session_destroy();
     unset($_SESSION['user_name']);
     header('location:index.php');
   }

	 ?>
