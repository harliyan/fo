<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
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

<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add Data OPD</a>
<table class="table table-hover display" id="example2">
    <thead>
        <tr>
         <th scope="col" class="text-center">#</th>
         <th class="text-center" scope="col">OPD_id</th>
         <th class="text-center" scope="col">OPD</th>
         <th class="text-center" scope="col">Nama OPD</th>
         <th class="text-center" scope="col">Alamat</th>
         <th class="text-center" scope="col">Email</th>
         <th class="text-center" scope="col">Kontak</th>
         <th scope="col" class="text-center">Action</th>
     </tr>
 </thead>
 <tbody>
    <?php $i = 1; ?>
    <?php foreach ($opd as $o) : ?>
        <tr>
            <th scope="row" class="text-center"><?= $i; ?></th>
            <td class="text-center"><?php echo $o['id'] ?></td>
            <td class="text-center"><?php echo $o['opd'] ?></td>
            <td class="text-center"><?php echo $o['opd_nama'] ?></td>
            <td class="text-center"><?php echo $o['alamat'] ?></td>
            <td class="text-center"><?php echo $o['email'] ?></td>
            <td class="text-center"><?php echo $o['kontak'] ?></td>
            <td class="text-center">
                <a href="" data-toggle="modal" data-target="#edit-data<?php echo $o['id'];?>" class="badge badge-success">edit</a>
                <a href="<?php echo base_url() ?>data/hapusopd/<?php echo $o['id'] ?>" class="badge badge-danger">delete</a>
            </td>

        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
</tbody>
</table>
<br>
<!-- /.container-fluid -->

</div>
</div>

<!-- Modal Add-->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add Data OPD</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                   <span aria-hidden="true">&times;</span>                                                                                                                                                             
               </button>
           </div>
           <form action="<?= base_url('data/opd') ?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label>OPD</label>
                    <input type="text" class="form-control" id="opd" name="opd" aria-describedby="emailHelp" placeholder="OPD">
                </div>
                <div class="form-group">
                    <label>Nama OPD</label>
                    <input type="text" class="form-control" id="opd_nama" name="opd_nama" aria-describedby="emailHelp" placeholder="Nama Lengkap OPD">
                </div>
                <div class="form-group">
                    <label>Alamat OPD</label>
                    <textarea rows="4" type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" placeholder="Alamat Lengkap OPD"></textarea>
                </div>
                <div class="form-group">
                    <label>Email OPD</label>
                    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="emailopd@gmail.com">
                </div>
                <div class="form-group">
                    <label>Kontak OPD</label>
                    <input type="text" class="form-control" id="kontak" name="kontak" aria-describedby="emailHelp" placeholder="No Telp OPD">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
</div>
</div>
<!-- End Modal Add-->

<!-- Modal Edit -->
<?php foreach ($opd as $o) : ?> 
    <div class="modal fade" id="edit-data<?php echo $o['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Edit Data OPD</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url().'data/edit_jointing'?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-xs-8">
                                <input name="kode_barang" value="<?php echo $o['id'] ?>" class="form-control" type="text" placeholder="Data OPD" hidden>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-8">
                                <input name="opd" value="<?php echo $o['opd'] ?>" class="form-control" type="text" placeholder="OPD">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-8">
                                <input name="opd_nama" value="<?php echo $o['opd_nama'] ?>" class="form-control" type="text" placeholder="Nama Lengkap OPD">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-8">
                                <input name="alamat" value="<?php echo $o['alamat'] ?>" class="form-control" type="text" placeholder="Alamat Lengkap OPD">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-8">
                                <input name="email" value="<?php echo $o['email'] ?>" class="form-control" type="text" placeholder="Email OPD">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-8">
                                <input name="kontak" value="<?php echo $o['kontak'] ?>" class="form-control" type="text" placeholder="Kontak OPD">
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
    </div>
<?php endforeach;?> 
<!--End Modal Edit -->
