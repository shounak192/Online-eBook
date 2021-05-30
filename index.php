<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Online eBook/Library">
    <meta name="keywords" content="Online, eBook, Library">
    <meta name="author" content="Shounak Sengupta- https://www.linkedin.com/in/shounak192/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="40">
    <title>Home Page</title>
    <link rel="shortcut icon" href="favicon.ico">
    <style>
    body{
      background-image: url("homepagebackground.png");
      background-size:cover;

    }
    .button {
  border-radius: 4px;
  background-color: #1161ed;
  border: none;
  color: #fff;
  text-align: center;
  font-size: 18px;
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
}


.userloginbutton {
border-radius: 4px;
background-color: #1161ed;
border: none;
color: #fff;
text-align: center;
font-size: 18px;
padding-top: 11px;
padding-bottom: 10px;
padding-left: 12px;
padding-right: 12px;
width: auto;
transition: all 0.5s;
cursor: pointer;
margin: 5px;
position: fixed;
top: 10px;
right: 180px;
}

.userloginbutton span {
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
}

.userloginbutton span:after {
content: '\00bb';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.userloginbutton:hover span {
padding-right: 25px;
}

.userloginbutton:hover span:after {
opacity: 1;
right: 0;
}
    </style>
  </head>


  <body>
    <button class="button" onclick="location.href='adminlogin.php'"><span>Admin Login</span></button>
    <button class="userloginbutton" onclick="location.href='userlogin.php'"><span>User Login</span></button>
  </body>
</html>
