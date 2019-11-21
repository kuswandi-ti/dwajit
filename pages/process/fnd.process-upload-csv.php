<?php
	/* http://leogent.haromunthe.com/phpexcel-cheatsheet/ */
	
	date_default_timezone_set('Asia/Jakarta');
	
	include 'config/fnd.connection.php';
	require_once 'PHPExcel/PHPExcel.php';
	require_once 'PHPExcel/PHPExcel/IOFactory.php';
	
	if(isset($_POST['import'])) {
		$cust 					= $_GET['cust'];
		$tanggal_upload 		= date('d-m-Y H:i:s');
		$tanggal_upload_file	= date('d-m-Y-H-i-s');
		$input_file_type 		= 'xls';
		$status 				= 'Success';
		$cust_source			= $_POST['cust_source'];
		
		$nama_file_asli	= $_FILES['file']['name']; 							// Ambil nama file yang akan diupload
		$nama_file_tmp 	= $_FILES['file']['tmp_name']; 						// Ambil nama file temporary
		$ext_file_asli 	= pathinfo($nama_file_asli, PATHINFO_EXTENSION);	// Ambil ekstensi file yang akan diupload
		
		// buat nama file baru untuk temporary 
		// jika sudah selesai upload, file akan dihapus di akhir proses
		$nama_file_baru 		= 'data_'.$cust.'_'.$tanggal_upload_file.'.'.$ext_file_asli;
		$nama_file_baru_full 	= 'assets/files/'.$cust.'/'.$nama_file_baru;
		
		// Cek apakah file yang diupload adalah file xls
		if($ext_file_asli == $input_file_type) {
			move_uploaded_file($nama_file_tmp, $nama_file_baru_full);	// Upload file yang dipilih ke folder tmp			
			//$excel = PHPExcel_IOFactory::load($nama_file_baru_full);
			
			$objReader = PHPExcel_IOFactory::createReader("Excel5");
			$excel = $objReader->load($nama_file_baru_full);
			
			/* delete data sebelumnya supaya data yang tersimpan adalah data yang terakhir */
			$sql = "DELETE FROM time_kanban 
					WHERE nama_file_source = '$nama_file_asli'
						AND status = '$status'";
			$query = mysqli_query($fndMysql, $sql);
			
			$numrow = 1;  
			$worksheet = $excel->getActiveSheet();
			foreach ($worksheet->getRowIterator() as $row) {
				// Cek $numrow apakah lebih dari 1    
				// Artinya karena baris pertama adalah nama-nama kolom    
				// Jadi dilewat saja, tidak usah diimport
				if($numrow > 1) {
					// START -->
					// Skrip untuk mengambil value nya      
					$cellIterator = $row->getCellIterator();      
					$cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
					$get = array(); // Valuenya akan di simpan kedalam array,dimulai dari index ke 0      
					foreach ($cellIterator as $cell) {        
						array_push($get, $cell->getValue()); // Menambahkan value ke variabel array $get
					}
					// <-- END
					
					if($cust == 'TMMIN' and $cust_source == 'karawang') {
						$query = "INSERT INTO time_kanban 
										(`status`, `tanggal_upload`, `nama_file_sys`, `nama_file_source`,
										`field_0`,`field_1`,`field_2`,`field_3`,`field_4`,`field_5`, 
										`field_6`,`field_7`,`field_8`,`field_9`,`field_10`,`field_11`, 
										`field_12`,`field_13`,`field_14`,`field_15`,`field_16`,`field_17`, 
										`field_18`,`field_19`,`field_20`,`field_21`,`field_22`,`field_23`, 
										`field_24`,`field_25`,`field_26`,`field_27`,`field_28`, 
										`field_29`,`field_30`,`field_31`,`field_32`, 
										`field_33`,`field_34`,`field_35`,`field_36`,`field_37`,`field_38`, 
										`field_39`,`field_40`,`field_41`,`field_42`,`field_43`,`field_44`, 
										`field_45`,`field_46`,`field_47`,`field_48`,`field_49`,`field_50`, 
										`field_51`,`field_52`,`field_53`,`field_54`,`field_55`,`field_56`, 
										`field_57`,`field_58`,`field_59`,`field_60`,`field_61`,`field_62`, 
										`field_63`,`field_64`,`field_65`,`field_66`,`field_67`,`field_68`, 
										`field_69`,`field_70`,`field_71`,`field_72`,`field_73`,`field_74`, 
										`field_75`,`field_76`,`field_77`,`field_78`,`field_79`,`field_80`, 
										`field_81`,`field_82`,`field_83`,`field_84`,`field_85`,`field_86`, 
										`customer`,`plant`)
								  VALUES ('".$status."','".$tanggal_upload."','".$nama_file_baru."','".$nama_file_asli."',
									    '".$get[0]."','".$get[1]."','".$get[2]."','".$get[3]."','".$get[4]."','".$get[5]."',
										'".$get[6]."','".$get[7]."','".$get[8]."','".$get[9]."','".$get[10]."','".$get[11]."',
										'".$get[12]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[13]))."','".$get[14]."','".$get[15]."','".$get[16]."','".$get[17]."',
										'".$get[18]."','".$get[19]."','".$get[20]."','".$get[21]."','".$get[22]."','".$get[23]."',
										'".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[24]))."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[25]))."','".$get[26]."','".$get[27]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[28]))."',
										'".$get[29]."','".$get[30]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[31]))."','".$get[32]."',
										'".$get[33]."','".$get[34]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[35]))."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[36]))."','".$get[37]."','".$get[38]."',
										'".$get[39]."','".$get[40]."','".$get[41]."','".$get[42]."','".$get[43]."','".$get[44]."',
										'".$get[45]."','".$get[46]."','".$get[47]."','".$get[48]."','".$get[49]."','".$get[50]."',
										'".$get[51]."','".$get[52]."','".$get[53]."','".$get[54]."','".$get[55]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[56]))."',
										'".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[57]))."','".$get[58]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[59]))."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[60]))."','".$get[61]."','".$get[62]."',
										'".$get[63]."','".$get[64]."','".$get[65]."','".$get[66]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[67]))."','".$get[68]."',
										'".$get[69]."','".$get[70]."','".$get[71]."','".$get[72]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[73]))."','".$get[74]."',
										'".$get[75]."','".$get[76]."','".$get[77]."','".$get[78]."','".$get[79]."','".$get[80]."',
										'".$get[81]."','".$get[82]."','".$get[83]."','".$get[84]."','".$get[85]."','".$get[86]."',
										'".$cust."','".strtoupper($cust_source)."')";
						mysqli_query($fndMysql, $query);
						
					} elseif($cust == 'TMMIN' and $cust_source == 'sunter') {
						// field(92) = https://stackoverflow.com/questions/4576927/convert-a-string-containing-a-number-in-scientific-notation-to-a-double-in-php
						$shutterlot_code = (substr($get[11],0,1) == "=" ? substr($get[11],1,100) : $get[11]);						
						$query = "INSERT INTO time_kanban 
										(`status`, `tanggal_upload`, `nama_file_sys`, `nama_file_source`,
										`field_0`,`field_1`,`field_2`,`field_3`,`field_4`,`field_5`, 
										`field_6`,`field_7`,`field_8`,`field_9`,`field_10`,`field_11`, 
										`field_12`,`field_13`,`field_14`,`field_15`,`field_16`,`field_17`, 
										`field_18`,`field_19`,`field_20`,`field_21`,`field_22`,`field_23`, 
										`field_24`,`field_25`,`field_26`,`field_27`,`field_28`, 
										`field_29`,`field_30`,`field_31`,`field_32`, 
										`field_33`,`field_34`,`field_35`,`field_36`,`field_37`,`field_38`, 
										`field_39`,`field_40`,`field_41`,`field_42`,`field_43`,`field_44`, 
										`field_45`,`field_46`,`field_47`,`field_48`,`field_49`,`field_50`, 
										`field_51`,`field_52`,`field_53`,`field_54`,`field_55`,`field_56`, 
										`field_57`,`field_58`,`field_59`,`field_60`,`field_61`,`field_62`, 
										`field_63`,`field_64`,`field_65`,`field_66`,`field_67`,`field_68`, 
										`field_69`,`field_70`,`field_71`,`field_72`,`field_73`,`field_74`, 
										`field_75`,`field_76`,`field_77`,`field_78`,`field_79`,`field_80`, 
										`field_81`,`field_82`,`field_83`,`field_84`,`field_85`,`field_86`, 
										`field_87`,`field_88`,`field_89`,`field_90`,`field_91`,`field_92`,
										`field_93`,`field_94`,`field_95`,`field_96`,`field_97`,`field_98`,
										`field_99`,`customer`,`plant`)
								  VALUES ('".$status."','".$tanggal_upload."','".$nama_file_baru."','".$nama_file_asli."',
										'".$get[0]."','".$get[1]."','".$get[2]."','".$get[3]."','".$get[4]."','".$get[5]."',
										'".$get[6]."','".$get[7]."','".$get[8]."','".$get[9]."','".$get[10]."','".$shutterlot_code."',
										'".$get[12]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[13]))."','".$get[14]."','".$get[15]."','".$get[16]."','".$get[17]."',
										'".$get[18]."','".$get[19]."','".$get[20]."','".$get[21]."','".$get[22]."','".$get[23]."',
										'".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[24]))."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[25]))."','".$get[26]."','".$get[27]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[28]))."',
										'".$get[29]."','".$get[30]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[31]))."','".$get[32]."',
										'".$get[33]."','".$get[34]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[35]))."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[36]))."','".$get[37]."','".$get[38]."',
										'".$get[39]."','".$get[40]."','".$get[41]."','".$get[42]."','".$get[43]."','".$get[44]."',
										'".$get[45]."','".$get[46]."','".$get[47]."','".$get[48]."','".$get[49]."','".$get[50]."',
										'".$get[51]."','".$get[52]."','".$get[53]."','".$get[54]."','".$get[55]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[56]))."',
										'".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[57]))."','".$get[58]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[59]))."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[60]))."','".$get[61]."','".$get[62]."',
										'".$get[63]."','".$get[64]."','".$get[65]."','".$get[66]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[67]))."','".$get[68]."',
										'".$get[69]."','".$get[70]."','".$get[71]."','".$get[72]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[73]))."','".$get[74]."',
										'".$get[75]."','".$get[76]."','".$get[77]."','".$get[78]."','".$get[79]."','".$get[80]."',
										'".$get[81]."','".$get[82]."','".$get[83]."','".$get[84]."','".$get[85]."','".$get[86]."',
										'".$get[87]."','".$get[88]."','".$get[89]."','".$get[90]."','".$get[91]."','".sprintf("%.0f", $get[92])."',
										'".$get[93]."','".$get[94]."','".$get[95]."','".$get[96]."','".$get[97]."','".$get[98]."',
										'".$get[99]."','".$cust."','".strtoupper($cust_source)."')";
						mysqli_query($fndMysql, $query);
					
					} elseif($cust == 'ADM' and $cust_source == 'karawang') {
						$query = "INSERT INTO time_kanban 
										(`status`,`tanggal_upload`, `nama_file_sys`, `nama_file_source`,
										`field_0`,`field_1`,`field_2`,`field_3`,`field_4`,`field_5`, 
										`field_6`,`field_7`,`field_8`,`field_9`,`field_10`,`field_11`, 
										`field_12`,`field_13`,`field_14`,`field_15`,`field_16`,`field_17`, 
										`field_18`,`field_19`,`field_20`,`field_21`,`field_22`,`field_23`, 
										`field_24`,`field_25`,`field_26`,`field_27`,`field_28`, 
										`field_29`,`field_30`,`field_31`,`field_32`, 
										`field_33`,`field_34`,`field_35`,`field_36`,`customer`)
								  VALUES ('".$status."','".$tanggal_upload."','".$nama_file_baru."','".$nama_file_asli."',
										'".$get[0]."','".$get[1]."','".$get[2]."','".$get[3]."','".$get[4]."','".$get[5]."',
										'".$get[6]."','".$get[7]."','".$get[8]."','".$get[9]."','".$get[10]."','".$get[11]."',
										'".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[12]))."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[13]))."','".PHPExcel_Style_NumberFormat::toFormattedString($get[14], 'hh:mm:ss')."','".$get[15]."','".$get[16]."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[17]))."',
										'".PHPExcel_Style_NumberFormat::toFormattedString($get[18], 'hh:mm:ss')."','".$get[19]."','".$get[20]."','".$get[21]."','".$get[22]."','".$get[23]."',
										'".$get[24]."','".$get[25]."','".$get[26]."','".$get[27]."','".$get[28]."',
										'".$get[29]."','".$get[30]."','".$get[31]."','".$get[32]."',
										'".$get[33]."','".$get[34]."','".$get[35]."','".$get[36]."','".$cust."')";
						mysqli_query($fndMysql, $query);
						
					} elseif($cust == 'ADM' and $cust_source == 'sunter') {
						$query = "INSERT INTO time_kanban 
										(`status`,`tanggal_upload`, `nama_file_sys`, `nama_file_source`,
										`field_0`,`field_1`,`field_2`,`field_3`,`field_4`,`field_5`, 
										`field_6`,`field_7`,`field_8`,`field_9`,`field_10`,`field_11`, 
										`field_12`,`field_13`,`field_14`,`field_15`,`field_16`,`field_17`, 
										`field_18`,`field_19`,`field_20`,`field_21`,`field_22`,`field_23`, 
										`field_24`,`field_25`,`field_26`,`field_27`,`field_28`, 
										`field_29`,`field_30`,`field_31`,`field_32`, 
										`field_33`,`field_34`,`field_35`,`field_36`,`customer`)
								  VALUES ('".$status."','".$tanggal_upload."','".$nama_file_baru."','".$nama_file_asli."',
										'".$get[0]."','".$get[1]."','".$get[2]."','".$get[3]."','".$get[4]."','".$get[5]."',
										'".$get[6]."','".$get[7]."','".$get[8]."','".$get[9]."','".$get[10]."','".$get[11]."',
										'".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[12]))."','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[13]))."','".PHPExcel_Style_NumberFormat::toFormattedString($get[14], 'hh:mm:ss')."','','','".date("Y-m-d H:i:s", PHPExcel_Shared_Date::ExcelToPHP($get[15]))."','".PHPExcel_Style_NumberFormat::toFormattedString($get[16], 'hh:mm:ss')."','".$get[17]."',
										'".$get[18]."','0','".$get[19]."','".$get[20]."','".$get[21]."','".$get[22]."','".$get[23]."',
										'".$get[24]."','".$get[25]."','".$get[26]."','".$get[27]."','".$get[28]."',
										'".$get[29]."','".$get[30]."','".$get[31]."','".$get[32]."',
										'".$get[33]."','".$cust."')";
						mysqli_query($fndMysql, $query);
					}
				}
				$numrow++;
			}
			
		} else {
			// jika bukan csv
			if($cust == 'TMMIN' and ($cust_source == 'karawang' or $cust_source == 'sunter')) {
				echo "<center><h1>Format file harus XLS.</h1><a href='?p=upload-csv-tmmin'>Back</a></center>";
				exit();
			} elseif($cust == 'ADM' and ($cust_source == 'karawang' or $cust_source == 'sunter')) {
				echo "<center><h1>Format file harus XLS.</h1><a href='?p=upload-csv-adm'>Back</a></center>";
				exit();
			}
		}
	}
	
	echo "<p class='text-danger'><center><h1>Successfully !!!</h1></center></p>";	
	
	if($cust == 'TMMIN' and ($cust_source == 'karawang' or $cust_source == 'sunter')) {
		echo "<p><center><h1>Proses upload file CSV / Excel berhasil.</h1><a href='?p=upload-csv-tmmin'>Back</a></center></p>";
		header('Refresh: 5; URL=fnd.php?p=upload-csv-tmmin');
	} elseif($cust == 'ADM' and ($cust_source == 'karawang' or $cust_source == 'sunter')) {
		echo "<p><center><h1>Proses upload file CSV / Excel berhasil.</h1><a href='?p=upload-csv-adm'>Back</a></center></p>";
		header('Refresh: 5; URL=fnd.php?p=upload-csv-adm');
	}
?>
