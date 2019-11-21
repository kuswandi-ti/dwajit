<?php require_once 'pages/fnd.template.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-12 col-12 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0"><i class="mdi mdi-car"> Upload File XLS Daihatsu</h3></i>
                <ol class="breadcrumb m-t-0">
                    <li class="breadcrumb-item active">
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
							<div class="card-body">
								<div class="h4 p-0 font-weight-bold">Silahkan Upload File XLS</div>
								<form class="form-material m-t-40" action="?p=process-upload-csv&cust=ADM" method="post" enctype="multipart/form-data" name="import" id="import">									
									<div class="form-group">
										<div class="form-group">
											<div class="demo-radio-button">
												<input name="cust_source" type="radio" id="file_adm_karawang" value="karawang" checked />
												<label for="file_adm_karawang">KARAWANG</label>
												<input name="cust_source" type="radio" id="file_adm_sunter" value="sunter" />
												<label for="file_adm_sunter">SUNTER</label>
											</div>
											<input type="file" class="form-control" name="file" id="file" accept=".xls"required>
										</div>
										<div class="form-group">
											<button class="btn btn-success btn-sm waves-effect waves-dark" input type="submit" id="import" method="post" name="import"><i class="mdi mdi-note-plus-outline"> UPLOAD FILE</button></a></i>
										</div>
									</form>
								</form>
							</div>
                        </div>
                    </div>					
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="h3 p-0 font-weight-bold">Data Yang Sudah Terupload</div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="dataTable" class="table table-bordered table-striped table-hover table-sm">
                                            <thead>
                                                <tr>
                                                    <th class="align-middle text-uppercase">No</th>
													<th class="align-middle text-uppercase">Order No</th>
													<th class="align-middle text-uppercase">PO Number</th>
                                                    <th class="align-middle text-uppercase">Nama File</th>
                                                    <th class="align-middle text-uppercase">Tanggal upload</th>
                                                    <th class="align-middle text-uppercase">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
													$no = 1;
													$sql = "SELECT field_10 AS order_no,field_11 AS po_number,nama_file_source,tanggal_upload,status
															FROM time_kanban
															WHERE customer = 'ADM'
															GROUP BY field_10,field_11,nama_file_source,tanggal_upload,status";
													$query = mysqli_query($fndMysql, $sql);
													while ($row = mysqli_fetch_array($query)) {
														?>
														<tr>
															<td class="align-middle"><?php echo $no++; ?></td>
															<td class="align-middle"><?= $row['order_no']?></td>
															<td class="align-middle"><?= $row['po_number']?></td>
															<td class="align-middle"><?= $row['nama_file_source']?></td>
															<td class="align-middle"><?= $row['tanggal_upload']?></td>
															<td class="align-middle"><?= $row['status']?></td>
														</td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
                        <!--<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <div class="h3 p-0 font-weight-bold">Tabel Manifest</div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="dataTable" class="table table-bordered table-striped table-hover table-sm">
                                                <thead>
                                                    <tr>
                                                        <th class="align-middle text-uppercase">NO</th>
                                                        <th class="align-middle text-uppercase">MANIFEST NO</th>
                                                        <th class="align-middle text-uppercase">ORDER NO</th>
                                                        <th class="align-middle text-uppercase">DOCK CODE</th>
                                                        <th class="align-middle text-uppercase">PROGRESS LANE 1</th>
                                                        <th class="align-middle text-uppercase">PRINT DATA</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $no = 1;
                                                    $sql = "SELECT field_0,field_7,field_6,field_26 
													        FROM time_kanban 
															WHERE field_82 LIKE 'KARAWANG%' 
																OR field_82 LIKE 'SUNTER%'";
                                                    $query = mysqli_query($fndMysql, $sql);
                                                    while ($row = mysqli_fetch_array($query)) {
                                                        ?>
                                                        <tr>
                                                            <td class="align-middle"><?php echo $no++; ?></td>
                                                            <td class="align-middle"><?= $row['field_0']?></td>
                                                            <td class="align-middle"><?= $row['field_7']?></td>
                                                            <td class="align-middle"><?= $row['field_6']?></td>
                                                            <td class="align-middle"><?= $row['field_26']?></td>
                                                            <td class="align-middle text-middle">
                                                                <a href='#' type="button" class="btn btn-warning btn-sm waves-effect waves-dark" data-toggle="modal" data-target="#exampleModal<?php echo $row['id']; ?>"><i class="mdi mdi-eye"> DETAIL</i></a>
                                                                <a href='?p=process-cetak-data-manifest'  target="_blank" class="btn btn-primary btn-sm waves-effect waves-dark"><i class="mdi mdi-printer"> PRINT MANIFEST</i></a>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <div class="form-group">
                                            <a href='?p=process-cetak-data-sunter'  target="_blank" class="btn btn-danger btn-sm waves-effect waves-dark"><i class="mdi mdi-printer"> PRINT KANBAN SUNTER</button></a></i>
                                            <a href='?p=process-cetak-data-karawang'  target="_blank" class="btn btn-danger btn-sm waves-effect waves-dark"><i class="mdi mdi-printer"> PRINT KANBAN KARAWANG</button></a></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="table-responsive">
                                    <table id="dataTable" class="table table-bordered table-striped table-hover table-sm">
                                        <thead>
                                            <tr>
                                                <th class="align-middle text-uppercase">NO</th>
                                                <th class="align-middle text-uppercase">MANIFEST NO</th>
                                                <th class="align-middle text-uppercase">PART NO</th>
                                                <th class="align-middle text-uppercase">PART NAME</th>
                                                <th class="align-middle text-uppercase">JUMLAH KANBAN</th>
                                                <th class="align-middle text-uppercase">PCS / KANBAN</th>
                                                <th class="align-middle text-uppercase">TOTAL PCS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            $sql = "SELECT * FROM time_kanban";
                                            $query = mysqli_query($fndMysql, $sql);
                                            while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                <tr>
                                                    <td class="align-middle"><?php echo $no++; ?></td>
                                                    <td class="align-middle"><?= $row['manifest_no']?></td>
                                                    <td class="align-middle"><?= $row['part_no']?></td>
                                                    <td class="align-middle"><?= $row['part_name']?></td>
                                                    <td class="align-middle"><?= $row['jumlah_kanban']?></td>
                                                    <td class="align-middle"><?= $row['pcs_kanban']?></td>
                                                    <td class="align-middle"><?= $row['total_qty']?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</form>
</div>
<?php require_once 'pages/fnd.scripts.php'; ?>