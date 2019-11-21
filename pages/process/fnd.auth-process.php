<?php  
if (!empty($_POST['fnd-usr']) && !empty($_POST['fnd-pwd'])) {
	$s_username = $_POST['fnd-usr'];
	$s_password = $_POST['fnd-pwd'];
	$s_password_exe = null;

	if(is_numeric($s_password) == false || is_numeric($s_password) == true){
		for($s_x = 0; $s_x < strlen($s_password); $s_x++){
			$s_password_exe = $s_password_exe.ord(substr($s_password,$s_x,1));
		}
		$s_password = $s_password_exe;
	}

	$sql = "SELECT * FROM Account WHERE username = '$s_username' AND password = '$s_password'";
	$query = sqlsrv_query($fndSqlServer, $sql, $params, $options);
	if (sqlsrv_num_rows($query) > 0) {
		$row = sqlsrv_fetch_array($query);
		$_SESSION['FNDID'] = $row['account_id'];
		$_SESSION['FNDUSR'] = $row['username'];
		header('location:fnd.php?p=upload-pdf');
	}else {
		$_SESSION['FNDNOTIF'] = 'Username atau Password salah!';
		$_SESSION['FNDNOTIF-TYPE'] = FALSE; 
	}
}else {
	$_SESSION['FNDNOTSIF'] = 'Lengkapi Form';
	header('location:fnd.php?p=auth'); 
}
?>