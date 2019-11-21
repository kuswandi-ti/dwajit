<html>	
	<?php
		include 'config/fnd.connection.php';
		include 'phpqrcode/qrlib.php';
	?>
	
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	</head>
	<body>
		<?php
			
			$id = $_GET['id'];
			$sql = "SELECT * FROM time_kanban WHERE id='$id'";
			$query = mysqli_query($fndMysql, $sql);
			while ($row = mysqli_fetch_array($query)) { 
				for ($x=1; $x<=$row['field_31']; $x++) {
		?>	
				<div id="page1-div" style="position:relative">
					<img width="883" height="350" src="images/kanban-adm-sunter1.jpg" alt="background image"/>
					
					<!-- ARRIVAL DATE -->
					<p  style="position:absolute;top:4px;left:45px;white-space:nowrap;font-size:12px;font-family:Arial">ARRIVAL DATE</p>
					<p  style="position:absolute;top:25px;left:33px;white-space:nowrap;font-size:14px;font-family:Arial"><b><?= date("j-M-y", strtotime($row['field_17']))?>&nbsp;<?= date("G:i", strtotime($row['field_18']))?></b></p>
					
					<!-- ROUTE -->
					<p  style="position:absolute;top:50px;left:50px;white-space:nowrap;font-size:22px;font-family:Arial"><b><?= $row['field_3']?></b></p>
					
					<!-- ARRIVAL DATE -->
					<p  style="position:absolute;top:4px;left:185px;white-space:nowrap;font-size:12px;font-family:Arial">CYCLE</p>
					<p  style="position:absolute;top:4px;left:180px;white-space:nowrap;font-size:40px;font-family:Arial"><b><?= $row['field_19']?></b></p>
					<p  style="position:absolute;top:74px;left:210px;white-space:nowrap;font-size:13px;font-family:Arial">/?</p>
					
					<!-- COMPANY -->
					<p  style="position:absolute;top:100px;left:25px;white-space:nowrap;font-size:18px;font-family:Arial"><b>PT. DASA WINDU AGUNG</b></p>
					<p  style="position:absolute;top:125px;left:100px;white-space:nowrap;font-size:18px;font-family:Arial"><b><?= $row['field_6']?></b></p>
					
					<!-- SHOP -->
					<p  style="position:absolute;top:9px;left:310px;white-space:nowrap;font-size:12px;font-family:Arial">SHOP</p>
					<p  style="position:absolute;top:25px;left:283px;white-space:nowrap;font-size:20px;font-family:Arial"><?= $row['field_1']?></p>
					
					<!-- DN NO -->
					<p  style="position:absolute;top:9px;left:480px;white-space:nowrap;font-size:12px;font-family:Arial">DN NO.</p>
					<p  style="position:absolute;top:25px;left:410px;white-space:nowrap;font-size:20px;font-family:Arial"><?= $row['field_10']?></p>
					
					<!-- PART INFORMATION -->
					<p  style="position:absolute;top:76px;left:400px;white-space:nowrap;font-size:12px;font-family:Arial">PART INFORMATION</p>
					
					<!-- PART NAME -->
					<p  style="position:absolute;top:107px;left:300px;white-space:nowrap;font-size:12px;font-family:Arial"><b><?= $row['field_27']?></b></p>
					
					<!-- PART NUMBER -->
					<p  style="position:absolute;top:127px;left:420px;white-space:nowrap;font-size:24px;font-family:Arial"><b><?= $row['field_26']?></b></p>
					
					<!-- JOB NO -->
					<p  style="position:absolute;top:179px;left:450px;white-space:nowrap;font-size:12px;font-family:Arial">JOB NO.</p>
					<p  style="position:absolute;top:200px;left:430px;white-space:nowrap;font-size:20px;font-family:Arial"><?= $row['field_28']?></p>
					
					<!-- QTY/KANBAN -->
					<p  style="position:absolute;top:179px;left:557px;white-space:nowrap;font-size:12px;font-family:Arial">QTY/KBN</p>
					<p  style="position:absolute;top:200px;left:560px;white-space:nowrap;font-size:20px;font-family:Arial"><?= $row['field_30']?></p>
					
					<!-- BARCODE -->
					<p  style="position:absolute;top:250px;left:260px;white-space:nowrap" class="ft13">
						<img width="350" height="22" alt="<?=$row['field_10']?><?=$row['field_28']?>" src="assets/plugins/barcode.php?size=40&text=<?=$row['field_10']?><?=$row['field_28']?>&print=false" />
					</p>
					<p  style="position:absolute;top:280px;left:280px;white-space:nowrap;font-size:12px;font-family:Arial"><?=$row['field_10']?><?=$row['field_28']?></p>
					<p  style="position:absolute;top:280px;left:520px;white-space:nowrap;font-size:12px;font-family:Arial">SEQ:001/1 ???</p>
					
					<!-- ADM - ASSY PLANT -->
					<p  style="position:absolute;top:3px;left:630px;white-space:nowrap;font-size:12px;font-family:Arial">ASTRA DAIHATSU MOTOR - ASSY PLANT</p>
					
					<!-- MIN -->
					<p  style="position:absolute;top:19px;left:640px;white-space:nowrap;font-size:16px;font-family:Arial"><b>MIN</b></p>
					<p  style="position:absolute;top:19px;left:700px;white-space:nowrap;font-size:16px;font-family:Arial">?</p>
					
					<!-- MAX -->
					<p  style="position:absolute;top:19px;left:760px;white-space:nowrap;font-size:16px;font-family:Arial"><b>MAX</b></p>
					<p  style="position:absolute;top:19px;left:820px;white-space:nowrap;font-size:16px;font-family:Arial">?</p>
					
					<!-- PART CAT -->
					<p  style="position:absolute;top:58px;left:657px;white-space:nowrap;font-size:12px;font-family:Arial">PART CAT</p>
					<p  style="position:absolute;top:75px;left:647px;white-space:nowrap;font-size:20px;font-family:Arial"><?= $row['field_2']?></p>
					
					<!-- PACKAGING TYPE -->
					<p  style="position:absolute;top:118px;left:627px;white-space:nowrap;font-size:12px;font-family:Arial">PACKAGING TYPE</p>
					<p  style="position:absolute;top:139px;left:647px;white-space:nowrap;font-size:20px;font-family:Arial">PALLET</p>
					
					<!-- PART TYPE -->
					<p  style="position:absolute;top:183px;left:647px;white-space:nowrap;font-size:12px;font-family:Arial">PART TYPE</p>
					<p  style="position:absolute;top:204px;left:647px;white-space:nowrap;font-size:20px;font-family:Arial">?</p>
					
					<!-- ? -->
					<p  style="position:absolute;top:243px;left:647px;white-space:nowrap;font-size:24px;font-family:Arial"><b>?-???-???-???</b></p>
					
					<!-- LANE NO -->
					<p  style="position:absolute;top:58px;left:777px;white-space:nowrap;font-size:12px;font-family:Arial">Lane No</p>
					<p  style="position:absolute;top:15px;left:767px;white-space:nowrap;font-size:80px;font-family:Arial"><b><?= $row['field_29']?></b></p>
					
					<!-- WH ZONE -->
					<p  style="position:absolute;top:183px;left:777px;white-space:nowrap;font-size:12px;font-family:Arial">WH ZONE</p>
					<p  style="position:absolute;top:204px;left:777px;white-space:nowrap;font-size:20px;font-family:Arial">?</p>
					
					<!-- QRCODE -->
					<?php
						$qrcode_value = $row['field_10'].$row['field_28'];
						$file_name = "images/qrcode/".$row['field_10'].$row['field_28'].".png";
						QRCode::png($qrcode_value, $file_name, "L", 4, 4);						
					?>					
					<p  style="position:absolute;top:133px;left:267px;white-space:nowrap;font-size:12px;font-family:Arial"><img src="<?= $file_name?>" /></p>
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
		//window.print();
	</script>
</html>