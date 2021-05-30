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
    <meta name="description" content="Online eBook/Library">
    <meta name="keywords" content="Online, eBook, Library">
    <meta name="author" content="Shounak Sengupta- https://www.linkedin.com/in/shounak192/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="40">
    <link rel="shortcut icon" href="favicon.ico">
    <title>View Books</title>

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
        /* position: absolute; */
        padding-top: 50px;
      }
	  a{
		  font-size=30px;
	  }
	 .form-label{
				font-size: 15px;
	 }
   a[name="logout"] {
     position:relative; top:0; right:0;
   }
   a:hover {
     width: fixed;
   }
   .center {
     margin-left: auto;
     margin-right: auto;
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
   .logoutbtncls {
     position:fixed;
      right:10px;
      top:5px;
      margin:20px;
   }
   .active {
     border-bottom: 2px solid #fff;
   }
   .link {
     color:#fff;
   }
   .link:hover {
     color: #AEEEEE	;
   }
    </style>
</head>
<body style="overflow:hidden;">
    <h2 style="color:white">View e-Books<br> </h2><br>



</body>
</html>

<?php
error_reporting(0);
$query3 = "SELECT * FROM uploadpdf";
$data3 = mysqli_query($conn, $query3);
$total1 = mysqli_num_rows($data3);
if($total1!=0)
{
    ?>
    <table class="center">
        <tr class="active">
            <th style="font-family:georgia,garamond,serif; color:#94e0ff">Book Id</th>
            <th style="text-align:center;font-family:georgia,garamond,serif; color:#94e0ff">Book Name</th>
            <th style="text-align:center;font-family:georgia,garamond,serif; color:#94e0ff">Operations</th>
        </tr>
        <?php
        while($result2= mysqli_fetch_assoc($data3))
        {

                echo "<tr>
                        <td>".$result2['id']."</td>"?>
                <td><a class="link" href="<?php echo $result2['pdf_file'];?>"> <?php echo $result2['pdf_file']?></td>
                 <?php echo "<td><a href= 'adminpdfdelete.php?pdfid=$result2[id]&pdfnm=$result2[pdf_file]' style=\"color:#ef3038\">Delete</td>
                      </tr>";
        }
    }
    else{
        echo "No record found";
    }
    ?>
    </table>
    <form method="post" enctype ="multipart/form-data">
    <br><br>
    <div class="logoutbtncls">
    <a href="index.php?logout='1'" class="btn btn-info btn-lg">
      <span class="glyphicon glyphicon-log-out"></span> Log out
    </a>
    </div>
    </form>
<?php
if(isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['user_name']);
  header('location:index.php');
}

?>
