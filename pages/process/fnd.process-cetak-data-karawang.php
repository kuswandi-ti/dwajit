<!-- http://davidscotttufts.com/2009/03/31/how-to-create-barcodes-in-php/ -->

<html>
	<?php
		include 'config/fnd.connection.php';
	?>
	
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		
		<style type="text/css">
			@media print {
				@page { 
					size: A4;
					margin: 3mm 3mm 3mm 3mm;
				}
			}
			
			.div-title {
				background-color: white;
			}
			
			.div-box {
				border: 2px solid black;
			}
			
			.div-no-border {
				border: 0px;
			}
			
			.text-title {
				text-align: center;
				font-weight: bold;
				font-size: 15px;
				font-family: Arial, Helvetica, sans-serif;
			}
			
			.text-medium {
				text-align: center;
				font-weight: bold;
				font-size: 30px;
				font-family: Arial, Helvetica, sans-serif;
			}
			
			.text-big {
				text-align: center;
				font-weight: bold;
				font-size: 40px;
				font-family: Arial, Helvetica, sans-serif;
			}
			
			<!--
			p {margin: 0; padding: 0;}	.ft10{font-size:12px;font-family:Arial;color:#000000;}
			.ft10i{font-size:14px;font-family:Arial;color:#000000;}
			.ft11i{font-size:14px;font-family:Arial;color:#000000;}
			.ft11{font-size:11px;font-family:Arial;color:#000000;}
			.ft11a{font-size:16px;font-family:Arial;color:#000000;}
			.ft12{font-size:30px;font-family:Arial;color:#000000;}
			.ft13{font-size:16px;font-family:Arial;color:#000000;}
			.ft14{font-size:28px;font-family:Arial;color:#000000;}
			.ft14a{font-size:30px;font-family:Arial;color:#000000;}
			.ft15{font-size:12px;font-family:Arial;color:#000000;}
			.ft16{font-size:14px;font-family:Arial;color:#000000;}
			.ft17{font-size:25px;font-family:Arial;color:#000000;}
			.ft17a{font-size:30px;font-family:Arial;color:#000000;}
			.ft17b{font-size:27px;font-family:Arial;color:#000000;}
			.ft18{font-size:43px;font-family:Arial;color:#000000;}
			.ft19{font-size:12px;font-family:Arial;color:#000000;}
			.ft20{font-size:12px;font-family:Arial;color:#000000;}
			.ft110{font-size:34px;font-family:Arial;color:#000000;}
			.ft110a{font-size:36px;font-family:Arial;color:#000000;}
			-->
		</style>
	</head>
	
	<body>
		<?php
			$id = $_GET['id'];
			$sql = "SELECT * FROM qtrx_customer_document_tmmin WHERE id='$id'";
			$query = mysqli_query($fndMysql, $sql);
			while ($row = mysqli_fetch_array($query)) {
				for ($x=1; $x<=$row['field_17']; $x++) {
				?>
				<div id="page1-div" style="position:relative">
					<img width="883" height="350" src="images/karawang1.png" alt="background image"/>
					
					<!-- BARCODE PART NO -->
					<p  style="position:absolute;top:1px;left:660px;white-space:nowrap" class="ft13">
						<img width="45" height="235" alt="<?=$row['field_10']?>" src="assets/plugins/barcode.php?size=40&text=<?=$row['field_10']?>&orientation=vertical&print=false" />
					</p>
					
					<!-- SUPPLIER -->
					<p  style="position:absolute;top:7px;left:130px;white-space:nowrap" class="ft13"><b>SUPPLIER</b></p>
					<p  style="position:absolute;top:30px;left:95px;white-space:nowrap" class="ft11a"><b><?= $row['field_21']?></b></p>					
					<p  style="position:absolute;top:55px;left:122px;white-space:nowrap" class="ft110a"><b><?= $row['field_1'] . '-'.$row['field_2'] ?></b></p>
					
					<!-- ARRIVAL TIME -->
					<p  style="position:absolute;top:105px;left:114px;white-space:nowrap" class="ft13"><b>ARRIVAL TIME</b></p>
					<p  style="position:absolute;top:130px;left:38px;white-space:nowrap" class="ft110"><b><?= date("d/m/Y-H:i", strtotime($row['field_35']))?></b></p>
					
					<!-- SUPPLIER DATA & BARCODE -->
					<p  style="position:absolute;top:184px;left:106px;white-space:nowrap" class="ft13"><b>SUPPLIER DATA</b></p>
					<p  style="position:absolute;top:210px;left:7px;white-space:nowrap" class="ft14a">
						<img width="313" height="45" alt="<?= $row['field_7'].$row['field_14']?>" src="assets/plugins/barcode.php?size=40&text=<?= $row['field_7'].$row['field_14']?>&print=false" />
					</p>
					<p  style="position:absolute;top:275px;left:140px;white-space:nowrap" class="ft14a"><b><?= $row['field_86']?></b></p>
					
					<!-- TITLE -->
					<p  style="position:absolute;top:15px;left:414px;white-space:nowrap" class="ft11i"><b>PT. TOYOTA MOTOR</b></p>
					<p  style="position:absolute;top:35px;left:380px;white-space:nowrap" class="ft11i"><b>MANUFACTURING INDONESIA</b></p>
					<p  style="position:absolute;top:60px;left:383px;white-space:nowrap" class="ft12"><b><?= $row['field_82'] ?></b></p>
					
					<!-- PART NO, PART NAME -->
					<p  style="position:absolute;top:104px;left:378px;white-space:nowrap" class="ft17a"><b><?= $row['part_no']?></b></p>
					<div style="position:absolute;height:39px;width:304px;top:140;left:335;word-wrap:break-word;">
						<p class="text-title"><?= $row['field_22']?></p>
					</div>
					
					<!-- DOCK CODE -->
					<p  style="position:absolute;top:7px;left:744px;white-space:nowrap" class="ft13"><b>DOCK CODE</b></p>
					<p  style="position:absolute;top:27px;left:764px;white-space:nowrap" class="ft18"><b><?= $row['field_6']?></b></p>
					
					<!-- PROGRESS LANE NO -->
					<p  style="position:absolute;top:85px;left:735px;white-space:nowrap" class="ft19"><b>PROGRESS LANE NO</b></p>
					<!--<p  style="position:absolute;top:110px;left:730px;white-space:nowrap" class="ft17b"><b><?= $row['field_26']?></b></p>
					<p  style="position:absolute;top:110px;left:810px;white-space:nowrap" class="ft17b"><b>-</b></p>
					<p  style="position:absolute;top:110px;left:830px;white-space:nowrap" class="ft17b"><b><?= $row['field_27']?></b></p>-->
					<p  style="position:absolute;top:110px;left:780px;white-space:nowrap" class="ft17b"><b><?= substr("0000".$row['field_27'], -2)?></b></p>
					
					<!-- CONVEYANCE NO -->
					<p  style="position:absolute;top:162px;left:733px;white-space:nowrap" class="ft16"><b>CONVEYANCE NO</b></p>
					<p  style="position:absolute;top:179px;left:780px;white-space:nowrap" class="ft18"><b><?= $row['field_61']?></b></p>
					
					<!-- UNIQUE NO -->
					<p  style="position:absolute;top:184px;left:450px;white-space:nowrap" class="ft13"><b>UNIQUE NO</b></p>
					<p  style="position:absolute;top:203px;left:447px;white-space:nowrap" class="ft18"><b><?= $row['field_14']?></b></p>
					
					<!-- PCS / KANBAN -->
					<p  style="position:absolute;top:260px;left:350px;white-space:nowrap" class="ft15"><b>PCS/KANBAN</b></p>
					<p  style="position:absolute;top:280px;left:380px;white-space:nowrap" class="ft14"><b><?= $row['field_15']?></b></p>
					
					<!-- ORDER NO -->
					<p  style="position:absolute;top:260px;left:505px;white-space:nowrap" class="ft13"><b>ORDER NO</b></p>
					<!--<p  style="position:absolute;top:280px;left:470px;white-space:nowrap" class="ft17"><b><?= $row['field_7']?></b></p>-->
					<p  style="position:absolute;top:287px;left:460px;white-space:nowrap" class="ft11a"><b><?= substr($row['field_7'], 0, 4)?></b></p>
					<span style="position:absolute;top:282px;left:510px;white-space:nowrap" class="ft17a">
						<b><?= substr($row['field_7'], 4, 4)?></b>
					</span>
					<span style="position:absolute;top:287px;left:590px;white-space:nowrap" class="ft11a">
						<b><?= substr($row['field_7'], 8, 4)?></b>
					</span>
					
					<!-- PART ADDRESS -->
					<p  style="position:absolute;top:240px;left:696px;white-space:nowrap" class="ft13"><b>PART ADDRESS</b></p>
					<p  style="position:absolute;top:270px;left:685px;white-space:nowrap" class="ft14"><b><?= $row['field_11']?></b></p>
					
					<p style="position:absolute;top:318px;left:12px;white-space:nowrap" class="ft10i">
						<i>Printed at Supplier on :
							<?php
								date_default_timezone_set('Asia/Jakarta');
								echo date('d/m/Y H:i:s A');
							?>
						</i>
					</p>
				</div>
		<?php		
			}}
			
			$sql = "UPDATE 
						time_kanban 
					SET 
						printed = printed + 1
					WHERE 
						id = '$id'";
			$query = mysqli_query($fndMysql, $sql);
		?>
	</body>
	
	<script>
		window.print();
	</script>
</html>
