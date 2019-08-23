 <section class="content-header">
 	<h1>
 		Rekam Medis
 		<small>Pengguna</small>
 	</h1>
 	<ol class="breadcrumb">
 		<li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
 		<li><a href="#">Rekam Medis</a></li>
 	</ol>
 </section>

 <!-- Main content -->
 <section class="content">
 	<div class="box">
 		<div class="box-header">
 			<h3 class="box-title">Details Rekam Medis</h3>

 			<div class="pull-right">
 				<a href="<?=site_url('rekammedis')?>" class="btn btn-warning btn-flat">
 					<i class="fa fa-undo"></i> Back
 				</a>
 			</div>
       <br>
       <br>
       <br>


 			<div class="box-body table-responsive no-padding">
 				<table class="table table-hover">
 				
 					<tr>
 						<td>No Identitas</td>
 						<td>:</td>
 						<td><?php echo $rekammedis['nomor_identitas'] ?></td>
 					</tr>
 					<tr>
 						<td>Nama Pasien</td>
 						<td>:</td>
 						<td><?php echo $rekammedis['nama_pasien'] ?></td>
 					</tr>
 					<tr>
 						<td>Gender</td>
 						<td>:</td>
 						<td><?php echo $rekammedis['jenis_kelamin'] ?></td>
 					</tr>
 					<tr>
 						<td>Alamat</td>
 						<td>:</td>
 						<td><?php echo $rekammedis['alamat'] ?></td>
 					</tr>
 					<tr>
 						<td>Keluhan</td>
 						<td>:</td>
 						<td><?php echo $rekammedis['keluhan'] ?></td>
 					</tr>
 					<tr>
 						<td>Tgl Periksa</td>
 						<td>:</td>
 						<td><?php echo $rekammedis['tgl_periksa'] ?></td>
 					</tr>
 					<tr>
 						<td>No Telp</td>
 						<td>:</td>
 						<td><?php echo $rekammedis['no_telp'] ?></td>
 					</tr>
           	<tr>
 						<td>Nama Dokter</td>
 						<td>:</td>
 						<td><?php echo $rekammedis['nama_dokter'] ?></td>
 					</tr>
           	<tr>
 						<td>Diagnosa</td>
 						<td>:</td>
 						<td><?php echo $rekammedis['diagnosa'] ?></td>
 					</tr>
           	<tr>
 						<td>Nama ruangan</td>
 						<td>:</td>
 						<td><?php echo $rekammedis['nama_ruangan'] ?></td>
 					</tr>
           	<tr>
 						<td>Nama Gedung</td>
 						<td>:</td>
 						<td><?php echo $rekammedis['gedung'] ?></td>
 					</tr>

 				</table>
 			</div>
 			<!-- /.box-body -->

 		</div>
 	</div>
 </section>
