<?php
include("registrationPagedatabase.php");
$memberid=$_GET['pdfid'];
$query="DELETE FROM uploadpdf WHERE id='$memberid'";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/simplewebsite/adminviewpdf.php">
    <?php
}
else{
    echo "<font color='red'>Sorry,Delete process failed";
}

?>
