<?php require_once 'pages/fnd.template.php'; ?>

<?php

$id = $_GET['id'];
$cust = $_GET['cust'];
$plan = $_GET['plan'];
$destination = $_GET['destination'];
$pc_1a = $_GET['pc_1a'];
$pc_1b = $_GET['pc_1b'];
$pc_2a = $_GET['pc_2a'];
$pc_2b = $_GET['pc_2b'];
$pc_3a = $_GET['pc_3a'];
$pc_3b = $_GET['pc_3b'];
$pc_4a = $_GET['pc_4a'];
$pc_4b = $_GET['pc_4b'];
$pc_5a = $_GET['pc_5a'];
$pc_5b = $_GET['pc_5b'];
$pc_6a = $_GET['pc_6a'];
$pc_6b = $_GET['pc_6b'];
$pc_7a = $_GET['pc_7a'];
$pc_7b = $_GET['pc_7b'];
$pl_1a = $_GET['pl_1a'];
$pl_1b = $_GET['pl_1b'];
$pl_2a = $_GET['pl_2a'];
$pl_2b = $_GET['pl_2b'];
$pl_3a = $_GET['pl_3a'];
$pl_3b = $_GET['pl_3b'];
$pl_4a = $_GET['pl_4a'];
$pl_4b = $_GET['pl_4b'];
$pl_5a = $_GET['pl_5a'];
$pl_5b = $_GET['pl_5b'];
$pl_6a = $_GET['pl_6a'];
$pl_6b = $_GET['pl_6b'];
$pl_7a = $_GET['pl_7a'];
$pl_7b = $_GET['pl_7b'];

