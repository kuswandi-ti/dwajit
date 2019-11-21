<?php  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ( $_FILES['karawang-manifest']['type'] == 'application/pdf' && $_FILES['karawang-kanban']['type'] == 'application/pdf' && $_FILES['karawang-label']['type'] == 'application/pdf' ) {
		date_default_timezone_set('Asia/Jakarta');
		$now = time();

		$destinationFileName_manifest = date('d-m-Y').'.'."";
		$destinationFileName_kanban = date('d-m-Y').'.'."";
		$destinationFileName_label = date('d-m-Y').'.'."";
		$nm_manifest = $destinationFileName_manifest.'_'.$_FILES['karawang-manifest']['name'];
		$nm_kanban = $destinationFileName_kanban_.'_'.$_FILES['karawang-kanban']['name'];
		$nm_label = $destinationFileName_label.'_'.$_FILES['karawang-label']['name'];
		$upload_manifest = move_uploaded_file($_FILES['karawang-manifest']['tmp_name'], 'assets/files/karawang/'.$nm_manifest);
		if ($upload_manifest) {
			$upload_kanban = move_uploaded_file($_FILES['karawang-kanban']['tmp_name'], 'assets/files/karawang/'.$nm_kanban);
			if ($upload_kanban) {
				$upload_label = move_uploaded_file($_FILES['karawang-label']['tmp_name'], 'assets/files/karawang/'.$nm_label);
				if ($upload_label) {
					$_SESSION['ALERT'] = 'Berhasil Upload File PDF Karawang!';
				}else{
					unlink('assets/files/karawang/'.$nm_kanban);
					$_SESSION['ALERT'] = 'Gagal Upload File PDF Label!';
				}
			}else{
				unlink('assets/files/karawang/'.$nm_manifest);
				$_SESSION['ALERT'] = 'Gagal Upload File PDF Kanban!';
			}
		}else {
			$_SESSION['ALERT'] = 'Gagal Upload File PDF Manifest!';
		}
	}else{
		$_SESSION['ALERT'] = 'Format File Harus PDF!';
	}
}else{
	$_SESSION['ALERT'] = 'Lengkapi Form!';
}
header('location:?p=upload-pdf');
?>