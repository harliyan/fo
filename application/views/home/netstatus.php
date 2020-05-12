<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h3><strong><span><?= $icon ?></span> <?= $title ?></strong></h3>
	
	<!-- <h1 class="h3 mb-4 text-gray-800"></h1> -->
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-12">
				<!-- Custom Tabs -->
				<div class="box-body">
					<div class="card">
						<div class="card-header d-flex p-0">
						</div><!-- /.card-header -->
						<div class="card-body">
							<div class="tab-content">
								<?php
								if($this->session->flashdata('successDelete')){
									echo
									'<div class="alert alert-info">'.
									$this->session->flashdata('successDelete').'</div>';
								} ?>
								<br>
								<button type="button" data-toggle="modal" data-target="#tambah-data" class="btn btn-success mb-4"><i class="fas fa-fw fa-plus"></i> Tambah Cluster</button>
								<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

								<?php if($this->session->flashdata('success')){ ?>  
									<div class="alert alert-success">  
										<a href="#" class="close" data-dismiss="alert">&times;</a>  
										<strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>  
									</div>  
								<?php } else if($this->session->flashdata('error')){ ?>  
									<div class="alert alert-danger">  
										<a href="#" class="close" data-dismiss="alert">&times;</a>  
										<strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>  
									</div>  
								<?php } else if($this->session->flashdata('warning')){ ?>  
									<div class="alert alert-warning">  
										<a href="#" class="close" data-dismiss="alert">&times;</a>  
										<strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>  
									</div>  
								<?php } else if($this->session->flashdata('info')){ ?>  
									<div class="alert alert-info">  
										<a href="#" class="close" data-dismiss="alert">&times;</a>  
										<strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>  
									</div>  
								<?php } ?>  
								<table class="table table-hover">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Cluster</th>
											<th scope="col">ClusterID</th>
											<!-- <th scope="col">Action</th> -->
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php foreach ($cluster as $c) : ?>
											<tr>
												<th scope="row"><?= $i; ?></th>
												<td><?php echo $c['cluster'] ?></td>
												<td><?php echo $c['id'] ?></td>
												<!-- <td>
													<a class="badge badge-warning" data-toggle="modal" data-target="#edit-data<?php echo $c['id'] ?>"> Edit</a>
													<a href="<?php echo base_url() ?>netstatus/delete_cluster/<?php echo $c['id'] ?>" class="badge badge-danger">delete</a>
												</td> -->

											</tr>
											<?php $i++; ?>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		

		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Tambah Cluster</h4>
					</div>

					<form class="form-horizontal" action="<?php echo base_url('admin/admin/tambah')?>" method="post" enctype="multipart/form-data" role="form">
						<div class="modal-body">
							<div class="form-group">
								<label class="col-lg-12 col-sm-12 control-label" for="cluster">Nama Cluster</label>
								<div class="col-lg-12">
									<input type="text" class="form-control" name="cluster" placeholder="" required>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php foreach ($cluster as $c) : ?> 
	<div class="modal fade" id="edit-data<?php echo $c['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="myModalLabel">Edit Cluster</h3>
				</div>
				<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/barang/edit_barang'?>">
					<div class="modal-body">
						<div class="form-group">
							<label class="control-label col-xs-3">ClusterID</label>
							<div class="col-xs-8">
								<input name="id" value="<?php echo $c['id'] ?>" class="form-control" type="text" placeholder="ClusterID" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-3" >Cluster</label>
							<div class="col-xs-8">
								<input name="cluster" value="<?php echo $c['cluster'] ?>" class="form-control" type="text" placeholder="Cluster" required>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn btn-info">Update</button>
							<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php endforeach;?> 
</div>
</div>
