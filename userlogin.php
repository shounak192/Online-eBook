<?php
ob_start();
include_once 'registrationPagedatabase.php';
session_start();
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
    <title>Member Login</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <style>
    body{
      background-image: url("userwallpaper.jpg");
      background-size:cover;
    }
    body,.signin {
      background-color: #d3d3d3;
      font-family: 'Montserrat', sans-serif;
      color: #000;
      font-size: 14px;
      letter-spacing: 1px;
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
    form {
      padding-top: 80px;
    }
    .active {
      border-bottom: 2px solid #000;
    }
    h2 {
        padding-left: 12px;
        font-size: 22px;
        text-transform: uppercase;
        padding-bottom: 5px;
        letter-spacing: 2px;
        display: inline-block;
        font-weight: 100;
        margin-left: 20px;
        font-weight: bolder;
      }
      h2:first-child {
        padding-left: 0px;
      }
      .text {
        border: none;
        width: 120%;
        padding: 20px 20px;
        display: block;
        height: 15px;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid rgba(255, 255, 255, 0);
        overflow: hidden;
        margin-top: 5px;
        transition: all 0.5s ease-in-out;
      }
      .text:focus {
        outline: 0;
        border: 2px solid rgba(255, 255, 255, 0.5);
        border-radius: 20px;
        background: rgba(0, 0, 0, 0);
      }
      .text:focus {
        opacity: 0.6;
      }
      ::placeholder {
        color:white;
      }
      input[type="email"],
      input[type="password"] {
        font-family: 'Montserrat', sans-serif;
        color: #000;
      }
      input {
        display: inline-block;
        padding-top: 0px;
        font-size: 14px;
      }
      .signin {
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
      .signin:hover {
        background: #4082f5;
        box-shadow: 0px 4px 35px -5px #4082f5;
        cursor: pointer;
      }
      ::placeholder {
          color: #000;
          }
    legend {
      font-size: 12px;

    }
      /* img{
    height: 400px;
    width: 400px;
    border: 4px ridge white;
    } */
    /* .button {
  border-radius: 4px;
  background-color: #1161ed;
  border: none;
  color: #fff;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: auto;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  position: fixed;
  top: 10px;
  right: 10px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
} */

    </style>
  </head>
  <body>

    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <div class="login">
      <h2 class="active"> Login Page</h2>
  <form action="" method="POST">
  <div class="row mb-3">
    <!-- <label for="inputEmail3" class="col-sm-2 col-form-label" >Email</label> -->
    <div class="col-sm-10">
      <input type="email" name="email" class="text" id="inputEmail3" required  placeholder="Enter email">
    </div>
  </div>

  <div class="row mb-3">
    <!-- <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label> -->
    <div class="col-sm-10">
      <input type="password" name="password" class="text" id="inputPassword3" required  placeholder="Enter password">
    </div>
  </div>

  <button type="submit" class="signin" name="login">Login</button><br>
  &emsp;&emsp;Not a member? <a href='registration.php'><b>Register</a>
    <br><br>
    <legend style="color: #1161ed">&emsp;<i>Forgot Password?</i></legend> <br>
    <legend><center>Contact Admin <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=shounak192@gmail.com" target="_blank" style="color: red">
      here</a> from <em>registered Email</em> to recover forgotten password.</legend>
  </form>
</div>
<!-- <button class="button" onclick="location.href='adminlogin.php'"><span>Admin Login</span></button> -->
  </body>
</html>

<?php
if(isset($_POST['login']))
  {
    $pass = $_POST['password'];
    $email = $_POST['email'];

    if($pass!="" && $email!="" )
    {
      $query = "SELECT * FROM registration WHERE email='$email' and password='$pass' " ;
      $data = mysqli_query($conn,$query);
      $total= mysqli_num_rows($data); //true==>0 false <0

      if($total==1)
      {
        $_SESSION['user_name']=$email;
        header("location: userlanding.php");
      }
      else {
        echo "<br><br><legend><font color=black><center>Login Failed! </legend>";
      }
    }
    else {
      echo "<br><br><legend><font color=black>Error! </legend>";
    }
}
ob_end_flush();
?>
