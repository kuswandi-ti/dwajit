<html>
<?php
include 'config/fnd.connection.php'; 
?>
<head>
	<title></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<br/>
	<style type="text/css">
		<!--
		p {margin: 0; padding: 0;}	.ft10{font-size:13px;font-family:Times;color:#000000;}
		.ft11{font-size:10px;font-family:Times;color:#000000;}
		.ft12{font-size:16px;font-family:Times;color:#000000;}
		.ft13{font-size:22px;font-family:Times;color:#000000;}
		.ft14{font-size:13px;font-family:Times;color:#000000;}
		.ft15{font-size:17px;font-family:Times;color:#000000;}
		.ft16{font-size:19px;font-family:Times;color:#000000;}
		.ft17{font-size:25px;font-family:Times;color:#000000;}
		.ft18{font-size:16px;font-family:Times;color:#000000;}
		.ft19{font-size:11px;font-family:Times;color:#000000;}
		.ft110{font-size:10px;font-family:Times;color:#000000;}
		.ft111{font-size:10px;line-height:13px;font-family:Times;color:#000000;}
		.ft112{font-size:13px;line-height:17px;font-family:Times;color:#000000;}
		.ft113{font-size:10px;line-height:13px;font-family:Times;color:#000000;}
		-->
	</style>
</head>
<body>
	<?php  
	$sql = "SELECT * FROM time_kanban";
	$query = mysqli_query($fndMysql, $sql);
	while ($row = mysqli_fetch_array($query)) {
		?>
		<div id="page1-div" style="position:relative;width:918px;height:1188px;">
			<img width="918" height="1188" src="images/manifest_kanban.png" alt="background image"/>
			<p style="position:absolute;top:573px;left:482px;white-space:nowrap" class="ft10"></p>
			<p style="position:absolute;top:524px;left:630px;white-space:nowrap" class="ft10">1</p>
			<p style="position:absolute;top:524px;left:475px;white-space:nowrap" class="ft10">EE122</p>
			<p style="position:absolute;top:524px;left:75px;white-space:nowrap" class="ft11">1</p>
			<p style="position:absolute;top:524px;left:102px;white-space:nowrap" class="ft11">77277-0K110-00</p>
			<p style="position:absolute;top:524px;left:428px;white-space:nowrap" class="ft10">7161</p>
			<p style="position:absolute;top:524px;left:576px;white-space:nowrap" class="ft10">10</p>
			<p style="position:absolute;top:524px;left:220px;white-space:nowrap" class="ft111">PROTECTOR FUEL TANK FILLER PIPE</p>
			<p style="position:absolute;top:524px;left:670px;white-space:nowrap" class="ft10">10</p>
			<p style="position:absolute;top:565px;left:630px;white-space:nowrap" class="ft10">1</p>
			<p style="position:absolute;top:565px;left:475px;white-space:nowrap" class="ft10">EE122</p>
			<p style="position:absolute;top:567px;left:75px;white-space:nowrap" class="ft11">2</p>
			<p style="position:absolute;top:567px;left:102px;white-space:nowrap" class="ft11">77277-0K110-00</p>
			<p style="position:absolute;top:565px;left:428px;white-space:nowrap" class="ft10">7161</p>
			<p style="position:absolute;top:565px;left:576px;white-space:nowrap" class="ft10">10</p>
			<p style="position:absolute;top:565px;left:220px;white-space:nowrap" class="ft111">PROTECTOR FUEL TANK FILLER PIPE</p>
			<p style="position:absolute;top:565px;left:670px;white-space:nowrap" class="ft10">10</p>
			<p style="position:absolute;top:608px;left:630px;white-space:nowrap" class="ft10">1</p>
			<p style="position:absolute;top:608px;left:475px;white-space:nowrap" class="ft112">EE122</p>
			<p style="position:absolute;top:610px;left:75px;white-space:nowrap" class="ft11">3</p>
			<p style="position:absolute;top:610px;left:102px;white-space:nowrap" class="ft11">53341-0K130-00</p>
			<p style="position:absolute;top:608px;left:428px;white-space:nowrap" class="ft10">7359</p>
			<p style="position:absolute;top:608px;left:576px;white-space:nowrap" class="ft10">20</p>
			<p style="position:absolute;top:610px;left:220px;white-space:nowrap" class="ft11">INSULATOR HOOD </p>
			<p style="position:absolute;top:608px;left:670px;white-space:nowrap" class="ft10">20</p>
			<p style="position:absolute;top:281px;left:757px;white-space:nowrap" class="ft12"><b>1 of 1</b></p>
			<p style="position:absolute;top:278px;left:561px;white-space:nowrap" class="ft13"><b>2019051401</b></p>
			<p style="position:absolute;top:278px;left:437px;white-space:nowrap" class="ft13"><b>5021-1</b></p>
			<p style="position:absolute;top:283px;left:167px;white-space:nowrap" class="ft14"><b>DASA WINDU AGUNG</b></p>
			<p style="position:absolute;top:367px;left:62px;white-space:nowrap" class="ft15"><b>RS20 - 03</b></p>
			<p style="position:absolute;top:370px;left:162px;white-space:nowrap" class="ft10">13/05/2019</p>
			<p style="position:absolute;top:387px;left:181px;white-space:nowrap" class="ft10">12:44</p>
			<p style="position:absolute;top:370px;left:258px;white-space:nowrap" class="ft10">13/05/2019</p>
			<p style="position:absolute;top:387px;left:277px;white-space:nowrap" class="ft10">16:12</p>
			<p style="position:absolute;top:370px;left:731px;white-space:nowrap" class="ft10">13/05/2019</p>
			<p style="position:absolute;top:387px;left:750px;white-space:nowrap" class="ft10">16:12</p>
			<p style="position:absolute;top:370px;left:823px;white-space:nowrap" class="ft10">14/05/2019</p>
			<p style="position:absolute;top:387px;left:842px;white-space:nowrap" class="ft10">08:18</p>
			<p style="position:absolute;top:144px;left:635px;white-space:nowrap" class="ft16">13/05</p>
			<p style="position:absolute;top:143px;left:855px;white-space:nowrap" class="ft16">1N</p>
			<p style="position:absolute;top:143px;left:757px;white-space:nowrap" class="ft16">16:12</p>
			<p style="position:absolute;top:198px;left:679px;white-space:nowrap" class="ft17"><b>MS1N </b></p>
			<p style="position:absolute;top:198px;left:842px;white-space:nowrap" class="ft17"><b>02</b></p>
			<p style="position:absolute;top:216px;left:97px;white-space:nowrap" class="ft12"><b>1191139574</b></p>
			<p style="position:absolute;top:281px;left:861px;white-space:nowrap" class="ft12"><b>3</b></p>
			<p style="position:absolute;top:145px;left:689px;white-space:nowrap" class="ft18">/2019</p>
			<p style="position:absolute;top:186px;left:508px;white-space:nowrap" class="ft10">1191139574</p>
			<p style="position:absolute;top:211px;left:419px;white-space:nowrap" class="ft19"><b>40</b></p>
			<p style="position:absolute;top:1044px;left:61px;white-space:nowrap" class="ft113"><i>Printed at<br/>Supplier on:<br/><?php
			date_default_timezone_set('Asia/Jakarta');
			echo date('d/m/Y H:i:s A');
			?>
		</i>
	</p>
</div>
<?php } ?>
</body>
<script>
	window.print();
</script>
</html>
