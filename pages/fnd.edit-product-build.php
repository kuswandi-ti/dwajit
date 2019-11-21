<?php require_once 'pages/fnd.template.php'; ?>

<?php

$id = $_GET['id'];
$part_no = $_GET['part_no'];
$part_name = $_GET['part_name'];
$prd_ged = $_GET['prd_ged'];

?>

<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-12 col-12 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0"><i class="mdi mdi-settings"> Edit Pulling by Building</h3></i>
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
                <form action="?p=process-edit-product-build" method="post">
                  <div class="form-group">
                    <label class="font-weight-bold text-uppercase" for="id">ID</label>
                    <input type="hidden" value="<?= $id ?>" class="form-control" placeholder="Isi disini" name="id"  id="id" >
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold text-uppercase" for="part_no">PART NO</label>
                    <input type="text" value="<?= $part_no ?>" class="form-control" placeholder="Isi disini" name="part_no"  id="part_no">
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold text-uppercase" for="part_name">PART NAME</label>
                    <input type="text"  value="<?= $part_name ?>" class="form-control" placeholder="Isi disini" name="part_name"  id="part-name">
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold text-uppercase" for="prd_ged">PRD GED</label>
                    <input type="text"  value="<?= $prd_ged ?>" class="form-control" placeholder="Isi disini" name="prd_ged"  id="prd_ged">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-success waves-effect waves-dark" onClick="alert('Edit Data Successfully')" type="submit" name="edit"><i class="mdi mdi-checkbox-marked-circle-outline"> SAVE CHANGE</button></a></i>
                    <button class="btn btn-danger waves-effect waves-dark" type="button" onclick="location.href='?p=product-build'"><i class="mdi mdi-refresh"> CANCEL</button></a></i>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ol>
</div>
<?php require_once 'pages/fnd.scripts.php'; ?>