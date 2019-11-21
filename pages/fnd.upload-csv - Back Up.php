<?php require_once 'pages/fnd.template.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-12 col-12 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0"><i class="mdi mdi-car"> Upload CSV Toyota</h3></i>
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
                                    <div class="h4 p-0 font-weight-bold">Silahkan Upload CSV</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-body">
                                    <form action="?p=process-upload-csv" method="post" enctype="multipart/form-data" name="import" id="import">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="file" id="file" accept=".csv"required>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-success waves-effect waves-dark" input type="submit" id="import" method="post" name="import"><i class="mdi mdi-note-plus-outline"> UPLOAD CSV</button></a></i>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="h4 p-0 font-weight-bold">Silahkan Print Data</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="karawang-kanban">PRINT Data SUNTER</label>
                                        <div>
                                            <a href='?p=process-cetak-data-sunter'  target="_blank" class="btn btn-danger btn-sm waves-effect waves-dark"><i class="mdi mdi-cloud-print"> PRINT DATA</button></a></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="karawang-kanban">PRINT Data KARAWANG</label>
                                    <div>
                                        <a href='?p=process-cetak-data-karawang'  target="_blank" class="btn btn-danger btn-sm waves-effect waves-dark"><i class="mdi mdi-cloud-print"> PRINT DATA</button></a></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php require_once 'pages/fnd.scripts.php'; ?>