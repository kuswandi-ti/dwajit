<?php
	include 'config/fnd.connection.php';

	$part_no 		= $_POST['part_no'];
	$part_name 		= $_POST['part_name'];
	$total_qty 		= $_POST['total_qty'];
	$job_no 		= $_POST['job_no'];
	$arrival_time 	= $_POST['arrival_time'];
	$part_address 	= $_POST['part_address'];
	$order_no 		= $_POST['order_no'];

	$sql = "INSERT INTO time_kanban(field_26, field_27, field_32, 
				field_28, field_13, field_11, field_10) 
			VALUES('$part_no', '$part_name', '$total_qty', '$job_no',
				'$arrival_time', '$part_address', '$order_no')";
	$query = mysqli_query($fndMysql , $sql);
	header('location:?p=adm-sunter'); 
?>