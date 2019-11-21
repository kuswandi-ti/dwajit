<?php  
$serverdwahris   = "192.168.0.4";
$useriddwahris   = "root";
$passworddwahris = "aa2ee986e23dd4bd5da220d77e5b4ade";
$namedwahris     = "jit_system";
$fndMysql = new mysqli($serverdwahris, $useriddwahris, $passworddwahris, $namedwahris);

$serverName = "dwa3";
$user = "sa";
$pw = "myideaS";
$connectionInfo = array( "UID"=>$user, "PWD"=>$pw, "Database"=>"DWASYS"); 
$fndSqlServer = sqlsrv_connect($serverName, $connectionInfo);

$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
?>
