<?php require_once 'pages/fnd.template.php'; ?>

<?php 
	$id = $_GET['id'];
?>

<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row page-titles">
			<div class="col-md-12 col-12 align-self-center">
				<h3 class="text-themecolor m-b-0 m-t-0"><i class="mdi mdi-settings"> Edit Kanban Karawang (TMMIN)</h3></i>
				<ol class="breadcrumb m-t-0 pull-right">
					<li class="active pull-right" ><i class="mdi mdi-calendar-clock"></i>
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
					<div class="col-lg-6">
						<div class="card">
							<div class="card-body">
								<?php
									$sql = "SELECT 
												* 
											FROM 
												qtrx_customer_document_tmmin 
											WHERE 
												id = '$id'";
									$query = mysqli_query($fndMysql, $sql);
									if ($query) {
										while ($row = mysqli_fetch_array($query)) { ?>
											<form action="?p=process-edit-karawang" method="post">
												<input type="hidden" value="<?= $id ?>" name="id" id="id">
												<div class="form-group">
													<label class="font-weight-bold text-uppercase" for="customer_pn">COSTUMER PN</label>
													<input type="text" value="<?= $row['field_10'] ?>" class="form-control" placeholder="Isi disini" name="part_no"  id="part_no">
												</div>
												<div class="form-group">
													<label class="font-weight-bold text-uppercase" for="part_name">NAME</label>
													<input type="text" value="<?= $row['field_22'] ?>" class="form-control" placeholder="Isi disini" name="part_name"  id="part_name">
												</div>
												<div class="form-group">
													<label class="font-weight-bold text-uppercase" for="total_qty">TOTAL QTY</label>
													<input type="text"  value="<?= $row['field_16'] ?>" class="form-control" placeholder="Isi disini" name="total_qty"  id="total_qty">
												</div>
												<div class="form-group">
													<label class="font-weight-bold text-uppercase" for="job_no">JOB NO</label>
													<input type="text"  value="<?= $row['field_14'] ?>" class="form-control" placeholder="Isi disini" name="job_no"  id="job_no">
												</div>
												<div class="form-group">
													<label class="font-weight-bold text-uppercase" for="arrival_time">ARRIVAL TIME</label>
													<input type="text" value="<?= $row['field_13'] ?>" class="form-control" placeholder="Isi disini" name="arrival_time"  id="arrival_time">
												</div>
												<div class="form-group">
													<label class="font-weight-bold text-uppercase" for="part_address">PART ADDRESS</label>
													<input type="text" value="<?= $row['field_11'] ?>" class="form-control" placeholder="Isi disini" name="part_address"  id="part_address">
												</div>
												<div class="form-group">
													<label class="font-weight-bold text-uppercase" for="order_no">ORDER NO</label>
													<input type="text"  value="<?= $row['field_7'] ?>" class="form-control" placeholder="Isi disini" name="order_no"  id="order_no">
												</div>
												<div class="form-group">
													<button class="btn btn-success waves-effect waves-dark" type="submit" name="edit"><i class="mdi mdi-checkbox-marked-circle-outline"> SAVE CHANGE</button></a></i>
													<button class="btn btn-danger waves-effect waves-dark" type="button" onclick="location.href='?p=karawang'"><i class="mdi mdi-refresh"> CANCEL</button></a></i>
												</div>
											</form>
										<?php
										}
									}
								?>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</li>
	</ol>
</div>
<?php require_once 'pages/fnd.scripts.php'; ?>