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
 			<h3 class="box-title">Data Pasien</h3>

 			<div class="pull-right">
 				<a href="<?=site_url('pasien/add')?>" class="btn btn-primary btn-flat">
 					<i class="fa fa-user-plus"></i> Create
 				</a>
 			</div>

 		</div>
 		<div class="box-body table-responsive">
 			<table class="table table-bordered table-striped">
 				<thead>
 					<tr>
 						<th>#</th>
 						<th>Nomor Identitas</th>
 						<th>Nama Pasien</th>
 						<th>Jenis Kelamin</th>
 						<th>Alamat</th>
 						<th>No Telp</th>
 						<th>Actions</th>
 					</tr>
 				</thead>
 				<tbody>
 			
			 	<?php $no=1;?>
 					<?php foreach($pasiens as $pasien): ?>
 					<tr>
 						<td><?php echo $no; ?></td>
 						<td><?php echo $pasien['nomor_identitas'] ?></td>
 						<td><?php echo $pasien['nama_pasien'] ?></td>
 						<td><?php echo $pasien['jenis_kelamin'] ?></td>
 						<td><?php echo $pasien['alamat'] ?></td>
 						<td><?php echo $pasien['no_telp'] ?></td>
 						<td class="text-center" width="160px">
 							<a href="<?=site_url('pasien/update/'. $pasien['id_pasien'])?>" class="btn btn-primary btn-xs">
 								<i class="fa fa-pencil"></i> Update
 							</a>
 							<div onclick="deletePasien(<?php echo $pasien['id_pasien'] ?>)" class="btn btn-danger btn-xs">
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
function deletePasien(id_pasien) {
    if (confirm("Are you sure?")) {
        // your deletion code
        $.ajax({
          url: window.location.href+"/deletePasien/"+id_pasien,
          context: document.body
        }).done(function() {
         window.location = window.location.href;
        });
    }
    return false;
}
</script>