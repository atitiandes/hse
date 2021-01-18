<div class="container-fluid">

	<div class="alert alert-success" role="alert">
        List Jadwal
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('admninistrator/listjadwal/tambah_listjadwal', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>Tambah List jadwal</button>') ?>
	
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<th>NO</th>
			<th>Hari-1</th>
			<th>Waktu mulai-1</th>
			<th>Waktu selesai-1</th>
			<th>Hari-2</th>
			<th>Waktu mulai-2</th>
			<th>Waktu selesai-2</th>
			<th>Hari-3</th>
			<th>Waktu mulai-3</th>
			<th>Waktu selesai-3</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php 
		$no=1;
		foreach ($listjadwal as $lj): ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $lj->hari1 ?></td>
				<td><?php echo $lj->waktu_mulai1 ?></td>
				<td><?php echo $lj->waktu_selesai1 ?></td>
				<td><?php echo $lj->hari2 ?></td>
				<td><?php echo $lj->waktu_mulai2 ?></td>
				<td><?php echo $lj->waktu_selesai2 ?></td><td><?php echo $lj->hari3 ?></td>
				<td><?php echo $lj->waktu_mulai3 ?></td>
				<td><?php echo $lj->waktu_selesai3 ?></td>
				<td width="20px"><?php echo anchor('admninistrator/listjadwal/update/'.$lj->id_listjadwal, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
    			<td width="20px"><?php echo anchor('admninistrator/listjadwal/delete/' .$lj->id_listjadwal, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>
		<?php  endforeach; ?>
	</table>
</div>