?>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-12 col-12 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0"><i class="mdi mdi-settings"> Edit Pulling and Loading</h3></i>
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
                                <form action="?p=process-edit-pulling-loading" method="post">
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="fndTxt1">ID</label>
                                        <input type="hidden" value="<?= $id ?>" class="form-control" placeholder="Isi disini" name="id" required autocomplete="off" id="id">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="fndTxt2">CUST</label>
                                        <input type="text" value="<?= $cust ?>" class="form-control" placeholder="Isi disini" name="cust" required autocomplete="off" id="cust">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="fndTxt3">PLAN</label>
                                        <input type="text" value="<?= $plan ?>" class="form-control" placeholder="Isi disini" name="plan" required autocomplete="off" id="plan">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="fndTxt4">DESTINATION</label>
                                        <input type="text" value="<?= $destination ?>" class="form-control" placeholder="Isi disini" name="destination" required autocomplete="off" id="destination">
                                    </div>
                                    <div align="center" class="h3 p-0 font-weight-bold">PULLING CYCLE</div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt5">PULLING CYCLE 1</label>
                                            <input type="time" value="<?= $pc_1a ?>" class="form-control" placeholder="Isi disini" name="pc_1a" id="pc_1a">
                                            <input type="time" value="<?= $pc_1b ?>" class="form-control" placeholder="Isi disini" name="pc_1b" id="pc_1b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt6">PULLING CYCLE 2</label>
                                            <input type="time" value="<?= $pc_2a ?>" class="form-control" placeholder="Isi disini" name="pc_2a" id="pc_2a">
                                            <input type="time" value="<?= $pc_2b ?>" class="form-control" placeholder="Isi disini" name="pc_2b" id="pc_2b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt7">PULLING CYCLE 3</label>
                                            <input type="time" value="<?= $pc_3a ?>" class="form-control" placeholder="Isi disini" name="pc_3a" id="pc_3a">
                                            <input type="time" value="<?= $pc_3b ?>" class="form-control" placeholder="Isi disini" name="pc_3b" id="pc_3b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt8">PULLING CYCLE 4</label>
                                            <input type="time" value="<?= $pc_4a ?>" class="form-control" placeholder="Isi disini" name="pc_4a" id="pc_4a">
                                            <input type="time" value="<?= $pc_4b ?>" class="form-control" placeholder="Isi disini" name="pc_4b" id="pc_4b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt9">PULLING CYCLE 5</label>
                                            <input type="time" value="<?= $pc_5a ?>" class="form-control" placeholder="Isi disini" name="pc_5a" id="pc_5a">
                                            <input type="time" value="<?= $pc_5b ?>" class="form-control" placeholder="Isi disini" name="pc_5b" id="pc_5b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt10">PULLING CYCLE 6</label>
                                            <input type="time" value="<?= $pc_6a ?>" class="form-control" placeholder="Isi disini" name="pc_6a" id="pc_6a">
                                            <input type="time" value="<?= $pc_6b ?>" class="form-control" placeholder="Isi disini" name="pc_6b" id="pc_6b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt11">PULLING CYCLE 7</label>
                                            <input type="time" value="<?= $pc_7a ?>" class="form-control" placeholder="Isi disini" name="pc_7a" id="pc_7a">
                                            <input type="time" value="<?= $pc_7b ?>" class="form-control" placeholder="Isi disini" name="pc_7b" id="pc_7b">
                                        </div>
                                        <div align="center" class="h3 p-0 font-weight-bold">LOADING CYCLE</div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt12">LOADING CYCLE 1</label>
                                            <input type="time" value="<?= $pl_1a ?>" class="form-control" placeholder="Isi disini" name="pl_1a" id="pl_1a">
                                            <input type="time" value="<?= $pl_1b ?>" class="form-control" placeholder="Isi disini" name="pl_1b" id="pl_1b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt13">LOADING CYCLE 2</label>
                                            <input type="time" value="<?= $pl_2a ?>" class="form-control" placeholder="Isi disini" name="pl_2a" id="pl_2a">
                                            <input type="time" value="<?= $pl_2b ?>" class="form-control" placeholder="Isi disini" name="pl_2b" id="pl_2b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt14">LOADING CYCLE 3</label>
                                            <input type="time" value="<?= $pl_3a ?>" class="form-control" placeholder="Isi disini" name="pl_3a" id="pl_3a">
                                            <input type="time" value="<?= $pl_3b ?>" class="form-control" placeholder="Isi disini" name="pl_3b" id="pl_3b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt15">LOADING CYCLE 4</label>
                                            <input type="time" value="<?= $pl_4a ?>" class="form-control" placeholder="Isi disini" name="pl_4a" id="pl_4a">
                                            <input type="time" value="<?= $pl_4b ?>" class="form-control" placeholder="Isi disini" name="pl_4b" id="pl_4b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt16">LOADING CYCLE 5</label>
                                            <input type="time" value="<?= $pl_5a ?>" class="form-control" placeholder="Isi disini" name="pl_5a" id="pl_5a">
                                            <input type="time" value="<?= $pl_5b ?>" class="form-control" placeholder="Isi disini" name="pl_5b" id="pl_5b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt17">LOADING CYCLE 6</label>
                                            <input type="time" value="<?= $pl_6a ?>" class="form-control" placeholder="Isi disini" name="pl_6a" id="pl_6a">
                                            <input type="time" value="<?= $pl_6b ?>" class="form-control" placeholder="Isi disini" name="pl_6b" id="pl_6b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt18">LOADING CYCLE 7</label>
                                            <input type="time" value="<?= $pl_7a ?>" class="form-control" placeholder="Isi disini" name="pl_7a" id="pl_7a">
                                            <input type="time" value="<?= $pl_7b ?>" class="form-control" placeholder="Isi disini" name="pl_7b" id="pl_7b">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success waves-effect waves-dark" onClick="alert('Edit Data Successfully')" type="submit"><i class="mdi mdi-checkbox-marked-circle-outline"> SAVE CHANGE</button></a></i>
                                        <button class="btn btn-danger waves-effect waves-dark" type="button" onclick="location.href='?p=pulling-loading'"><i class="mdi mdi-refresh"> CANCEL</button></a></i>
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