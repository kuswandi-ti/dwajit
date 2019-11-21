<?php
include 'config/fnd.connection.php';
// include 'config/fnd.config.php';

$id = $_POST['id'];
$part_no = $_POST['part_no'];
$cust = $_POST['cust'];
$plan = $_POST['plan'];
$destination = $_POST['destination'];
$pc_1a = $_POST['pc_1a'];
$pc_1b = $_POST['pc_1b'];
$pc_2a = $_POST['pc_2a'];
$pc_2b = $_POST['pc_2b'];
$pc_3a = $_POST['pc_3a'];
$pc_3b = $_POST['pc_3b'];
$pc_4a = $_POST['pc_4a'];
$pc_4b = $_POST['pc_4b'];
$pc_5a = $_POST['pc_5a'];
$pc_5b = $_POST['pc_5b'];
$pc_6a = $_POST['pc_6a'];
$pc_6b = $_POST['pc_6b'];
$pc_7a = $_POST['pc_7a'];
$pc_7b = $_POST['pc_7b'];
$pl_1a = $_POST['pl_1a'];
$pl_1b = $_POST['pl_1b'];
$pl_2a = $_POST['pl_2a'];
$pl_2b = $_POST['pl_2b'];
$pl_3a = $_POST['pl_3a'];
$pl_3b = $_POST['pl_3b'];
$pl_4a = $_POST['pl_4a'];
$pl_4b = $_POST['pl_4b'];
$pl_5a = $_POST['pl_5a'];
$pl_5b = $_POST['pl_5b'];
$pl_6a = $_POST['pl_6a'];
$pl_6b = $_POST['pl_6b'];
$pl_7a = $_POST['pl_7a'];
$pl_7b = $_POST['pl_7b'];


$fndMysql = mysqli_query($fndMysql , "INSERT INTO tmst_time_pulling(id, cust, plan, destination, pc_1a, pc_1b, pc_2a, pc_2b, pc_3a, pc_3b, pc_4a, pc_4b, pc_5a, pc_5b, pc_6a, pc_6b, pc_7a, pc_7b,pl_1a, pl_1b, pl_2a, pl_2b, pl_3a, pl_3b, pl_4a, pl_4b, pl_5a, pl_5b, pl_6a, pl_6b, pl_7a, pl_7b) VALUES('$id', '$cust','$plan','$destination','$pc_1a','$pc_1b','$pc_2a','$pc_2b','$pc_3a','$pc_3b','$pc_4a','$pc_4b','$pc_5a','$pc_5b','$pc_6a','$pc_6b','$pc_7a','$pc_7b','$pl_1a','$pl_1b','$pl_2a','$pl_2b','$pl_3a','$pl_3b','$pl_4a','$pl_4b','$pl_5a','$pl_5b','$pl_6a','$pl_6b','$pl_7a','$pl_7b')");
header('location:?p=pulling-loading'); 
?>