<?php require_once 'pages/fnd.template.php'; ?>
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-12 col-12 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0"><i class="mdi mdi-settings"> Pengaturan Cycle</h3></i>
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
                <div class="card-title">
                  <div class="h3 p-0 font-weight-bold">Tabel Manifest</div>
                </div>
                <div class="table-responsive">
                  <table id="dataTable" class="table table-bordered table-striped table-hover table-sm">
                    <thead>
                      <tr>
                        <th class="align-middle text-uppercase">ID</th>
                        <th class="align-middle text-uppercase">ORDER NUMBER</th>
                        <th class="align-middle text-uppercase">DOCK CODE</th>
                        <th class="align-middle text-uppercase">DEPART TIME</th>
                        <th class="align-middle text-uppercase">PULLING CYCLE</th>
                        <th class="align-middle text-uppercase">LOADING CYCLE</th>
                        <th class="align-middle text-uppercase">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle"></td>
                        <td class="align-middle text-center">
                          <a href="?p=edit-pengaturan-cycle" class="btn btn-primary btn-sm waves-effect waves-dark"><i class="mdi mdi-settings"> EDIT</a></i>
                          <a href="?p=process-hapus-pengaturan-cycle" class="btn btn-danger btn-sm waves-effect waves-dark"><i class="mdi mdi-delete"> DELETE</a></i>
                        </td>
                      </tr>
                    </tbody>
                  </table>
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