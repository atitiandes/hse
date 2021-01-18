<div class="container-fluid">
	<br>
	 <div class="alert alert-success" role="alert">
        Level
    </div>

    
    <table class="table table-bordered table-striped table-hover">
    	<tr>
    		<th>NO</th>
    		<th>Nama Level</th>
    		<th>Tingkatan</th>
    		<!-- <th colspan="2">Aksi</th> -->
    	</tr>
    	

    	<?php 
    	$no = 1;
    	foreach ($level as $lvl) : ?>
    	<tr>
    		<td width="20px"><?php echo $no++ ?></td>
    		<td><?php echo $lvl->nama_level?></td>
    		<td><?php echo $lvl->tingkatan?></td>
    		<!-- <td width="20px"><div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div></td>
    		<td width="20px"><div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div></td> -->
    	</tr>

    	<?php endforeach; ?>
    </table>
</div>