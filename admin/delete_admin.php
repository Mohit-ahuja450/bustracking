<?php 

include('db/dbcon.php');

$get_id=$_GET['adminid'];

mysqli_query($db,"delete from admin where adminid = '$get_id' ")or die(mysqli_error());
echo "<script>alert('Successfully Delete'); window.location='profile.php'</script>";
?>