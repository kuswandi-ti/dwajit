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
			$sql = "SELECT * FROM qtrx_customer_document_tmmin WHERE id IN ('108', '109', '110')";
			$query = mysqli_query($fndMysql, $sql);
			while ($row = mysqli_fetch_array($query)) { 
				for ($x=1; $x<=$row['field_17']; $x++) {
		?>	
				<div id="page1-div" style="position:relative">
					<img width="883" height="350" src="images/sunter1.jpg" alt="background image"/>
					
					<!-- BARCODE PART NO -->
					<p  style="position:absolute;top:1px;left:660px;white-space:nowrap" class="ft13">
						<img width="55" height="315" alt="<?=$row['field_92']?>" src="assets/plugins/barcode.php?size=40&text=<?=$row['field_92']?>&orientation=vertical&print=true" />
					</p>
					
					<!-- SUPPLIER -->
					<p  style="position:absolute;top:15px;left:130px;white-space:nowrap" class="ft13"><b>SUPPLIER</b></p>
					<p  style="position:absolute;top:35px;left:95px;white-space:nowrap" class="ft11a"><b><?= $row['field_21']?></b></p>					
					<p  style="position:absolute;top:49px;left:122px;white-space:nowrap" class="ft14"><b><?= $row['field_1'] . '-'.$row['field_2'] ?></b></p>
					
					<!-- ARRIVAL TIME -->
					<p  style="position:absolute;top:89px;left:114px;white-space:nowrap" class="ft13"><b>ARRIVAL TIME</b></p>
					<p  style="position:absolute;top:110px;left:40px;white-space:nowrap" class="ft14"><b><?= date("d/m/Y-H:i", strtotime($row['field_35']))?></b></p>
					
					<!-- DOCK CODE -->
					<p  style="position:absolute;top:150px;left:20px;white-space:nowrap" class="ft16"><b>DOCK CODE</b></p>
					<p  style="position:absolute;top:165px;left:35px;white-space:nowrap" class="ft110"><b><?= $row['field_6']?></b></p>
					
					<!-- P-LANE NO -->
					<p  style="position:absolute;top:150px;left:130px;white-space:nowrap" class="ft16"><b>P-LANE NO</b></p>
					<p  style="position:absolute;top:165px;left:135px;white-space:nowrap" class="ft110"><b><?= substr("0000".$row['field_27'], -2) ?></b></p>
					
					<!-- CONVEYANCE NO -->
					<p  style="position:absolute;top:150px;left:216px;white-space:nowrap" class="ft11"><b>CONVEYANCE NO</b></p>
					<p  style="position:absolute;top:165px;left:236px;white-space:nowrap" class="ft110"><b><?= $row['field_61']?></b></p>
					
					<!-- SUPPLIER DATA & BARCODE -->
					<p  style="position:absolute;top:208px;left:106px;white-space:nowrap" class="ft13"><b>SUPPLIER DATA</b></p>
					<p  style="position:absolute;top:235px;left:20px;white-space:nowrap" class="ft14">
						<img width="270" height="40" alt="<?= $row['field_84']?>" src="assets/plugins/barcode.php?size=40&text=<?= $row['field_84']?>&print=false" />
					</p>
					<p  style="position:absolute;top:275px;left:110px;white-space:nowrap" class="ft14"><b><?= $row['field_85']?></b></p>
					
					<!-- TITLE -->
					<p  style="position:absolute;top:12px;left:414px;white-space:nowrap" class="ft11i"><b>PT. TOYOTA MOTOR</b></p>
					<p  style="position:absolute;top:32px;left:380px;white-space:nowrap" class="ft11i"><b>MANUFACTURING INDONESIA</b></p>
					<p  style="position:absolute;top:50px;left:410px;white-space:nowrap" class="ft12"><b><?= $row['field_82'] ?></b></p>
					
					<!-- PART NO, PART NAME -->
					<p  style="position:absolute;top:84px;left:378px;white-space:nowrap" class="ft17a"><b><?= $row['part_no']?></b></p>
					<div style="position:absolute;height:39px;width:304px;top:120;left:335;word-wrap:break-word;">
						<p class="text-title"><?= $row['field_22']?></p>						
					</div>
					
					<!-- UNIQUE NO -->
					<p  style="position:absolute;top:151px;left:370px;white-space:nowrap" class="ft15"><b>UNIQUE NO</b></p>
					<p  style="position:absolute;top:165px;left:360px;white-space:nowrap" class="ft110"><b><?= $row['field_14']?></b></p>
					
					<!-- BOX NO -->
					<p  style="position:absolute;top:151px;left:540px;white-space:nowrap" class="ft15"><b>BOX NO</b></p>
					<p  style="position:absolute;top:165px;left:525px;white-space:nowrap" class="ft110"><b><?= $row['field_96']?></b></p>
					
					<!-- SHUTTLERLOT CODE -->
					<p  style="position:absolute;top:209px;left:360px;white-space:nowrap" class="ft15"><b>SHUTTLERLOT CODE</b></p>
					<p  style="position:absolute;top:226px;left:340px;white-space:nowrap" class="ft17"><b><?= $row['field_11']?></b></p>
					
					<!-- CASE -->
					<p  style="position:absolute;top:209px;left:520px;white-space:nowrap" class="ft15"><b>CASE</b></p>
					<p  style="position:absolute;top:232px;left:520px;white-space:nowrap" class="ft11a"><b><?= $row['field_94']?></b></p>
					
					<!-- PACK DATE -->
					<p  style="position:absolute;top:209px;left:580px;white-space:nowrap" class="ft15"><b>PACK DATE</b></p>
					<!--<p  style="position:absolute;top:232px;left:580px;white-space:nowrap" class="ft11a"><b><?= substr($row['field_7'], 4, 2)."-".substr($row['field_7'], 6, 2) ?></b></p>-->
					<p  style="position:absolute;top:232px;left:580px;white-space:nowrap" class="ft11a"><b><?= substr($row['field_39'], 0, 2)."-".substr($row['field_39'], 2, 2) ?></b></p>
					
					<!-- PCS/KANBAN -->
					<p  style="position:absolute;top:267px;left:340px;white-space:nowrap" class="ft15"><b>PCS/KANBAN</b></p>
					<p  style="position:absolute;top:284px;left:360px;white-space:nowrap" class="ft17"><b><?= $row['field_15']?></b></p>
					
					<!-- ORDER NO -->
					<p  style="position:absolute;top:267px;left:510px;white-space:nowrap" class="ft15"><b>ORDER NO</b></p>
					<p  style="position:absolute;top:287px;left:460px;white-space:nowrap" class="ft11a"><b><?= substr($row['field_7'], 0, 4)?></b></p>
					<span style="position:absolute;top:282px;left:510px;white-space:nowrap" class="ft17a">
						<b><?= substr($row['field_7'], 4, 4)?></b>
					</span>
					<span style="position:absolute;top:287px;left:590px;white-space:nowrap" class="ft11a">
						<b><?= substr($row['field_7'], 8, 4)?></b>
					</span>
					
					<!-- IMPORTER CODE -->
					<p  style="position:absolute;top:15px;left:727px;white-space:nowrap" class="ft13"><b>IMPORTER CODE</b></p>					
					<p  style="position:absolute;top:35px;left:752px;white-space:nowrap" class="ft14"><b><?= $row['field_93'] ?></b></p>
					
					<!-- IMPORTER INFO -->
					<p  style="position:absolute;top:68px;left:728px;white-space:nowrap" class="ft13"><b>IMPORTER INFO</b></p>					
					<p  style="position:absolute;top:89px;left:765px;white-space:nowrap" class="ft11a"><b><?= $row['field_88'] ?></b></p>
					<p  style="position:absolute;top:112px;left:755px;white-space:nowrap" class="ft11a"><b><?= $row['field_89'] ?></b></p>
					<p  style="position:absolute;top:135px;left:743px;white-space:nowrap" class="ft11a"><b><?= $row['field_90'] ?></b></p>
					<p  style="position:absolute;top:160px;left:743px;white-space:nowrap" class="ft11a"><b><?= $row['field_91'] ?></b></p>
					
					<!-- RENBAN NO -->
					<p  style="position:absolute;top:190px;left:737px;white-space:nowrap" class="ft13"><b>RENBAN NO</b></p>					
					<p  style="position:absolute;top:210px;left:752px;white-space:nowrap" class="ft14"><b><?= $row['field_97'] ?></b></p>
					
					<!-- OTHERS INFO -->
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