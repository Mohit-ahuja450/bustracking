<?php 

include('db/dbcon.php');

$get_bid=$_GET['busid'];

if(isset($get_bid)){
?>
<!DOCTYPE html>
<html>
<head>
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link id="bootstrap-style" href="css/slide.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
	<title>Bus Dispatch and Information System</title>
</head>
<body>
		<form action="" method="POST">
		
			<h1 class="text-center">Are you sure you want to delete?</h1>
			
			<div class="login-actions"><center>
				<button type="submit" name="close" class="button btn btn-success btn-large">Close</button>
				<button type="submit" name="del" class="button btn btn-warning btn-large">Delete</button></center>
			</div> <!-- .actions -->
			
			
			
		</form>
<?php
}
	if (isset($_POST['del'])) {
		$del=mysqli_query($db,"DELETE from `bus` where busid = '$get_bid' ")or die(mysqli_error());
		if($del)
			echo "<script>alert('Successfully Delete'); window.location='bus.php'</script>";		
	}else if (isset($_POST['close'])){
		die(header('location:bus.php'));
	}
?>

</body>
</html>