
<div class="container-fluid"><br>
	<div class="alert alert-success" role="alert">
       Daftar Users
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('administrator/users/tambah_users', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>Tambah Users</button>') ?>

    <table class="table table-bordered table-hover table-striped">
    	<tr>
    		<th>NO</th>
    		<th>USERNAME</th>
    		<th>EMAIL</th>
    		<th>LEVEL</th>
    		<!-- <th>BLOKIR</th> -->
    		<th colspan="2">AKSI</th>

    		<?php 
    		$no=1;
    		foreach ($user as $usr) : ?>
    			<tr>
    				<td><?php echo $no++ ?></td>
    				<td><?php echo $usr->username ?></td>
    				<td><?php echo $usr->email ?></td>
    				<td><?php echo $usr->level ?></td>
    				<!-- <td><?php echo $usr->blokir ?></td> -->
    				<td width="20px"><?php echo anchor('administrator/users/update/' .$usr->id_user, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
    			<td width="20px"><?php echo anchor('administrator/users/delete/' .$usr->id_user, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
				</tr>
    			</tr>
    		<?php endforeach; ?>
    	</tr>
    </table>
</div>