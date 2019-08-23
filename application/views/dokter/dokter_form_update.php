 <section class="content-header">
 	<h1>
 		Dokter
 		<small>Pengguna</small>
 	</h1>
 	<ol class="breadcrumb">
 		<li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
 		<li><a href="#">Dokter</a></li>
 	</ol>
 </section>

 <!-- Main content -->
 <section class="content">
 	<div class="box">
 		<div class="box-header">
 			<h3 class="box-title">Update Dokter</h3>

 			<div class="pull-right">
 				<a href="<?=site_url('dokter')?>" class="btn btn-warning btn-flat">
 					<i class="fa fa-undo"></i> Back
 				</a>
 			</div>

 		</div>
 		<div class="box-body">
 			<div class="row">
 				<div class="col-md-4 mx-auto">
 					<form action="<?php echo base_url('dokter/update'); ?>" method="post">
               
 						<div class="form-group">
 							<label for="">Nama *</label>
 							<input type="text" name="nama_dokter"  value="<?php echo $doctor[0]['nama_dokter']; ?>" class="form-control">
                            <input type="hidden" name="id_dokter"   value="<?php echo $this->uri->segment(3);?>" class="form-control" id="">
 						</div>
 						<div class="form-group">
 							<label for="">Spesialis *</label>
 							<input type="text" name="spesialis"  value="<?php echo $doctor[0]['spesialis']; ?>" class="form-control" id="">
 						</div>
 					
 						<div class="form-group">
 							<label for="">Alamat</label>
 							<textarea name="alamat" class="form-control" id=""><?php echo $doctor[0]['alamat']; ?></textarea>
 						</div>

             <div class="form-group">
 							<label for="">No telp *</label>
 							<input type="text"  value="<?php echo $doctor[0]['no_telp']; ?>" name="no_telp" class="form-control" id="">
 						</div>
 					
 						<div class="form-group">
 							<button type="submit" class="btn btn-success btn-flat">
 								<i class="fa fa-paper-plane"></i> Update</button>
 							<button type="reset" class="btn btn-flat">Reset</button>
 						</div>
 					</form>
 				</div>
 			</div>

 		</div>
 	</div>
 </section>
