 <section class="content-header">
      <h1>
        Dashboard
        <small>control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li><a href="#">Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>&nbsp;</h3>

              <p>List Dokter</p>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-bag"></i> -->
            </div>
            <a href="<?=base_url()?>dokter" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>&nbsp;</h3>

              <p>Data Pasien</p>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-stats-bars"></i> -->
            </div>
            <a href="<?=base_url()?>pasien" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>&nbsp;</h3>

              <p>List Obat</p>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-person-add"></i> -->
            </div>
            <a href="<?=base_url()?>obat" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>&nbsp;</h3>

              <p>Daftar Ruangan</p>
            </div>
            <div class="icon">
              <!-- <i class="ion ion-pie-graph"></i> -->
            </div>
            <a href="<?=base_url()?>ruangan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

 <h3>Jadwal Temu Dokter</h3>
 <div class="box">
 <div class="box-body table-responsive">
 			
 			<table class="table table-bordered table-striped">
 			 <thead>
                    <tr>
                    <th>#</th>
                        <th>Nama Pasien</th>
                        <th>Nama Dokter</th>
                        <th>Spesialis</th>
                        <th>Jadwal Temu</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1;?>
 					<?php foreach($list_reservasi2 as $list): ?>
                    <tr>
                       <td><?php echo $no; ?></td>
 						<td><?php echo $list['nama_pasien'] ?></td>
 						<td><?php echo $list['nama_dokter'] ?></td>
 						<td><?php echo $list['spesialis'] ?></td>
 						<td><?php echo $list['tgl_janji'] ?></td>
                    </tr>
                    <?php $no++;?>
 					<?php endforeach; ?>
                    </tbody>
 			</table>
 		</div>
 </div>
   
    </section>