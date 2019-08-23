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
 			<h3 class="box-title">Data Rekam Medis</h3>

 			<div class="pull-right">
 				<a href="<?=site_url('rekammedis/add')?>" class="btn btn-primary btn-flat">
 					<i class="fa fa-user-plus"></i> Create
 				</a>
 			</div>

 		</div>
 		<div class="box-body table-responsive">
 			
 			<table class="table table-bordered table-striped">
 				<thead>
 					<tr>
 						<th>#</th>
 						<th>Nama Pasien</th>
 						<th>Keluhan</th>
 						<th>Nama Dokter</th>
 						<th>Diagnosa</th>
 						<th>Nama Ruangan</th>
 						<th>Actions</th>
 					</tr>
 				</thead>
 				<tbody>

				  	<?php $no=1;?>
 					<?php foreach($rekam_medis as $rekammedis): ?>
 					<tr>
 						<td><?php echo $no; ?></td>
 						<td><?php echo $rekammedis['nama_pasien'] ?></td>
 						<td><?php echo $rekammedis['keluhan'] ?></td>
 						<td><?php echo $rekammedis['nama_dokter'] ?></td>
 						<td><?php echo $rekammedis['diagnosa'] ?></td>
 						<td><?php echo $rekammedis['nama_ruangan'] ?></td>
 						<td class="text-center" width="260px">
						 <a href="<?=site_url('rekammedis/view/'. $rekammedis['id_rm'])?>" class="btn btn-primary btn-xs">
 								<i class="fa fa-eye"></i> view
 							</a>
 							<a href="<?=site_url('rekammedis/update/'. $rekammedis['id_rm'])?>" class="btn btn-primary btn-xs">
 								<i class="fa fa-pencil"></i> Update
 							</a>
 							<div onclick="deleteRekamMedis(<?php echo $rekammedis['id_rm'] ?>)" class="btn btn-danger btn-xs">
 								<i class="fa fa-trash"></i> Delete
 							</div>
 						</td>
 					</tr>
 					<?php $no++;?>
 					<?php endforeach; ?>

 			
 				</tbody>
 			</table>
 		</div>
 	</div>
 </section>


<script type="text/javascript">
function deleteRekamMedis(id_rm) {
    if (confirm("Are you sure?")) {
        // your deletion code
        $.ajax({
          url: window.location.href+"/deleteRekamMedis/"+id_rm,
          context: document.body
        }).done(function() {
         window.location = window.location.href;
        });
    }
    return false;
}
</script>