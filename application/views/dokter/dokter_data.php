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
 <!-- <?php  echo "<pre>";print_r($dokters); echo "</pre>"; ?> -->
 <!-- Main content -->
 <section class="content">
 	<div class="box">
 		<div class="box-header">
 			<h3 class="box-title">Data Dokter</h3>

 			<div class="pull-right">
 				<a href="<?=site_url('dokter/add')?>" class="btn btn-primary btn-flat">
 					<i class="fa fa-user-plus"></i> Create
 				</a>
 			</div>

 		</div>
 		<div class="box-body table-responsive">
 			<table class="table table-bordered table-striped">
 				<thead>
 					<tr>
 						<th>#</th>
 						<th>Nama Dokter</th>
 						<th>Spesialis</th>
 						<th>Alamat</th>
 						<th>No Telp</th>
 						<th>Actions</th>
 					</tr>
 				</thead>
 				<tbody>
 					<?php $no=1;?>
 					<?php foreach($dokters as $dokter): ?>
 					<tr>
 						<td><?php echo $no; ?></td>
 						<td><?php echo $dokter['nama_dokter'] ?></td>
 						<td><?php echo $dokter['spesialis'] ?></td>
 						<td><?php echo $dokter['alamat'] ?></td>
 						<td><?php echo $dokter['no_telp'] ?></td>
 						<td class="text-center" width="260px">
						 	
 							<a href="<?=site_url('dokter/update/'. $dokter['id_dokter'])?>" class="btn btn-primary btn-xs">
 								<i class="fa fa-pencil"></i> Update
 							</a>
 							<div onclick="deleteDokter(<?php echo $dokter['id_dokter'] ?>)" class="btn btn-danger btn-xs">
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
function deleteDokter(id_dokter) {
    if (confirm("Are you sure?")) {
        // your deletion code
        $.ajax({
          url: window.location.href+"/deleteDokter/"+id_dokter,
          context: document.body
        }).done(function() {
         window.location = window.location.href;
        });
    }
    return false;
}
</script>