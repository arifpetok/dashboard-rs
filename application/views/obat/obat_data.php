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
 			<h3 class="box-title">Data Obat</h3>

 			<div class="pull-right">
 				<a href="<?=site_url('obat/add')?>" class="btn btn-primary btn-flat">
 					<i class="fa fa-user-plus"></i> Create
 				</a>
 			</div>

 		</div>
 		<div class="box-body table-responsive">
 			<table class="table table-bordered table-striped">
 				<thead>
 					<tr>
 						<th>#</th>
 						<th>Nama Obat</th>
 						<th>Keterangan Obat</th>
 						<th>Actions</th>
 					</tr>
 				</thead>
 				<tbody>

				 	<?php $no=1;?>
 					<?php foreach($obats as $obat): ?>
 					<tr>
 						<td><?php echo $no; ?></td>
 						<td><?php echo $obat['nama_obat'] ?></td>
 						<td><?php echo $obat['keterangan_obat'] ?></td> 						
 						<td class="text-center" width="160px">
 							<a href="<?=site_url('obat/update/'. $obat['id_obat'])?>" class="btn btn-primary btn-xs">
 								<i class="fa fa-pencil"></i> Update
 							</a>
 							<div onclick="deleteObat(<?php echo $obat['id_obat'] ?>)" class="btn btn-danger btn-xs">
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
function deleteObat(id_obat) {
    if (confirm("Are you sure?")) {
        // your deletion code
        $.ajax({
          url: window.location.href+"/deleteObat/"+id_obat,
          context: document.body
        }).done(function() {
         window.location = window.location.href;
        });
    }
    return false;
}
</script>