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
 			<h3 class="box-title">Add Rekam Medis</h3>

 			<div class="pull-right">
 				<a href="<?=site_url('rekammedis')?>" class="btn btn-warning btn-flat">
 					<i class="fa fa-undo"></i> Back
 				</a>
 			</div>

 		</div>
 		<div class="box-body">
 			<div class="row">
 				<div class="col-md-4 mx-auto">
 					<form action="<?php echo base_url('rekammedis/add'); ?>" method="post">

           	<label for="">Data Pasien</label>
 						<select name="id_pasien" class="form-control" id="">
 							<option value="">- Pilih Pasien -</option>
 							<?php foreach ($pasien as $psn) { ?>
							 <option value="<?= $psn['id_pasien']?>"><?=$psn['nama_pasien']?></option>
							 <?php } ?>
 						</select>


 						<div class="form-group">
 							<label for="">Keluhan *</label>
 							<input type="text" name="keluhan" class="form-control" id="">
 						</div>

             	<label for="">Data Dokter</label>
 						<select name="id_dokter" class="form-control" id="">
 							<option value="">- Pilih Dokter -</option>
 							<?php foreach ($dokter as $dr) { ?>
							 <option value="<?= $dr['id_dokter']?>"><?=$dr['nama_dokter']?></option>
							 <?php } ?>
 						</select>

             	<div class="form-group">
 							<label for="">Diagnosa *</label>
 							<input type="text" name="diagnosa" class="form-control" id="">
 						</div>

               	<label for="">Data Ruangan</label>
 						<select name="id_ruangan" class="form-control" id="">
 							<option value="">- Pilih Ruangan -</option>
 							<?php foreach ($ruangan as $ruang) { ?>
							 <option value="<?= $ruang['id_ruangan']?>"><?=$ruang['nama_ruangan']?></option>
							 <?php } ?>
 						</select>



 						<div class="form-group">
 							<label for="">Tanggal</label>
 							<input type="date" name="tgl_periksa" class="form-control" id="">
 						</div>

 						<div class="form-group">
 							<button type="submit" class="btn btn-success btn-flat">
 								<i class="fa fa-paper-plane"></i> Save</button>
 							<button type="reset" class="btn btn-flat">Reset</button>
 						</div>
 					</form>
 				</div>
 			</div>

 		</div>
 	</div>
 </section>
