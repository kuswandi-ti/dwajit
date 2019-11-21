<?php require_once 'pages/fnd.template.php'; ?>
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-12 col-12 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0"><i class="mdi mdi-plus-circle-outline"> ADD Kanban Sunter (ADM)</h3></i>
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
                <form action="?p=process-tambah-adm-sunter" method="post">
					<div class="form-group">
						<label class="font-weight-bold" for="customer_pn">COSTUMER PN</label>
						<input type="text" class="form-control" placeholder="CPN Number" name="part_no"  id="part_no">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="part_name">NAME</label>
						<input type="text" class="form-control" placeholder="CPN Name" name="part_name"  id="part_name">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="total_qty">TOTAL QTY</label>
						<input type="text" class="form-control" placeholder="Qty" name="total_qty"  id="total_qty">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="job_no">JOB NO</label>
						<input type="text" class="form-control" placeholder="Job No" name="job_no"  id="job_no">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="arrival_time">ARRIVAL TIME</label>
						<input type="text" class="form-control" placeholder="Arrival Time" name="arrival_time"  id="arrival_time">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="part_address">PART ADDRESS</label>
						<input type="text" class="form-control" placeholder="Part Address" name="part_address"  id="part_address">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="order_no">ORDER NO</label>
						<input type="text" class="form-control" placeholder="Order No" name="order_no"  id="order_no">
					</div>
					<div class="form-group">
						<button class="btn btn-success waves-effect waves-dark" type="submit" name="add" ><i class="mdi mdi-checkbox-marked-circle-outline"> SAVE DATA</button></a></i>
						<button class="btn btn-danger waves-effect waves-dark" type="button" onclick="location.href='?p=sunter'"><i class="mdi mdi-refresh"> CANCEL</button></a></i>
					</div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ol>
 <?php require_once 'pages/fnd.scripts.php'; ?>