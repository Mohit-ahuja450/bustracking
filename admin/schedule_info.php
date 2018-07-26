<?php
	include ('db/dbcon.php');
    $c=$_POST['city_curr'];
    if ($c!="") {
    $city_curr=$c;
    $bus_number1=$_POST['bus_number1'];
    $s_po=$_POST['s_po'];

$result=mysqli_query($db,"SELECT * FROM `bus` WHERE bus_number='$bus_number1'") or die (mysqli_error());
$execu=mysqli_fetch_assoc($result);
$id=$execu['busid'];
$result1=mysqli_query($db,"UPDATE `schedule` SET `curr_location`='$city_curr', curr_time=CURDATE() WHERE busid='$id' AND from_location='$s_po'");

    if($result1)
    {
    echo "<script>alert('Successfully Update'); window.location='dashboard.php'</script>";
    }else{
        echo "<script>alert('Not Successfully Update'); window.location='dashboard.php'</script>";
    }
}
?>
