 <section class="content-header">
 	<h1>
 		Obat
 		<small>Pengguna</small>
 	</h1>
 	<ol class="breadcrumb">
 		<li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
 		<li><a href="#">Obat</a></li>
 	</ol>
 </section>

 <!-- Main content -->
 <section class="content">
 	<div class="box">
 		<div class="box-header">
 			<h3 class="box-title">Add Obat</h3>

 			<div class="pull-right">
 				<a href="<?=site_url('obat')?>" class="btn btn-warning btn-flat">
 					<i class="fa fa-undo"></i> Back
 				</a>
 			</div>

 		</div>
 		<div class="box-body">
 			<div class="row">
 				<div class="col-md-4 mx-auto">
 					<form action="<?php echo base_url('obat/add'); ?>" method="post">
 						<div class="form-group">
 							<label for="">Nama Obat *</label>
 							<input type="text" name="nama_obat" class="form-control" id="">
 						</div>
 						<div class="form-group">
 							<label for="">Keterangan Obat</label>
 							<input type="text" name="keterangan_obat" class="form-control" id="">
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
