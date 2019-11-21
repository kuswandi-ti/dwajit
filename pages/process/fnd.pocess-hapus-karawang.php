<?php
include 'config/fnd.connection.php';

$sysid = $_GET['sysid'];
$part_no = $_GET['part_no'];
$part_name = $_GET['part_name'];
$qty = $_GET['qty'];
$unique_no = $_GET['unique_no'];
$arrival_time = $_GET['arrival_time'];
$lot_code = $_GET['lot_code'];
$dept_time = $_GET['dept_time'];
$order_no = $_GET['order_no'];

$query = mysqli_query($fndMysql,"DELETE FROM qtrx_customer_document WHERE sysid='$sysid'"); 
header('location:?p=karawang');
?>