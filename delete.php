<?php
include("registrationPagedatabase.php");
$memberid=$_GET['di'];
$query="DELETE FROM registration WHERE member_id='$memberid'";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/simplewebsite/display.php">
    <?php
}
else{
    echo "<font color='red'>Sorry,Delete process failed";
}

?>