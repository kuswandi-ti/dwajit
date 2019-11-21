<?php require_once 'pages/fnd.template.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-12 col-12 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0"><i class="mdi mdi-chart-arc"> Cycle Time Pulling and Loading</h3></i>
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
                                        <a class="nav-link active" data-toggle="tab" href="#fnd-pulling">
                                            <span class="hidden-sm-up"></span> 
                                            <span class="hidden-xs-down">Pulling Cycle</span>
                                        </a> 
                                    </li>
                                    <li class="nav-item"> 
                                        <a class="nav-link" data-toggle="tab" href="#fnd-loading">
                                            <span class="hidden-sm-up"></span>
                                            <span class="hidden-xs-down">Loading Cycle</span>
                                        </a> 
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="fnd-pulling">
                                        <div class="table-responsive">
                                            <table id="dataTable" class="table table-bordered table-striped table-hover table-sm">
                                                <thead>
                                                    <tr>
                                                        <th class="align-middle text-uppercase">NO</th>
                                                        <th class="align-middle text-uppercase">CUST</th>
                                                        <th class="align-middle text-uppercase">PLAN</th>
                                                        <th class="align-middle text-uppercase">DESTINATION</th>
                                                        <th class="align-middle text-uppercase">PULLING <br> CYCLE 1</th>
                                                        <th class="align-middle text-uppercase">PULLING <br> CYCLE 2</th>
                                                        <th class="align-middle text-uppercase">PULLING <br>CYCLE 3</th>
                                                        <th class="align-middle text-uppercase">PULLING <br>CYCLE 4</th>
                                                        <th class="align-middle text-uppercase">PULLING <br> CYCLE 5</th>
                                                        <th class="align-middle text-uppercase">PULLING <br>CYCLE 6</th>
                                                        <th class="align-middle text-uppercase">PULLING <br>CYCLE 7</th>
                                                        <th class="align-middle text-uppercase">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  
                                                    $no = 1; 
                                                    $sql = "SELECT * FROM tmst_time_pulling";
                                                    $query = mysqli_query($fndMysql, $sql);
                                                    while ($row = mysqli_fetch_array($query)) {
                                                        ?>
                                                        <tr>
                                                            <td class="align-middle"><?php echo $no++; ?></td>
                                                            <td class="align-middle"><?= $row['cust'] ?></td>
                                                            <td class="align-middle"><?= $row['plan'] ?></td>
                                                            <td class="align-middle"><?= $row['destination'] ?></td>
                                                            <td class="align-middle"><?= $row['pc_1a']."-".$row['pc_1b'] ?></td>
                                                            <td class="align-middle"><?= $row['pc_2a']."-".$row['pc_2b'] ?></td>
                                                            <td class="align-middle"><?= $row['pc_3a']."-".$row['pc_3b'] ?></td>
                                                            <td class="align-middle"><?= $row['pc_4a']."-".$row['pc_4b'] ?></td>
                                                            <td class="align-middle"><?= $row['pc_5a']."-".$row['pc_5b'] ?></td>
                                                            <td class="align-middle"><?= $row['pc_6a']."-".$row['pc_6b'] ?></td>
                                                            <td class="align-middle"><?= $row['pc_7a']."-".$row['pc_7b'] ?></td>
                                                            <td class="align-middle text-center">
                                                                <a href="?p=edit-pulling-loading&id=<?= $row['id'] ?>&cust=<?= $row['cust'] ?>&plan=<?= $row['plan'] ?>&destination=<?= $row['destination'] ?>&pc_1a=<?= $row['pc_1a'] ?>&pc_1b=<?= $row['pc_1b'] ?>&pc_2a=<?= $row['pc_2a'] ?>&pc_2b=<?= $row['pc_2b'] ?>&pc_3a=<?= $row['pc_3a'] ?>&pc_3b=<?= $row['pc_3b'] ?>&pc_4a=<?= $row['pc_4a'] ?>&pc_4b=<?= $row['pc_4b'] ?>&pc_5a=<?= $row['pc_5a'] ?>&pc_5b=<?= $row['pc_5b'] ?>&pc_6a=<?= $row['pc_6a'] ?>&pc_6b=<?= $row['pc_6b'] ?>&pc_7a=<?= $row['pc_7a'] ?>&pc_7b=<?= $row['pc_7b'] ?>&pl_1a=<?= $row['pl_1a'] ?>&pl_1b=<?= $row['pl_1b'] ?>&pl_2a=<?= $row['pl_2a'] ?>&pl_2b=<?= $row['pl_2b'] ?>&pl_3a=<?= $row['pl_3a'] ?>&pl_3b=<?= $row['pl_3b'] ?>&pl_4a=<?= $row['pl_4a'] ?>&pl_4b=<?= $row['pl_4b'] ?>&pl_5a=<?= $row['pl_5a'] ?>&pl_5b=<?= $row['pl_5b'] ?>&pl_6a=<?= $row['pl_6a'] ?>&pl_6b=<?= $row['pl_6b'] ?>&pl_7a=<?= $row['pl_7a'] ?>&pl_7b=<?= $row['pl_7b'] ?>" class="btn btn-primary btn-sm waves-effect waves-dark"><i class="mdi mdi-settings"> EDIT</a></i>
                                                                <a href="?p=process-hapus-pulling-loading&id=<?= $row['id'] ?>&cust=<?= $row['cust'] ?>&plan=<?= $row['plan'] ?>&destination=<?= $row['destination'] ?>&pc_1a=<?= $row['pc_1a'] ?>&pc_1b=<?= $row['pc_1b'] ?>&pc_2a=<?= $row['pc_2a'] ?>&pc_2b=<?= $row['pc_2b'] ?>&pc_3a=<?= $row['pc_3a'] ?>&pc_3b=<?= $row['pc_3b'] ?>&pc_4a=<?= $row['pc_4a'] ?>&pc_4b=<?= $row['pc_4b'] ?>&pc_5a=<?= $row['pc_5a'] ?>&pc_5b=<?= $row['pc_5b'] ?>&pc_6a=<?= $row['pc_6a'] ?>&pc_6b=<?= $row['pc_6b'] ?>&pc_7a=<?= $row['pc_7a'] ?>&pc_7b=<?= $row['pc_7b'] ?>&pl_1a=<?= $row['pl_1a'] ?>&pl_1b=<?= $row['pl_1b'] ?>&pl_2a=<?= $row['pl_2a'] ?>&pl_2b=<?= $row['pl_2b'] ?>&pl_3a=<?= $row['pl_3a'] ?>&pl_3b=<?= $row['pl_3b'] ?>&pl_4a=<?= $row['pl_4a'] ?>&pl_4b=<?= $row['pl_4b'] ?>&pl_5a=<?= $row['pl_5a'] ?>&pl_5b=<?= $row['pl_5b'] ?>&pl_6a=<?= $row['pl_6a'] ?>&pl_6b=<?= $row['pl_6b'] ?>&pl_7a=<?= $row['pl_7a'] ?>&pl_7b=<?= $row['pl_7b'] ?>" class="btn btn-danger btn-sm waves-effect waves-dark" onClick="alert('Delete Data Successfully')"><i class="mdi mdi-delete"> DELETE</a></i>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            <div class="form-group">
                                                <a href="?p=tambah-pulling-loading" class="btn btn-success waves-effect waves-dark" ><i class="mdi mdi-plus-circle-outline"> ADD</button></a></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="fnd-loading">
                                        <div class="table-responsive">
                                            <table id="dataTable" class="table table-bordered table-striped table-hover table-sm">
                                                <thead>
                                                    <tr>
                                                        <th class="align-middle text-uppercase">NO</th>
                                                        <th class="align-middle text-uppercase">CUST</th>
                                                        <th class="align-middle text-uppercase">PLAN</th>
                                                        <th class="align-middle text-uppercase">DESTINATION</th>
                                                        <th class="align-middle text-uppercase">LOADING CYCLE 1</th>
                                                        <th class="align-middle text-uppercase">LOADING CYCLE 2</th>
                                                        <th class="align-middle text-uppercase">LOADING CYCLE 3</th>
                                                        <th class="align-middle text-uppercase">LOADING CYCLE 4</th>
                                                        <th class="align-middle text-uppercase">LOADING CYCLE 5</th>
                                                        <th class="align-middle text-uppercase">LOADING CYCLE 6</th>
                                                        <th class="align-middle text-uppercase">LOADING CYCLE 7</th>
                                                        <th class="align-middle text-uppercase">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  
                                                    $no = 1;
                                                    $sql = "SELECT * FROM tmst_time_pulling";
                                                    $query = mysqli_query($fndMysql, $sql);
                                                    while ($row = mysqli_fetch_array($query)) {
                                                        ?>
                                                        <tr>
                                                            <td class="align-middle"><?php echo $no++; ?></td>
                                                            <td class="align-middle"><?= $row['cust'] ?></td>
                                                            <td class="align-middle"><?= $row['plan'] ?></td>
                                                            <td class="align-middle"><?= $row['destination'] ?></td>
                                                            <td class="align-middle"><?= $row['pl_1a']."-".$row['pl_1b'] ?></td>
                                                            <td class="align-middle"><?= $row['pl_2a']."-".$row['pl_2b'] ?></td>
                                                            <td class="align-middle"><?= $row['pl_3a']."-".$row['pl_3b'] ?></td>
                                                            <td class="align-middle"><?= $row['pl_4a']."-".$row['pl_4b'] ?></td>
                                                            <td class="align-middle"><?= $row['pl_5a']."-".$row['pl_5b'] ?></td>
                                                            <td class="align-middle"><?= $row['pl_6a']."-".$row['pl_6b'] ?></td>
                                                            <td class="align-middle"><?= $row['pl_7a']."-".$row['pl_7b'] ?></td>
                                                            <td class="align-middle text-center">
                                                                <a href="?p=edit-pulling-loading&id=<?= $row['id'] ?>&cust=<?= $row['cust'] ?>&plan=<?= $row['plan'] ?>&destination=<?= $row['destination'] ?>&pc_1a=<?= $row['pc_1a'] ?>&pc_1b=<?= $row['pc_1b'] ?>&pc_2a=<?= $row['pc_2a'] ?>&pc_2b=<?= $row['pc_2b'] ?>&pc_3a=<?= $row['pc_3a'] ?>&pc_3b=<?= $row['pc_3b'] ?>&pc_4a=<?= $row['pc_4a'] ?>&pc_4b=<?= $row['pc_4b'] ?>&pc_5a=<?= $row['pc_5a'] ?>&pc_5b=<?= $row['pc_5b'] ?>&pc_6a=<?= $row['pc_6a'] ?>&pc_6b=<?= $row['pc_6b'] ?>&pc_7a=<?= $row['pc_7a'] ?>&pc_7b=<?= $row['pc_7b'] ?>&pl_1a=<?= $row['pl_1a'] ?>&pl_1b=<?= $row['pl_1b'] ?>&pl_2a=<?= $row['pl_2a'] ?>&pl_2b=<?= $row['pl_2b'] ?>&pl_3a=<?= $row['pl_3a'] ?>&pc_3b=<?= $row['pc_3b'] ?>&pc_4a=<?= $row['pl_4a'] ?>&pl_4b=<?= $row['pl_4b'] ?>&pl_5a=<?= $row['pl_5a'] ?>&pl_5b=<?= $row['pl_5b'] ?>&pl_6a=<?= $row['pl_6a'] ?>&pl_6b=<?= $row['pl_6b'] ?>&pl_7a=<?= $row['pl_7a'] ?>&pl_7b=<?= $row['pl_7b'] ?>" class="btn btn-primary btn-sm waves-effect waves-dark"><i class="mdi mdi-settings"> EDIT</a></i>
                                                                <a href="?p=process-hapus-pulling-loading&id=<?= $row['id'] ?>&cust=<?= $row['cust'] ?>&plan=<?= $row['plan'] ?>&destination=<?= $row['destination'] ?>&pc_1a=<?= $row['pc_1a'] ?>&pc_1b=<?= $row['pc_1b'] ?>&pc_2a=<?= $row['pc_2a'] ?>&pc_2b=<?= $row['pc_2b'] ?>&pc_3a=<?= $row['pc_3a'] ?>&pc_3b=<?= $row['pc_3b'] ?>&pc_4a=<?= $row['pc_4a'] ?>&pc_4b=<?= $row['pc_4b'] ?>&pc_5a=<?= $row['pc_5a'] ?>&pc_5b=<?= $row['pc_5b'] ?>&pc_6a=<?= $row['pc_6a'] ?>&pc_6b=<?= $row['pc_6b'] ?>&pc_7a=<?= $row['pc_7a'] ?>&pc_7b=<?= $row['pc_7b'] ?>&pl_1a=<?= $row['pl_1a'] ?>&pl_1b=<?= $row['pl_1b'] ?>&pl_2a=<?= $row['pl_2a'] ?>&pl_2b=<?= $row['pl_2b'] ?>&pl_3a=<?= $row['pl_3a'] ?>&pl_3b=<?= $row['pl_3b'] ?>&pl_4a=<?= $row['pl_4a'] ?>&pl_4b=<?= $row['pl_4b'] ?>&pl_5a=<?= $row['pl_5a'] ?>&pl_5b=<?= $row['pl_5b'] ?>&pl_6a=<?= $row['pl_6a'] ?>&pl_6b=<?= $row['pl_6b'] ?>&pl_7a=<?= $row['pl_7a'] ?>&pl_7b=<?= $row['pl_7b'] ?>" class="btn btn-danger btn-sm waves-effect waves-dark" onClick="alert('Delete Data Successfully')"><i class="mdi mdi-delete"> DELETE</a></i>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            <div class="form-group">
                                                <a href="?p=tambah-pulling-loading" class="btn btn-success waves-effect waves-dark" ><i class="mdi mdi-plus-circle-outline"> ADD</button></a></i>
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