<html>
	<?php
		include 'config/fnd.connection.php'; 
	?>
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		
		<style type="text/css">
			<!--
			p {margin: 0; padding: 0;}	.ft10{font-size:13px;font-family:Arial;color:#000000;}
			.ft11{font-size:14px;font-family:Arial;color:#000000;}
			.ft11a{font-size:12px;font-family:Arial;color:#000000;}
			.ft12{font-size:31px;font-family:Arial;color:#000000;}
			.ft13{font-size:16px;font-family:Arial;color:#000000;}
			.ft14{font-size:28px;font-family:Arial;color:#000000;}
			.ft14a{font-size:30px;font-family:Arial;color:#000000;}
			.ft15{font-size:10px;font-family:Arial;color:#000000;}
			.ft16{font-size:13px;font-family:Arial;color:#000000;}
			.ft17{font-size:25px;font-family:Arial;color:#000000;}
			.ft18{font-size:43px;font-family:Arial;color:#000000;}
			.ft19{font-size:11px;font-family:Arial;color:#000000;}
			.ft110{font-size:34px;font-family:Arial;color:#000000;}
			-->
		</style>
	</head>
	
	<body>
		<?php
			$sysid = $_GET['sysid'];
			$sql = "SELECT * FROM time_kanban";
			$query = mysqli_query($fndMysql, $sql);
			while($row =mysqli_fetch_array($query)){
				?> 
				<div id="page1-div" style="position:relative;width:892px;height:1262px;">
					<img width="892" height="1262" src="images/karawang-satuan.png" alt="background image"/>
					<p style="position:absolute;top:380px;left:25px;white-space:nowrap" class="ft10">
						<i>Printed at Supplier on : 
							<?php
							date_default_timezone_set('Asia/Jakarta');
							echo date('d/m/Y H:i:s A');
							?>
						</i>
					</p>
					<p style="position:absolute;top:41px;left:414px;white-space:nowrap" class="ft11"><b>PT. TOYOTA MOTOR</b></p>
					<p style="position:absolute;top:59px;left:375px;white-space:nowrap" class="ft11"><b>MANUFACTURING INDONESIA</b></p>
					<p style="position:absolute;top:92px;left:383px;white-space:nowrap" class="ft12"><b><?= $row['plant']?></b></p>
					<p style="position:absolute;top:228px;left:106px;white-space:nowrap" class="ft13"><b>SUPPLIER DATA</b></p>
					<p style="position:absolute;top:291px;left:696px;white-space:nowrap" class="ft13"><b>PART ADDRESS</b></p>
					<p style="position:absolute;top:327px;left:694px;white-space:nowrap" class="ft14"><b><?= $row['part_address']?></b></p>
					<p style="position:absolute;top:316px;left:360px;white-space:nowrap" class="ft15"><b>PCS/KANBAN</b></p>
					<p style="position:absolute;top:338px;left:383px;white-space:nowrap" class="ft14"><b><?= $row['pcs_kanban']?></b></p>
					<p style="position:absolute;top:314px;left:511px;white-space:nowrap" class="ft16"><b>ORDER NO</b></p>
					<p style="position:absolute;top:340px;left:490px;white-space:nowrap" class="ft17"><b><?= $row['order_no']?></b></p>
					<p style="position:absolute;top:33px;left:744px;white-space:nowrap" class="ft13"><b>DOCK CODE</b></p>
					<p style="position:absolute;top:58px;left:774px;white-space:nowrap" class="ft18"><b><?= $row['dock_code']?></b></p>
					<p style="position:absolute;top:119px;left:729px;white-space:nowrap" class="ft19"><b>PROGRESS LANE NO</b></p>
					<p style="position:absolute;top:205px;left:733px;white-space:nowrap" class="ft16"><b>CONVEYANCE NO</b></p>
					<p style="position:absolute;top:228px;left:446px;white-space:nowrap" class="ft13"><b>UNIQUE NO</b></p>
					<p style="position:absolute;top:253px;left:447px;white-space:nowrap" class="ft18"><b><?= $row['unique_no']?></b></p>
					<p style="position:absolute;top:141px;left:383px;white-space:nowrap" class="ft12"><b><?= $row['part_no']?></b></p>
					<p style="position:absolute;top:188px;left:383px;white-space:nowrap" class="ft11a"><b><?= $row['part_name']?></b></p>
					<p style="position:absolute;top:141px;left:114px;white-space:nowrap" class="ft13"><b>ARRIVAL TIME</b></p>
					<p style="position:absolute;top:177px;left:165px;white-space:nowrap" class="ft17"><b>2019-23:47</b></p>
					<p style="position:absolute;top:290px;left:160px;white-space:nowrap" class="ft14a"><b><?= $row['supplier_data']?></b></p>
					<p style="position:absolute;top:61px;left:100px;white-space:nowrap" class="ft11"><b><?= $row['supplier_name']?></b></p>
					<p style="position:absolute;top:150px;left:730px;white-space:nowrap" class="ft12"><b><?= $row['progress_lane1']?></b></p>
					<p style="position:absolute;top:150px;left:835px;white-space:nowrap" class="ft12"><b><?= $row['progress_lane2']?></b></p>
					<p style="position:absolute;top:150px;left:820px;white-space:nowrap" class="ft12"><b>-</b></p>
					<p style="position:absolute;top:228px;left:774px;white-space:nowrap" class="ft18"><b><?= $row['conveyance_no']?></b></p>
					<p style="position:absolute;top:90px;left:122px;white-space:nowrap" class="ft110"><b><?= $row['supplier_code1']?></b></p>
					<p style="position:absolute;top:90px;left:230px;white-space:nowrap" class="ft110"><b><?= $row['supplier_code2']?></b></p>
					<p style="position:absolute;top:90px;left:210px;white-space:nowrap" class="ft110"><b>-</b></p>
					<p style="position:absolute;top:33px;left:133px;white-space:nowrap" class="ft13"><b>SUPPLIER</b></p>
					<p style="position:absolute;top:172px;left:59px;white-space:nowrap" class="ft110"><b>01/04/</b></p>
				</div>
				<?php 
			} 
		?>
	</body>
	
	<script>
		window.print();
	</script>
</html>
