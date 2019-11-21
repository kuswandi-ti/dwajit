<?php require_once 'pages/fnd.template.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-12 col-12 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0"><i class="mdi mdi-plus-circle-outline"> ADD Pulling And Loading</h3></i>
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
                                <form action="?p=process-tambah-pulling-loading" method="post">
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="fndTxt1">ID</label>
                                        <input type="text" class="form-control" placeholder="Isi disini" name="id" required autocomplete="off" id="id">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="fndTxt2">CUST</label>
                                        <input type="text" class="form-control" placeholder="Isi disini" name="cust" required autocomplete="off" id="cust">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="fndTxt3">PLAN</label>
                                        <input type="text" class="form-control" placeholder="Isi disini" name="plan" required autocomplete="off" id="plan">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="fndTxt4">DESTINATION</label>
                                        <input type="text" class="form-control" placeholder="Isi disini" name="destination" required autocomplete="off" id="destination">
                                    </div>
                                    <div align="center" class="h3 p-0 font-weight-bold">PULLING CYCLE</div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt5">PULLING CYCLE 1</label>
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pc_1a" id="pc_1a">
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pc_1b" id="pc_1b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt6">PULLING CYCLE 2</label>
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pc_2a" id="pc_2a">
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pc_2b" id="pc_2b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt7">PULLING CYCLE 3</label>
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pc_3a" id="pc_3a">
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pc_3b" id="pc_3b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt8">PULLING CYCLE 4</label>
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pc_4a" id="pc_4a">
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pc_4b" id="pc_4b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt9">PULLING CYCLE 5</label>
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pc_5a" id="pc_5a">
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pc_5b" id="pc_5b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt10">PULLING CYCLE 6</label>
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pc_6a" id="pc_6a">
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pc_6b" id="pc_6b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt11">PULLING CYCLE 7</label>
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pc_7a" id="pc_7a">
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pc_7b" id="pc_7b">
                                        </div>
                                        <div align="center" class="h3 p-0 font-weight-bold">LOADING CYCLE</div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt5">LOADING CYCLE 1</label>
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pl_1a" id="pl_1a">
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pl_1b" id="pl_1b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt6">LOADING CYCLE 2</label>
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pl_2a" id="pl_2a">
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pl_2b" id="pl_2b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt7">LOADING CYCLE 3</label>
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pl_3a" id="pl_3a">
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pl_3b" id="pl_3b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt8">LOADING CYCLE 4</label>
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pl_4a" id="pl_4a">
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pl_4b" id="pl_4b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt9">LOADING CYCLE 5</label>
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pl_5a" id="pl_5a">
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pl_5b" id="pl_5b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt10">LOADING CYCLE 6</label>
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pl_6a" id="pl_6a">
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pl_6b" id="pl_6b">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="fndTxt11">LOADING CYCLE 7</label>
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pl_7a" id="pl_7a">
                                            <input type="time" class="form-control" placeholder="Isi disini" name="pl_7b" id="pl_7b">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success waves-effect waves-dark" onClick="alert('Add Data Successfully')" type="submit" name="update"><i class="mdi mdi-checkbox-marked-circle-outline"> ADD DATA</button></a></i>
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