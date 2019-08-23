 <section class="content-header">
 	<h1>
 		Pasien
 		<small>Pengguna</small>
 	</h1>
 	<ol class="breadcrumb">
 		<li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
 		<li><a href="#">Pasien</a></li>
 	</ol>
 </section>

 <!-- Main content -->
 <section class="content">
 	<div class="box">
 		<div class="box-header">
 			<h3 class="box-title">Add Pasien</h3>

 			<div class="pull-right">
 				<a href="<?=site_url('pasien')?>" class="btn btn-warning btn-flat">
 					<i class="fa fa-undo"></i> Back
 				</a>
 			</div>

 		</div>
 		<div class="box-body">
 			<div class="row">
 				<div class="col-md-4 mx-auto">
 					<form action="<?php echo base_url('pasien/add'); ?>" method="post">
 						<div class="form-group">
 							<label for="">Nomor Identitas *</label>
 							<input type="text" name="nomor_identitas" class="form-control" id="">
 						</div>
 						<div class="form-group">
 							<label for="">Nama *</label>
 							<input type="text" name="nama_pasien" class="form-control" id="">
 						</div>

 						<label for="">Jenis Kelamin</label>
 						<select name="jenis_kelamin" class="form-control" id="">
 							<option value="">- Pilih -</option>
 							<option value="laki-laki">Laki - Laki</option>
 							<option value="perempuan">Perempuan</option>
 						</select>

 						<div class="form-group">
 							<label for="">Alamat</label>
 							<textarea name="alamat" class="form-control" id=""></textarea>
 						</div>

 						<div class="form-group">
 							<label for="">No telp *</label>
 							<input type="text" name="no_telp" class="form-control" id="">
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
