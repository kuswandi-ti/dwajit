<?php require_once 'pages/fnd.template.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-12 col-12 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0"><i class="mdi mdi-settings"> Edit Pengaturan Cycle</h3></i>
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
                            <form action="?p=process-edit-pengaturan-cycle" method="post">
                                <div class="form-group">
                                    <label class="font-weight-bold text-uppercase" for="fndTxt1">ID</label>
                                    <input type="text" class="form-control" placeholder="Isi disini" name="fnd-txt-id" required autocomplete="off" id="fndTxt1">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold text-uppercase" for="fndTxt2">ORDER NUMBER</label>
                                    <input type="text" class="form-control" placeholder="Isi disini" name="fnd-txt-order" required autocomplete="off" id="fndTxt2">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold text-uppercase" for="fndTxt3">DOCK CODE</label>
                                    <input type="text" class="form-control" placeholder="Isi disini" name="fnd-txt-code" required autocomplete="off" id="fndTxt3">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold text-uppercase" for="fndTxt4">DEPART TIME</label>
                                    <input type="date" class="form-control" placeholder="Isi disini" name="fnd-txt-time" required autocomplete="off" id="fndTxt4">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold text-uppercase" for="fndTxt5">PULLING CYCLE</label>
                                    <select name="fnd-txt-pulling" id="fndTxt5" class="form-control" required>
                                        <option value="">--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold" for="fndTxt6">LOADING CYCLE</label>
                                    <select name="fnd-txt-loading" id="fndTxt6" class="form-control" required>
                                        <option value="">--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success waves-effect waves-dark" type="submit"><i class="mdi mdi-checkbox-marked-circle-outline"> SAVE CHANGE</button></a></i>
                                    <button class="btn btn-danger waves-effect waves-dark" type="button" onclick="location.href='?p=pengaturan-cycle'"><i class="mdi mdi-refresh"> CANCEL</button></a></i>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
<?php require_once 'pages/fnd.scripts.php'; ?>