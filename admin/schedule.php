<?php include ('header.php');?>

			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="dashboard.php">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="schedule.php">Manage</a></li>
			</ul>

			<div class="account-container register">
	
	<div class="content clearfix">
		
		<form enctype="multipart/form-data" action="schedule_info.php" method="POST">
			<h1>Update Bus Status.</h1>
			
			<div class="login-fields">
				
				<div class="field">
					<label for="firstname">Bus Number:</label>
					<input type="text" id="firstname" name="bus_number1" placeholder="Bus Number" class="login" required />
				</div> <!-- /field -->	
				<div class="field">
					<label for="firstname">Starting Position:</label>
					<input type="text" id="firstname" name="s_po" placeholder="Starting City" class="login" required />
				</div> <!-- /field -->				
				<div class="field">
					<label for="firstname">Current City Reached:</label>
					<input type="text" id="firstname" name="city_curr" placeholder="Current city" class="login" required />
				</div> <!-- /field -->

				
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				<input  type="submit" name="update" class="button btn btn-primary btn-large"  value="Update">
				<a href="dashboard.php"><button type="button" style="margin-right:20px;" class="button btn btn-secondary btn-large">Cancel</button></a>
			</div> 
			<!-- .actions -->
			
		</form>
				
	</div> <!-- /content -->
	
</div> <!-- /account-container -->

	
<?php include ('footer.php'); ?>