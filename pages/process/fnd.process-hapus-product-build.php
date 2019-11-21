<?php
include 'config/fnd.connection.php';

$id = $_GET['id'];
$part_no = $_GET['part_no'];
$part_name = $_GET['part_name'];
$prd_ged = $_GET['prd_ged'];


$query = mysqli_query($fndMysql,"DELETE FROM tmst_pngedung WHERE id='$id'"); 
header('location:?p=product-build'); 
?>