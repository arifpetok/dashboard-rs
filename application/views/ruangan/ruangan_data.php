 <section class="content-header">
 	<h1>
 		Ruangan
 		<small>Pengguna</small>
 	</h1>
 	<ol class="breadcrumb">
 		<li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
 		<li><a href="#">Ruangan</a></li>
 	</ol>
 </section>

 <!-- Main content -->
 <section class="content">
 	<div class="box">
 		<div class="box-header">
 			<h3 class="box-title">Data Ruangan</h3>

 			<div class="pull-right">
 				<a href="<?=site_url('ruangan/add')?>" class="btn btn-primary btn-flat">
 					<i class="fa fa-user-plus"></i> Create
 				</a>
 			</div>

 		</div>
 		<div class="box-body table-responsive">
 			
 			<table class="table table-bordered table-striped">
 				<thead>
 					<tr>
 						<th>#</th>
 						<th>Nama Ruangan</th>
 						<th>Nama Gedung</th>
 						<th>Actions</th>
 					</tr>
 				</thead>
 				<tbody>

				 
				 	<?php $no=1;?>
 					<?php foreach($ruangans as $ruangan): ?>
 					<tr>
 						<td><?php echo $no; ?></td>
 						<td><?php echo $ruangan['nama_ruangan'] ?></td>
 						<td><?php echo $ruangan['gedung'] ?></td> 						
 						<td class="text-center" width="160px">
 							<a href="<?=site_url('ruangan/update/'. $ruangan['id_ruangan'])?>" class="btn btn-primary btn-xs">
 								<i class="fa fa-pencil"></i> Update
 							</a>
 							<div onclick="deleteRuangan(<?php echo $ruangan['id_ruangan'] ?>)" class="btn btn-danger btn-xs">
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
function deleteRuangan(id_ruangan) {
    if (confirm("Are you sure?")) {
        // your deletion code
        $.ajax({
          url: window.location.href+"/deleteRuangan/"+id_ruangan,
          context: document.body
        }).done(function() {
         window.location = window.location.href;
        });
    }
    return false;
}
</script>