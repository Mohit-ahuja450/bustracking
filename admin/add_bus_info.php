            <?php
			include ('db/dbcon.php');
                if (isset($_POST['save'])){

                    $bus_number=$_POST['bus_number'];
                    $bus_type=$_POST['bus_type'];
					
                    mysqli_query($db,"INSERT into `bus` (bus_number,bus_type,date_added)
                        values ('$bus_number','$bus_type',DATE_FORMAT(NOW(),'%b %d %Y %h:%i %p'))") or die(mysql_error()); 
					echo "<script>alert('Bus Added!'); window.location='bus.php'</script>";
					
                }
            ?>