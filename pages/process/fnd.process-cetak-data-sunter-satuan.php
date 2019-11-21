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
					margin: 2mm 2mm 2mm 2mm;
				}
			}
			
			<!--
			p {margin: 0; padding: 0;}	.ft10{font-size:11px;font-family:Arial;color:#000000;}
			.ft11{font-size:13px;font-family:Arial;color:#000000;}
			.ft12{font-size:26px;font-family:Arial;color:#000000;}
			.ft13{font-size:10px;font-family:Arial;color:#000000;}
			.ft14{font-size:23px;font-family:Arial;color:#000000;}
			.ft15{font-size:17px;font-family:Arial;color:#000000;}
			.ft16{font-size:32px;font-family:Arial;color:#000000;}
			.ft17{font-size:7px;font-family:Arial;color:#000000;}
			.ft18{font-size:22px;font-family:Arial;color:#000000;}
			.ft19{font-size:14px;font-family:Arial;color:#000000;}
			.ft110{font-size:28px;font-family:Arial;color:#000000;}
			.ft111{font-size:25px;font-family:Arial;color:#000000;}
			.ft112{font-size:16px;font-family:Arial;color:#000000;}
			.ft113{font-size:14px;font-family:Arial;color:#000000;}
			-->
		</style>
	</head>
	
	<body>
		<div id="page1-div" style="position:relative;width:892px;height:1262px;">
			<img width="892" height="1262" src="images/sunter-satuan.png" alt="background image"/>
			<p style="position:absolute;top:387px;left:25px;white-space:nowrap" class="ft10">
				<i>Printed at Supplier on: 
					<?php
						date_default_timezone_set('Asia/Jakarta');
						echo date('d/m/Y H:i:s A');
					?>
				</i>
			</p>
			<p style="position:absolute;top:33px;left:348px;white-space:nowrap" class="ft11"><b>PT. TOYOTA MOTOR MANUFACTURING</b></p>
			<p style="position:absolute;top:51px;left:451px;white-space:nowrap" class="ft11"><b>INDONESIA</b></p>
			<p style="position:absolute;top:74px;left:422px;white-space:nowrap" class="ft12"><b>SUNTER 1</b></p>
			<p style="position:absolute;top:261px;left:108px;white-space:nowrap" class="ft11"><b>SUPPLIER DATA</b></p>
			<p style="position:absolute;top:261px;left:353px;white-space:nowrap" class="ft11"><b>SHUTTERLOT CODE</b></p>
			<p style="position:absolute;top:331px;left:344px;white-space:nowrap" class="ft13"><b>PCS/KANBAN</b></p>
			<p style="position:absolute;top:350px;left:368px;white-space:nowrap" class="ft12"><b>20</b></p>
			<p style="position:absolute;top:330px;left:510px;white-space:nowrap" class="ft11"><b>ORDER NO</b></p>
			<p style="position:absolute;top:352px;left:533px;white-space:nowrap" class="ft14"><b>0514</b></p>
			<p style="position:absolute;top:32px;left:735px;white-space:nowrap" class="ft11"><b>IMPORTER CODE</b></p>
			<p style="position:absolute;top:117px;left:396px;white-space:nowrap" class="ft14"><b>53341-0K130-00</b></p>
			<p style="position:absolute;top:156px;left:422px;white-space:nowrap" class="ft11"><b>INSULATOR HOOD</b></p>
			<p style="position:absolute;top:51px;left:90px;white-space:nowrap" class="ft11"><b>DASA WINDU AGUNG</b></p>
			<p style="position:absolute;top:74px;left:124px;white-space:nowrap" class="ft12"><b>5021-1</b></p>
			<p style="position:absolute;top:32px;left:131px;white-space:nowrap" class="ft11"><b>SUPPLIER</b></p>
			<p style="position:absolute;top:356px;left:474px;white-space:nowrap" class="ft15"><b>2019</b></p>
			<p style="position:absolute;top:356px;left:604px;white-space:nowrap" class="ft15"><b>01</b></p>
			<p style="position:absolute;top:97px;left:739px;white-space:nowrap" class="ft11"><b>IMPORTER INFO</b></p>
			<p style="position:absolute;top:214px;left:368px;white-space:nowrap" class="ft16"><b>7359</b></p>
			<p style="position:absolute;top:193px;left:363px;white-space:nowrap" class="ft11"><b>UNIQUE NO</b></p>
			<p style="position:absolute;top:214px;left:48px;white-space:nowrap" class="ft16"><b>1N</b></p>
			<p style="position:absolute;top:195px;left:34px;white-space:nowrap" class="ft13"><b>DOCK CODE</b></p>
			<p style="position:absolute;top:195px;left:139px;white-space:nowrap" class="ft13"><b>P-LANE NO</b></p>
			<p style="position:absolute;top:214px;left:153px;white-space:nowrap" class="ft16"><b>02</b></p>
			<p style="position:absolute;top:197px;left:230px;white-space:nowrap" class="ft17"><b>CONVEYANCE NO</b></p>
			<p style="position:absolute;top:263px;left:580px;white-space:nowrap" class="ft13"><b>PACK DATE</b></p>
			<p style="position:absolute;top:193px;left:543px;white-space:nowrap" class="ft11"><b>BOX NO</b></p>
			<p style="position:absolute;top:287px;left:367px;white-space:nowrap" class="ft18"><b>-DMXXXX</b></p>
			<p style="position:absolute;top:292px;left:529px;white-space:nowrap" class="ft19"><b>XXX</b></p>
			<p style="position:absolute;top:311px;left:747px;white-space:nowrap" class="ft11"><b>OTHERS INFO</b></p>
			<p style="position:absolute;top:240px;left:754px;white-space:nowrap" class="ft11"><b>RENBAN NO</b></p>
			<p style="position:absolute;top:147px;left:66px;white-space:nowrap" class="ft110"><b>13/05/</b></p>
			<p style="position:absolute;top:149px;left:156px;white-space:nowrap" class="ft111"><b>2019-16:12</b></p>
			<p style="position:absolute;top:120px;left:104px;white-space:nowrap" class="ft112"><b>ARRIVAL TIME</b></p>
			<p style="position:absolute;top:261px;left:524px;white-space:nowrap" class="ft11"><b>CASE</b></p>
		</div>
	</body>
	
	<script>
		window.print();
	</script>
</html>
