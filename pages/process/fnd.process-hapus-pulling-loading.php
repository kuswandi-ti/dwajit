<?php
include 'config/fnd.connection.php';

$id = $_GET['id'];
$cust = $_GET['cust'];
$plan = $_GET['plan'];
$destination = $_GET['destination'];
$pc_1a = $_GET['pc_1a'];
$pc_1b = $_GET['pc_1b'];
$pc_2a = $_GET['pc_2a'];
$pc_2b = $_GET['pc_2b'];
$pc_3a = $_GET['pc_3a'];
$pc_3b = $_GET['pc_3b'];
$pc_4a = $_GET['pc_4a'];
$pc_4b = $_GET['pc_4b'];
$pc_5a = $_GET['pc_5a'];
$pc_5b = $_GET['pc_5b'];
$pc_6a = $_GET['pc_6a'];
$pc_6b = $_GET['pc_6b'];
$pc_7a = $_GET['pc_7a'];
$pc_7b = $_GET['pc_7b'];
$pl_1a = $_GET['pl_1a'];
$pl_1b = $_GET['pl_1b'];
$pl_2a = $_GET['pl_2a'];
$pl_2b = $_GET['pl_2b'];
$pl_3a = $_GET['pl_3a'];
$pl_3b = $_GET['pl_3b'];
$pl_4a = $_GET['pl_4a'];
$pl_4b = $_GET['pl_4b'];
$pl_5a = $_GET['pl_5a'];
$pl_5b = $_GET['pl_5b'];
$pl_6a = $_GET['pl_6a'];
$pl_6b = $_GET['pl_6b'];
$pl_7a = $_GET['pl_7a'];
$pl_7b = $_GET['pl_7b'];

$query = mysqli_query($fndMysql,"DELETE FROM tmst_time_pulling WHERE id='$id'"); 
header('location:?p=product-build');
?>