<?php require_once 'pages/fnd.template.php'; ?>
<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row page-titles">
			<div class="col-md-12 col-12 align-self-center">
				<h3 class="text-themecolor m-b-0 m-t-0"><i class="mdi mdi-file-pdf"> Upload PDF</h3></i>
				<ol class="breadcrumb m-t-0 pull-right">
					<li class="active pull-right">
						<span style="font-size: 14px" class="font-weight-bold">
							<script type='text/javascript'>
								var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
								var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
								var date = new Date();
								var day = date.getDate();
								var month = date.getMonth();
								var thisDay = date.getDay(),
								thisDay = myDays[thisDay];
								var yy = date.getYear();
								var year = (yy < 1000) ? yy + 1900 : yy;
								document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
							</script>   
						</span> ||
						<span class="font-weight-bold">
							<b id="waktu" class="text-center"></b>
							<script type="text/javascript">
								function startTime() {
									var today=new Date(),
									curr_hour=today.getHours(),
									curr_min=today.getMinutes(),
									curr_sec=today.getSeconds();
									curr_hour=checkTime(curr_hour);
									curr_min=checkTime(curr_min);
									curr_sec=checkTime(curr_sec);
									document.getElementById('waktu').innerHTML=curr_hour+":"+curr_min+":"+curr_sec;
								}
								function checkTime(i) {
									if (i<10) {
										i="0" + i;
									}
									return i;
								}
								setInterval(startTime, 500);
							</script>
						</span>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									<div class="h4 p-0 font-weight-bold">Sunter</div>
									Upload pdf Manifest, Kanban dan Delivery Label
								</div>
							</div>
							<div class="card-body">
								<form enctype="multipart/form-data" action="?p=upload-pdf-sunter" method="post">
									<div class="form-group">
										<label for="sunter-manifest">UPLOAD MANIFEST</label>
										<input type="file" class="form-control" name="sunter-manifest" id="sunter-manifest" accept=".pdf" required>
									</div>
									<div class="form-group">
										<label for="sunter-kanban">UPLOAD KANBAN</label>
										<input type="file" class="form-control" name="sunter-kanban" id="sunter-kanban" accept=".pdf" reqired>
									</div>
									<div class="form-group">
										<label for="sunter-label">UPLOAD DELIVERY LABEL</label>
										<input type="file" class="form-control" name="sunter-label" id="sunter-label" accept=".pdf"  required>
									</div>
									<div class="form-group">
										<button class="btn btn-success waves-effect waves-dark" onClick="alert('Upload PDF Successfully')"  type="submit"><i class="mdi mdi-file-pdf"> UPLOAD PDF</button></a></i>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									<div class="h4 p-0 font-weight-bold">Karawang</div>
									Upload pdf Manifest, Kanban dan Delivery Label
								</div>
							</div>
							<div class="card-body">
								<form enctype="multipart/form-data" action="?p=upload-pdf-karawang" method="post">
									<div class="form-group">
										<label for="karawang-manifest">UPLOAD MANIFEST</label>
										<input type="file" class="form-control" name="karawang-manifest" id="karawang-manifest" accept=".pdf" required>
									</div>
									<div class="form-group">
										<label for="karawang-kanban">UPLOAD KANBAN</label>
										<input type="file" class="form-control" name="karawang-kanban" id="karawang-kanban" accept=".pdf" required>
									</div>
									<div class="form-group">
										<label for="karawang-label">UPLOAD DELIVERY LABEL</label>
										<input type="file" class="form-control" name="karawang-label" id="karawang-label" accept=".pdf" required>
									</div>
									<div class="form-group">
										<button class="btn btn-success waves-effect waves-dark" onClick="alert('Upload PDF Successfully')"  type="submit"><i class="mdi mdi-file-pdf"> UPLOAD PDF</button></a></i>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</li>
</ol>
<?php require_once 'pages/fnd.scripts.php'; ?>