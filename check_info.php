<?php require('header.php'); ?>
	<center><div class="content clearfix">
<?php
	include ('db/dbcon.php');
    $c=$_POST['bus_number1'];
    if ($c!="") {
    $s_po=$_POST['s_po'];

$result=mysqli_query($db,"SELECT * FROM `bus` WHERE bus_number='$c'") or die (mysqli_error());
$execu=mysqli_fetch_assoc($result);
$id=$execu['busid'];
$btype=$execu['bus_type'];
$result1=mysqli_query($db,"SELECT * FROM `schedule` WHERE  busid = '$id' AND from_location='$s_po'") or die (mysqli_error());
$execu1=mysqli_fetch_assoc($result1);
$did=$execu1['driverid'];
$result2=mysqli_query($db,"SELECT * FROM `driver` WHERE driverid = '$did'") or die (mysqli_error());
$execu2=mysqli_fetch_assoc($result2);
?>
<div class="box-content">
<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Driver Name</th>
								  <th>Bus Number</th>
								  <th>Bus Type</th>
								  <th>From</th>
								  <th>Departure</th>
								  <th>Current Loc</th>
								  <th>Departure</th>
								  <th>Destination</th>
								  <th>Arrival</th>
								  <th>Terminal Location</th>
								  <th>Status</th>
							  </tr>
						  </thead>   
						  <tbody>
<?php
?>
							<tr>
								<td><?php echo $execu2['firstname']." ".$execu2['lastname']; ?></td>
								<td><?php echo $c; ?></td>
								<td><?php echo $btype; ?></td>
								<td><?php echo $execu1['from_location']; ?></td>
								<td><span class="label label-primary"><?php echo date("M d, Y H:i:s",strtotime($execu1['departure_time'])); ?></span></td>
								<td><?php echo $execu1['curr_location']; ?></td>
								<td><span class="label label-primary"><?php echo date("M d, Y H:i:s",strtotime($execu1['curr_time'])); ?></span></td>
								<td><?php echo $execu1['destination_location']; ?></td>
								<td><span class="label label-success"><?php echo date("M d, Y H:i:s",strtotime($execu1['arrival_time'])); ?></span></td>
								<td><span class="label label-success"><?php echo $execu1['terminal_location']; ?></span></td>
								<td><span class="label label-warning"><?php echo $execu1['status_operation']; ?></span></td>
							</tr>
<?php  }?>					  
						  </tbody> 
					  </table> 
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include ('footer.php'); ?>