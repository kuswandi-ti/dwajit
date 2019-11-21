<?php
	include 'config/fnd.connection.php';

	$id = $_GET['id'];

	$query = mysqli_query($fndMysql,"DELETE FROM time_kanban WHERE id = '$id'"); 
	header('location:?p=karawang');	
?>