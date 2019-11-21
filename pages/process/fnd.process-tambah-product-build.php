<?php
include 'config/fnd.connection.php';
// include 'config/fnd.config.php';

$id = $_POST['id'];
$part_no = $_POST['part_no'];
$part_name = $_POST['part_name'];
$prd_ged = $_POST['prd_ged'];

//echo $part_no;

$fndMysql = mysqli_query($fndMysql , "INSERT INTO tmst_pngedung(id, part_no, part_name,prd_ged) VALUES('$id', '$part_no','$part_name','$prd_ged')");
header('location:?p=product-build'); 
?>