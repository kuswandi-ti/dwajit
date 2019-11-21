<?php require_once 'pages/fnd.template.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-12 col-12 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0"><i class="mdi mdi-city"> Daftar Kanban Sunter (TMMIN)</h3></i>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">								
                                <ul class="nav nav-tabs customtab2">
                                    <li class="nav-item"> 
                                        <a class="nav-link active" data-toggle="tab" href="#fnd-gedung-a">
                                            <span class="hidden-sm-up"></span> 
                                            <span class="hidden-xs-down">Gedung A</span>
                                        </a> 
                                    </li>
                                    <li class="nav-item"> 
                                        <a class="nav-link" data-toggle="tab" href="#fnd-gedung-b">
                                            <span class="hidden-sm-up"></span>
                                            <span class="hidden-xs-down">Gedung B</span>
                                        </a> 
                                    </li>
                                    <li class="nav-item"> 
                                        <a class="nav-link" data-toggle="tab" href="#fnd-gedung-c">
                                            <span class="hidden-sm-up"></span>
                                            <span class="hidden-xs-down">Gedung C</span>
                                        </a> 
                                    </li>
                                    <li class="nav-item"> 
                                        <a class="nav-link" data-toggle="tab" href="#fnd-gedung-p">
                                            <span class="hidden-sm-up"></span>
                                            <span class="hidden-xs-down">Gedung P</span>
                                        </a> 
                                    </li>
                                    <li class="nav-item"> 
                                        <a class="nav-link" data-toggle="tab" href="#fnd-gedung-trading">
                                            <span class="hidden-sm-up"></span>
                                            <span class="hidden-xs-down">Gedung Trading</span>
                                        </a> 
                                    </li>
                                </ul>								
                                <div class="tab-content">
                                    <div class="tab-pane active" id="fnd-gedung-a">
                                        <div class="table-responsive">
                                            <table id="dataTable" class="table table-bordered table-striped table-hover table-sm">
                                                <thead>
                                                    <tr>														
														<th class="align-middle text-uppercase text-center">
															<input type="checkbox" class="filled-in chk-col-red" id="checkall" />
															<label for="checkall">&nbsp;</label>
														</th>
                                                        <th class="align-middle text-uppercase text-center">No.</th>
                                                        <th class="align-middle text-uppercase text-center">Customer PN</th>
                                                        <th class="align-middle text-uppercase">Name</th>
                                                        <th class="align-middle text-uppercase text-right">Jml Kanban</th>
                                                        <th class="align-middle text-uppercase text-center">Unique No</th>
                                                        <th class="align-middle text-uppercase text-right">Arrival Time</th>
                                                        <th class="align-middle text-uppercase text-center">Shutterlot Code</th>
                                                        <th class="align-middle text-uppercase text-center">Box No</th>
                                                        <th class="align-middle text-uppercase text-center">Order No</th>
                                                        <th class="align-middle text-uppercase text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql = "SELECT 
																* 
													        FROM 
																qtrx_customer_document_tmmin
															WHERE 
																prd_ged = 'A' 
																AND plant = 'SUNTER'
																AND printed = 0
																AND field_17 > 0";
                                                    $query = mysqli_query($fndMysql, $sql);
													$i = 1;
													if ($query) {
														while ($row = mysqli_fetch_array($query)) {															
															?>
															<tr>
																<td>
																	<input type='checkbox' class="filled-in chk-col-red" name="<?=$row['id']?>" id="<?=$row['id']?>" value="<?=$row['id']?>">
																	<label for="<?=$row['id']?>">&nbsp;</label>
																</td>
																<td class="align-middle text-center"><?= $i ?></td>																
																<td class="align-middle text-center"><?= $row['part_no'] ?></td>
																<td class="align-middle"><?= $row['field_22'] ?></td>
																<td class="align-middle text-right"><?= $row['field_17'] ?></td>
																<td class="align-middle text-center"><?= $row['field_14'] ?></td>
																<td class="align-middle text-right"><?= $row['field_35'] ?></td>
																<td class="align-middle text-center"><?= $row['field_11'] ?></td>
																<td class="align-middle text-center"><?= $row['field_96'] ?></td>
																<td class="align-middle text-center"><?= $row['field_7'] ?></td>
																<td class="align-middle text-center">
																	<a href="?p=edit-sunter&id=<?= $row['id'] ?>" class='btn btn-primary btn-sm waves-effect waves-dark'><i class='mdi mdi-settings'> Edit</i></a>
																	<a href="?p=process-hapus-sunter&id=<?= $row['id'] ?>" class='btn btn-danger btn-sm waves-effect waves-dark'><i class='mdi mdi-delete'> Delete</i></a>
																	<a href="?p=process-cetak-data-sunter&id=<?= $row['id'] ?>" class='btn btn-success btn-sm waves-effect waves-dark' target='_blank'><i class='mdi mdi-printer'> Print</a></i>
																</td>
															</tr>
														<?php $i++; } 
													} ?>
                                                </tbody>
                                            </table>
                                            <div class="form-group">
                                                <a href="?p=tambah-sunter" class="btn btn-success waves-effect waves-dark"><i class="mdi mdi-plus-circle-outline"> ADD</button></a></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="fnd-gedung-b">
                                        <div class="table-responsive">
                                            <table id="dataTable" class="table table-bordered table-striped table-hover table-sm">
                                                <thead>
                                                    <tr>
                                                        <th class="align-middle text-uppercase text-center">No.</th>
                                                        <th class="align-middle text-uppercase text-center">Customer PN</th>
                                                        <th class="align-middle text-uppercase">Name</th>
                                                        <th class="align-middle text-uppercase text-right">Jml Kanban</th>
                                                        <th class="align-middle text-uppercase text-center">Unique No</th>
                                                        <th class="align-middle text-uppercase text-right">Arrival Time</th>
                                                        <th class="align-middle text-uppercase text-center">Shutterlot Code</th>
                                                        <th class="align-middle text-uppercase text-center">Box No</th>
                                                        <th class="align-middle text-uppercase text-center">Order No</th>
                                                        <th class="align-middle text-uppercase text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql = "SELECT 
																* 
													        FROM 
																qtrx_customer_document_tmmin
															WHERE 
																prd_ged = 'B' 
																AND plant = 'SUNTER'
																AND printed = 0
																AND field_17 > 0";
                                                    $query = mysqli_query($fndMysql, $sql);
													$i = 1;
													if ($query) {
														while ($row = mysqli_fetch_array($query)) {															
															?>
															<tr>
																<td class="align-middle text-center"><?= $i ?></td>
																<td class="align-middle text-center"><?= $row['part_no'] ?></td>
																<td class="align-middle"><?= $row['field_22'] ?></td>
																<td class="align-middle text-right"><?= $row['field_17'] ?></td>
																<td class="align-middle text-center"><?= $row['field_14'] ?></td>
																<td class="align-middle text-right"><?= $row['field_35'] ?></td>
																<td class="align-middle text-center"><?= $row['field_11'] ?></td>
																<td class="align-middle text-center"><?= $row['field_96'] ?></td>
																<td class="align-middle text-center"><?= $row['field_7'] ?></td>
																<td class="align-middle text-center">
																	<a href="?p=edit-sunter&id=<?= $row['id'] ?>" class='btn btn-primary btn-sm waves-effect waves-dark'><i class='mdi mdi-settings'> Edit</i></a>
																	<a href="?p=process-hapus-sunter&id=<?= $row['id'] ?>" class='btn btn-danger btn-sm waves-effect waves-dark'><i class='mdi mdi-delete'> Delete</i></a>
																	<a href="?p=process-cetak-data-sunter&id=<?= $row['id'] ?>" class='btn btn-success btn-sm waves-effect waves-dark' target='_blank'><i class='mdi mdi-printer'> Print</a></i>
																</td>
															</tr>
														<?php $i++; } 
													} ?>
                                                </tbody>
                                            </table>
                                            <div class="form-group">
                                                <a href="?p=tambah-sunter" class="btn btn-success waves-effect waves-dark"><i class="mdi mdi-plus-circle-outline"> ADD</button></a></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="fnd-gedung-c">
                                        <div class="table-responsive">
                                            <table id="dataTable" class="table table-bordered table-striped table-hover table-sm">
                                                <thead>
                                                    <tr>
                                                        <th class="align-middle text-uppercase text-center">No.</th>
                                                        <th class="align-middle text-uppercase text-center">Customer PN</th>
                                                        <th class="align-middle text-uppercase">Name</th>
                                                        <th class="align-middle text-uppercase text-right">Jml Kanban</th>
                                                        <th class="align-middle text-uppercase text-center">Unique No</th>
                                                        <th class="align-middle text-uppercase text-right">Arrival Time</th>
                                                        <th class="align-middle text-uppercase text-center">Shutterlot Code</th>
                                                        <th class="align-middle text-uppercase text-center">Box No</th>
                                                        <th class="align-middle text-uppercase text-center">Order No</th>
                                                        <th class="align-middle text-uppercase text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql = "SELECT 
																* 
													        FROM 
																qtrx_customer_document_tmmin
															WHERE 
																prd_ged = 'C' 
																AND plant = 'SUNTER'
																AND printed = 0
																AND field_17 > 0";
                                                    $query = mysqli_query($fndMysql, $sql);
													$i = 1;
													if ($query) {
														while ($row = mysqli_fetch_array($query)) {															
															?>
															<tr>
																<td class="align-middle text-center"><?= $i ?></td>
																<td class="align-middle text-center"><?= $row['part_no'] ?></td>
																<td class="align-middle"><?= $row['field_22'] ?></td>
																<td class="align-middle text-right"><?= $row['field_17'] ?></td>
																<td class="align-middle text-center"><?= $row['field_14'] ?></td>
																<td class="align-middle text-right"><?= $row['field_35'] ?></td>
																<td class="align-middle text-center"><?= $row['field_11'] ?></td>
																<td class="align-middle text-center"><?= $row['field_96'] ?></td>
																<td class="align-middle text-center"><?= $row['field_7'] ?></td>
																<td class="align-middle text-center">
																	<a href="?p=edit-sunter&id=<?= $row['id'] ?>" class='btn btn-primary btn-sm waves-effect waves-dark'><i class='mdi mdi-settings'> Edit</i></a>
																	<a href="?p=process-hapus-sunter&id=<?= $row['id'] ?>" class='btn btn-danger btn-sm waves-effect waves-dark'><i class='mdi mdi-delete'> Delete</i></a>
																	<a href="?p=process-cetak-data-sunter&id=<?= $row['id'] ?>" class='btn btn-success btn-sm waves-effect waves-dark' target='_blank'><i class='mdi mdi-printer'> Print</a></i>
																</td>
															</tr>
														<?php $i++; } 
													} ?>
                                                </tbody>
                                            </table>
                                            <div class="form-group">
                                                <a href="?p=tambah-sunter" class="btn btn-success waves-effect waves-dark"><i class="mdi mdi-plus-circle-outline"> ADD</button></a></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="fnd-gedung-p">
                                        <div class="table-responsive">
                                            <table id="dataTable" class="table table-bordered table-striped table-hover table-sm">
                                                <thead>
                                                    <tr>
                                                        <th class="align-middle text-uppercase text-center">No.</th>
                                                        <th class="align-middle text-uppercase text-center">Customer PN</th>
                                                        <th class="align-middle text-uppercase">Name</th>
                                                        <th class="align-middle text-uppercase text-right">Jml Kanban</th>
                                                        <th class="align-middle text-uppercase text-center">Unique No</th>
                                                        <th class="align-middle text-uppercase text-right">Arrival Time</th>
                                                        <th class="align-middle text-uppercase text-center">Shutterlot Code</th>
                                                        <th class="align-middle text-uppercase text-center">Box No</th>
                                                        <th class="align-middle text-uppercase text-center">Order No</th>
                                                        <th class="align-middle text-uppercase text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql = "SELECT 
																* 
													        FROM 
																qtrx_customer_document_tmmin
															WHERE 
																prd_ged = 'P' 
																AND plant = 'SUNTER'
																AND printed = 0
																AND field_17 > 0";
                                                    $query = mysqli_query($fndMysql, $sql);
													$i = 1;
													if ($query) {
														while ($row = mysqli_fetch_array($query)) {															
															?>
															<tr>
																<td class="align-middle text-center"><?= $i ?></td>
																<td class="align-middle text-center"><?= $row['part_no'] ?></td>
																<td class="align-middle"><?= $row['field_22'] ?></td>
																<td class="align-middle text-right"><?= $row['field_17'] ?></td>
																<td class="align-middle text-center"><?= $row['field_14'] ?></td>
																<td class="align-middle text-right"><?= $row['field_35'] ?></td>
																<td class="align-middle text-center"><?= $row['field_11'] ?></td>
																<td class="align-middle text-center"><?= $row['field_96'] ?></td>
																<td class="align-middle text-center"><?= $row['field_7'] ?></td>
																<td class="align-middle text-center">
																	<a href="?p=edit-sunter&id=<?= $row['id'] ?>" class='btn btn-primary btn-sm waves-effect waves-dark'><i class='mdi mdi-settings'> Edit</i></a>
																	<a href="?p=process-hapus-sunter&id=<?= $row['id'] ?>" class='btn btn-danger btn-sm waves-effect waves-dark'><i class='mdi mdi-delete'> Delete</i></a>
																	<a href="?p=process-cetak-data-sunter&id=<?= $row['id'] ?>" class='btn btn-success btn-sm waves-effect waves-dark' target='_blank'><i class='mdi mdi-printer'> Print</a></i>
																</td>
															</tr>
														<?php $i++; } 
													} ?>
                                                </tbody>
                                            </table>
                                            <div class="form-group">
                                                <a href="?p=tambah-sunter" class="btn btn-success waves-effect waves-dark"><i class="mdi mdi-plus-circle-outline"> ADD</button></a></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="fnd-gedung-trading">
                                        <div class="table-responsive">
                                            <table id="dataTable" class="table table-bordered table-striped table-hover table-sm">
                                                <thead>
                                                    <tr>
                                                        <th class="align-middle text-uppercase text-center">No.</th>
                                                        <th class="align-middle text-uppercase text-center">Customer PN</th>
                                                        <th class="align-middle text-uppercase">Name</th>
                                                        <th class="align-middle text-uppercase text-right">Jml Kanban</th>
                                                        <th class="align-middle text-uppercase text-center">Unique No</th>
                                                        <th class="align-middle text-uppercase text-right">Arrival Time</th>
                                                        <th class="align-middle text-uppercase text-center">Shutterlot Code</th>
                                                        <th class="align-middle text-uppercase text-center">Box No</th>
                                                        <th class="align-middle text-uppercase text-center">Order No</th>
                                                        <th class="align-middle text-uppercase text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql = "SELECT 
																* 
													        FROM 
																qtrx_customer_document_tmmin
															WHERE 
																prd_ged = 'TRADING' 
																AND plant = 'SUNTER'
																AND printed = 0
																AND field_17 > 0";
                                                    $query = mysqli_query($fndMysql, $sql);
													$i = 1;
													if ($query) {
														while ($row = mysqli_fetch_array($query)) {															
															?>
															<tr>
																<td class="align-middle text-center"><?= $i ?></td>
																<td class="align-middle text-center"><?= $row['part_no'] ?></td>
																<td class="align-middle"><?= $row['field_22'] ?></td>
																<td class="align-middle text-right"><?= $row['field_17'] ?></td>
																<td class="align-middle text-center"><?= $row['field_14'] ?></td>
																<td class="align-middle text-right"><?= $row['field_35'] ?></td>
																<td class="align-middle text-center"><?= $row['field_11'] ?></td>
																<td class="align-middle text-center"><?= $row['field_96'] ?></td>
																<td class="align-middle text-center"><?= $row['field_7'] ?></td>
																<td class="align-middle text-center">
																	<a href="?p=edit-sunter&id=<?= $row['id'] ?>" class='btn btn-primary btn-sm waves-effect waves-dark'><i class='mdi mdi-settings'> Edit</i></a>
																	<a href="?p=process-hapus-sunter&id=<?= $row['id'] ?>" class='btn btn-danger btn-sm waves-effect waves-dark'><i class='mdi mdi-delete'> Delete</i></a>
																	<a href="?p=process-cetak-data-sunter&id=<?= $row['id'] ?>" class='btn btn-success btn-sm waves-effect waves-dark' target='_blank'><i class='mdi mdi-printer'> Print</a></i>
																</td>
															</tr>
														<?php $i++; } 
													} ?>
                                                </tbody>
                                            </table>
                                            <div class="form-group">
                                                <a href="?p=tambah-sunter" class="btn btn-success waves-effect waves-dark"><i class="mdi mdi-plus-circle-outline"> ADD</button></a></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
</ol>
<?php require_once 'pages/fnd.scripts.php'; ?>