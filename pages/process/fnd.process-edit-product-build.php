<?php
include 'config/fnd.connection.php';


$id = $_POST['id'];
$part_no = $_POST['part_no'];
$part_name = $_POST['part_name'];
$prd_ged = $_POST['prd_ged'];

$query = mysqli_query($fndMysql,"UPDATE tmst_pngedung SET id='$id', part_no='$part_no', part_name='$part_name', prd_ged='$prd_ged' WHERE id='$id'"); 
header('location:?p=product-build'); 

?>