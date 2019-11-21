<?php
	include 'config/fnd.connection.php';

	$id 			= $_POST['id'];
	$part_no 		= $_POST['part_no'];
	$part_name 		= $_POST['part_name'];
	$total_qty 		= $_POST['total_qty'];
	$job_no 		= $_POST['job_no'];
	$arrival_time 	= $_POST['arrival_time'];
	$part_address 	= $_POST['part_address'];
	$order_no 		= $_POST['order_no'];

	$sql = "UPDATE 
				time_kanban 
			SET 
				field_10 = '$part_no', 
				field_22 = '$part_name', 
				field_16 = '$total_qty', 
				field_14 = '$job_no', 
				field_13 = '$arrival_time', 
				field_11 = '$part_address', 
				field_7  = '$order_no' 
			WHERE 
				id = '$id'";
	$query = mysqli_query($fndMysql, $sql); 
	header('location:?p=karawang'); 

?>