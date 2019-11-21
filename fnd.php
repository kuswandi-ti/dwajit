<?php  
	session_start();
	include 'config/fnd.connection.php';
	include 'config/fnd.config.php';

	switch ($_GET['p']) {
		/* ================================================ */
		/* Auth */
		case 'auth':
			include 'pages/fnd.auth.php';
			break;
		case 'process-auth':
			include 'pages/process/fnd.auth-process.php';
			break;
		case 'auth-out':
			include 'pages/process/fnd.auth-out-process.php';
			break;
		/* ================================================ */
		
		/* ================================================ */
		/* Master Data */		
		case 'product-build':
			include 'pages/fnd.product-build.php';
			break;
			
			case 'tambah-product-build':
				include 'pages/fnd.tambah-product-build.php';
				break;
				
			case 'edit-product-build':
				include 'pages/fnd.edit-product-build.php';
				break;
			
			case 'process-tambah-product-build':
				include 'pages/process/fnd.process-tambah-product-build.php';
				break;
				
			case 'process-edit-product-build':
				include 'pages/process/fnd.process-edit-product-build.php';
				break;
			
			case 'process-hapus-product-build':
				include 'pages/process/fnd.process-hapus-product-build.php';
				break;
		
		case 'pulling-loading':
			include 'pages/fnd.pulling-loading.php';
			break;
		
			case 'edit-pulling-loading':
				include 'pages/fnd.edit-pulling-loading.php';
				break;
			
			case 'process-edit-pulling-loading':
				include 'pages/process/fnd.process-edit-pulling-loading.php';
				break;
			
			case 'tambah-pulling-loading':
				include 'pages/fnd.tambah-pulling-loading.php';
				break;
			
			case 'process-tambah-pulling-loading':
				include 'pages/process/fnd.process-tambah-pulling-loading.php';
				break;
			
			case 'process-hapus-pulling-loading':
				include 'pages/process/fnd.process-hapus-pulling-loading.php';
				break;
		/* ================================================ */
		
		/* ================================================ */
		/* Upload CSV */
		case 'upload-csv-tmmin':
			include 'pages/fnd.upload-csv-tmmin.php';
			break;
		
		case 'upload-csv-adm':
			include 'pages/fnd.upload-csv-adm.php';
			break;
			
		case 'process-upload-csv':
			include 'pages/process/fnd.process-upload-csv.php';
			break;
		/* ================================================ */
		
		/* ================================================ */
		/* Upload PDF */		
		case 'upload-pdf':
			include 'pages/fnd.upload-pdf.php';
			break;
		/* ================================================ */
		
		/* ================================================ */
		/* Kanban/Gedung (TMMIN) */
		case 'sunter':
			include 'pages/fnd.kanban-sunter.php';
			break;
		
			case 'edit-sunter':
				include 'pages/fnd.edit-sunter.php';
				break;
		
			case 'process-edit-sunter':
				include 'pages/process/fnd.process-edit-sunter.php';
				break;
				
			case 'tambah-sunter':
				include 'pages/fnd.tambah-sunter.php';
				break;
			
			case 'procces-tambah-sunter':
				include 'pages/fnd.procces-tambah-sunter.php';
				break;
			
			case 'process-hapus-sunter':
				include 'pages/process/fnd.process-hapus-sunter.php';
				break;
				
			case 'process-cetak-data-sunter':
				include 'pages/process/fnd.process-cetak-data-sunter.php';
				break;
				
		case 'history-sunter':
			include 'pages/fnd.history-sunter.php';
			break;
			
		case 'karawang':
			include 'pages/fnd.kanban-karawang.php';
			break;
		
			case 'tambah-karawang':
				include 'pages/fnd.tambah-karawang.php';
				break;
			
			case 'edit-karawang':
				include 'pages/fnd.edit-karawang.php';
				break;
			
			case 'process-edit-karawang':
				include 'pages/process/fnd.process-edit-karawang.php';
				break;
			
			case 'process-tambah-karawang':
				include 'pages/process/fnd.process-tambah-karawang.php';
				break;
			
			case 'process-hapus-karawang':
				include 'pages/process/fnd.process-hapus-karawang.php';
				break;
				
			case 'process-cetak-data-karawang':
				include 'pages/process/fnd.process-cetak-data-karawang.php';
				break;
		
		case 'history-karawang':
			include 'pages/fnd.history-karawang.php';
			break;
		/* ================================================ */
		
		/* ================================================ */
		/* Kanban/Gedung (ADM) */
		case 'adm-sunter':
			include 'pages/fnd.kanban-adm-sunter.php';
			break;
		
			case 'edit-adm-sunter':
				include 'pages/fnd.edit-adm-sunter.php';
				break;
		
			case 'process-edit-adm-sunter':
				include 'pages/process/fnd.process-edit-adm-sunter.php';
				break;
				
			case 'tambah-adm-sunter':
				include 'pages/fnd.tambah-adm-sunter.php';
				break;
			
			case 'procces-tambah-adm-sunter':
				include 'pages/fnd.procces-tambah-adm-sunter.php';
				break;
			
			case 'process-hapus-adm-sunter':
				include 'pages/process/fnd.process-hapus-adm-sunter.php';
				break;
				
			case 'process-cetak-data-adm-sunter':
				include 'pages/process/fnd.process-cetak-data-adm-sunter.php';
				break;
				
		case 'history-adm-sunter':
			include 'pages/fnd.history-adm-sunter.php';
			break;
			
		case 'adm-karawang':
			include 'pages/fnd.kanban-adm-karawang.php';
			break;
		
			case 'tambah-adm-karawang':
				include 'pages/fnd.tambah-adm-karawang.php';
				break;
			
			case 'edit-adm-karawang':
				include 'pages/fnd.edit-adm-karawang.php';
				break;
			
			case 'process-edit-adm-karawang':
				include 'pages/process/fnd.process-edit-adm-karawang.php';
				break;
			
			case 'process-tambah-adm-karawang':
				include 'pages/process/fnd.process-tambah-adm-karawang.php';
				break;
			
			case 'process-hapus-adm-karawang':
				include 'pages/process/fnd.process-hapus-adm-karawang.php';
				break;
				
			case 'process-cetak-data-adm-karawang':
				include 'pages/process/fnd.process-cetak-data-adm-karawang.php';
				break;
		
		case 'history-adm-karawang':
			include 'pages/fnd.history-adm-karawang.php';
			break;
		/* ================================================ */
		
		/* ================================================ */
		/* Pengaturan Cycle */
		case 'edit-pengaturan-cycle':
			include 'pages/fnd.edit-pengaturan-cycle.php';
			break;
		
		case 'pengaturan-cycle':
			include 'pages/fnd.pengaturan-cycle.php';
			break;
			
		case 'process-edit-pengaturan-cycle':
			include 'pages/process/fnd.process-edit-pengaturan-cycle.php';
			break;
		/* ================================================ */		
		
		/* ================================================ */
		/* ??? */
		case 'scan-barcode':
			include 'pages/fnd.scan-barcode.php';
			break;
		
		case 'process-cetak-data-manifest':
			include 'pages/process/fnd.process-cetak-data-manifest.php';
			break;
		
		case 'upload-pdf-sunter':
			include 'pages/process/fnd.process-upload-pdf-sunter.php';
			break;
		
		case 'upload-pdf-karawang':
			include 'pages/process/fnd.process-upload-pdf-karawang.php';
			break;
		
		case 'process-cetak-data-karawang-satuan':
			include 'pages/process/fnd.process-cetak-data-karawang-satuan.php';
			break;
		
		case 'process-cetak-data-sunter-satuan':
			include 'pages/process/fnd.process-cetak-data-sunter-satuan.php';
			break;
		
		case 'exel_reader':
			include 'pages/fnd.exel_reader.php';
			break;

		default: 
			// header('location:fnd.php?p=auth'); 
			break;
		/* ================================================ */
	}
?>