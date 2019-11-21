<?php  
function fndNotification()
{
	if (isset($_SESSION['FNDNOTIF']) && isset($_SESSION['FNDNOTIF-TYPE'])) {
		$msg = $_SESSION['FNDNOTIF'];
		if ($_SESSION['FNDNOTIF-TYPE'] == TRUE) {
			echo '
			<div class="alert alert-success"> 
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
			<i class="fas fa-check"></i> &nbsp;&nbsp; '.$msg.'
			</div>
			';
		}else {
			echo '
			<div class="alert alert-danger"> 
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
			<i class="fas fa-times"></i> &nbsp;&nbsp; '.$msg.'
			</div>
			';
		}
		unset( $_SESSION['FNDNOTIF'], $_SESSION['FNDNOTIF-TYPE'] );
	}
}
?>