<?php
include_once 'registrationPagedatabase.php';
session_start();
$profile_name=$_SESSION['user_name'];
$query1="select * from adminregistration where email ='$profile_name'";
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
    <title>Admin Landing</title>
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
color: #fff;
font-size: 14px;
letter-spacing: 1px;
}
img {
  width: 20px;
  border-radius: 25px;
  float: left;
}

/* .logout {
  font-size: .8em;
  font-family: 'Oswald', sans-serif;
	position:relative;
  right: -10px;
  bottom: -4px;
  overflow: hidden;
  letter-spacing: 1px;
  opacity: 0;
  transition: opacity .45s;
  -webkit-transition: opacity .35s;
} */
.button {
	text-decoration: none;
	float:right;
  padding: 12px;
  margin: 15px;
  color: white;
  width: 25px;
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

.btn-upload {
  color: transparent;
}
/* .btn-upload::-webkit-file-upload-button {
  visibility: hidden;
} */
.btn-upload::before {
  content: 'Upload Book';
  color: black;
  /* display: inline-block; */
  /* background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3); */
  /* border: 1px solid #999; */
  border-radius: 10px;
  padding: 5px ;
  /* outline: none; */
  /* white-space: nowrap; */
  /* -webkit-user-select: none; */
  cursor: pointer;
  /* text-shadow: 1px 1px #fff; */
  font-weight: 700;
  font-size: 10pt;
}
/* .btn-upload:hover::before {
  border-color: black;
} */
.active {
  border-bottom: 2px solid #000;
}
/* .btn-upload:active {
  outline: 0;
} */
/* .btn-upload:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
} */
.logoutbtncls {
  position:fixed;
   right:10px;
   top:5px;
   margin:20px;
}
    .btn-upload {
      border-radius: 15px;
      padding: 5px 5px 5px 5px;


    }
            .btn-upload:hover {
              background-color: #4CAF50;
              font-style: oblique;
              cursor: pointer;
             }

  </style>
</head>
  <body style="overflow:hidden;">
      <h1 class="active">Welcome <?php echo $result['admin_name']; ?> !</h1><br>

		<form method="post" enctype ="multipart/form-data">
		<div class="form-outline mb-4">
			    <input type="file" id="form1Example2" class="form-control" name="uploadfile" required/> <br>
			    <label class="form-label" for="form1Example2" style="color:white">File Type: *pdf, *docx</label>
			  </div>
			  <!-- Submit button -->
			  <button type="submit" name="submit" class="btn-upload"></button><br><br>
        <button type="submit" name="displayusersbtn" class="btn-displayusers"><a href="display.php">Display users</a></button> &nbsp;
        <button type="submit" name="viewpdfbtn" class="btn-viewpdf"><a href="adminviewpdf.php">View pdf</a></button>

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
 if(isset($_POST['submit']))
     {
		 $filename = $_FILES["uploadfile"]["name"];		// say the upload file name is xyz.pdf
          $tempname = $_FILES["uploadfile"]["tmp_name"];
          $folder = "pdf/".$filename;        //folder name(pdf) the folder path is pdf/xyz.pdf
	//	$membername = $_POST['membername'];
		//$email= $_POST['email'];
		//$city= $_POST['gridRadios'];
		//$pass = $_POST['password'];
          move_uploaded_file($tempname,$folder);
          $query1= "ALTER TABLE `uploadpdf` AUTO_INCREMENT=1";
		$query= "INSERT INTO `uploadpdf`(`id`, `pdf_file`) VALUES (' ','$folder')";
              $data1= mysqli_query($conn,$query1);
               $data = mysqli_query($conn,$query);
               if($data && $data1)
               {
                  echo "<font color='white'>Pdf uploaded succesfully.";

               }
               else{
                   echo "All fields required!!";
               }
	 }
   if(isset($_GET['logout'])) {
     session_destroy();
     unset($_SESSION['user_name']);
     header('location:index.php');
   }


	 ?>
