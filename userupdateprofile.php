<?php
include("registrationPagedatabase.php");
error_reporting(0);
 $_GET['di'];
 $_GET['nm'];
 $_GET['em'];
 $_GET['sl'];
?>

<html>
    <head>
      <meta charset="utf-8">
      <meta name="description" content="Online eBook/Library">
      <meta name="keywords" content="Online, eBook, Library">
      <meta name="author" content="Shounak Sengupta- https://www.linkedin.com/in/shounak192/">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="refresh" content="40">
      <title>Update User Profile</title>
      <link rel="shortcut icon" href="favicon.ico">
      <style>
      form {
        text-align: center;
      }
      body {
       background-image: url("userwallpaper.jpg");
       background-size: cover;
       color: #000;
       text-align:center;
       font-size:20px;
       font-weight: bold;
       position:absolute;
       top: 30%;
       left:40%;
       bottom:30%;
     }
     .active {
       border-bottom: 2px solid #000;
     }
     input[type=submit] {
  transition-duration: 0.4s;
  margin: 4px 2px;
  cursor: pointer;
  width: 7em;  height: 3em;
  font-size: 16px;
  border-radius: 12px;
}

 input[type=submit]:hover {
  background-color: #4CAF50; /* Green */
  color: white;
}
      </style>
    </head>
    <body>
        <form action ="" method = "GET">
          <h2 style="color:#000;" class="active"> Update User Details</h2>
            Member Id &emsp;&emsp;&emsp;<input type ="text" name="memberid" value="<?php echo $_GET['di'];?>" readonly="readonly"/><br><br>
            Member Name &emsp;<input type ="text" name="membername" value="<?php echo $_GET['nm'];?>"/><br><br>
            Email &emsp;&emsp;&emsp;&emsp;&emsp;<input type ="text" name="email" value="<?php echo $_GET['em'];?>"/><br></br>
            Password &emsp;&emsp;&emsp;<input type ="text" name="password" value="<?php echo $_GET['sl'];?>"/><br></br>
            <input type="submit" name="submit" value="Update"/>
        </form>

<?php

if($_GET['submit'])
{
    $memberid=$_GET['memberid'];
    $name=$_GET['membername'];

    $emailid=$_GET['email'];
    $password=$_GET['password'];
    $query = "update registration set member_name='$name', email='$emailid',password='$password' where member_id='$memberid' ";
    $data=mysqli_query($conn, $query);
    if($data){
        echo "<font color='black'>Recorded updated succesfully!";
    }
    else{
        echo "<font color='red'>Record not updated";
    }
}
else{
    echo "<font color='black'><center>Click on update button to save the changes.";
}
?>
