 <section class="content-header">
 	<h1>
 		Post
 		<small>Pengguna</small>
 	</h1>
 	<ol class="breadcrumb">
 		<li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
 		<li><a href="#">Post</a></li>
 	</ol>
 </section>
 <!-- Main content -->
 <section class="content">
 	<div class="box">
 		<div class="box-header">
 			<h3 class="box-title">Data Post</h3>

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
 						<th>Judul</th>
 						<th>content</th>
 						<th>Tanggal Publish</th>
 						<th>Penulis</th>
 						<th>Actions</th>
 					</tr>
 				</thead>
 				<tbody>
 					<?php $no=1;?>
 					<?php foreach($posts as $post): ?>
 					<tr>
 						<td><?php echo $no; ?></td>
 						<td><?php echo $post['title'] ?></td>
 						<td><?php echo $post['content'] ?></td>
 						<td><?php echo $post['create_time'] ?></td>
 						<td><?php echo $post['name'] ?></td>
 						<td class="text-center" width="260px">
						 	
 						 <a href="<?=base_url()?>front" class="btn btn-primary btn-xs">
 								<i class="fa fa-eye"></i> view
 							</a>
 							<a href="<?=site_url('post/update/'. $post['id_post'])?>" class="btn btn-primary btn-xs">
 								<i class="fa fa-pencil"></i> Update
 							</a>
 							<div onclick="deletePost(<?php echo $post['id_post'] ?>)" class="btn btn-danger btn-xs">
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
function deletePost(id_post) {
    if (confirm("Are you sure?")) {
        // your deletion code
        $.ajax({
          url: window.location.href+"/deletePost/"+id_post,
          context: document.body
        }).done(function() {
         window.location = window.location.href;
        });
    }
    return false;
}
</script>