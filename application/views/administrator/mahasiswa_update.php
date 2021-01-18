<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
     Form Update Mahasiswa
    </div>

    <?php foreach($mahasiswa as $mhs) : ?>

    
    <?php echo form_open_multipart('administrator/mahasiswa/update_mahasiswa_aksi') ?>

    <div class="form-group">
    	<label>NISN</label>
        <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
    	<input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim ?>">
    	<?php echo form_error('nim', '<div class="text-danger small ml-3">','</div>') ?>
    	<label>Nama Mahasiswa</label>
    	<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $mhs->nama_lengkap ?>">
    	<?php echo form_error('nama_lengkap', '<div class="text-danger small ml-3">','</div>') ?>
    	<label>Alamat</label>
    	<input type="text" name="alamat" class="form-control" value="<?php echo $mhs->alamat ?>">
    	<?php echo form_error('alamat', '<div class="text-danger small ml-3">','</div>') ?>
    	<label>Email</label>
    	<input type="text" name="email" class="form-control" value="<?php echo $mhs->email ?>">
    	<?php echo form_error('email', '<div class="text-danger small ml-3">','</div>') ?>
    	<label>Telepon</label>
    	<input type="text" name="telepon" class="form-control" value="<?php echo $mhs->telepon ?>">
    	<?php echo form_error('telepon', '<div class="text-danger small ml-3">','</div>') ?>
    	<label>Tempat Lahir</label>
    	<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $mhs->tempat_lahir ?>">
    	<?php echo form_error('tempat_lahir', '<div class="text-danger small ml-3">','</div>') ?>
    	<label>Tanggal Lahir</label>
    	<input type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" class="form-control" value="<?php echo $mhs->tanggal_lahir ?>">
    	<?php echo form_error('tanggal_lahir', '<div class="text-danger small ml-3">','</div>') ?>
    	<label>Jenis Kelamin</label>
    	<select name="jenis_kelamin" class="form-control" value="<?php echo $mhs->jenis_kelamin ?>">
    		
    		<option>Laki-laki</option>
    		<option>Perempuan</option>
    	</select>
    	<?php echo form_error('jenis_kelamin', '<div class="text-danger small ml-3">','</div>') ?>
    	<label>Program Studi</label>
    	<select name="nama_prodi" class="form-control" value="<?php echo $mhs->nama_prodi ?>">
    		
    		<?php foreach($prodi as $prd) : ?>
    		<option value="<?php echo $prd->nama_prodi ?>"><?php echo $prd->nama_prodi; ?></option>
    		<?php endforeach; ?>
    	</select>
    	<?php echo form_error('prodi', '<div class="text-danger small ml-3">','</div>') ?>
    	<div class="form-group">
            <?php foreach($detail as $dt) : ?>
                <img class="img mt-5" src="<?php echo base_url(). 'assets/uploads/' .$mhs->photo?>" style="width: 150px; height:200px; object-fit: cover;">
            <?php endforeach; ?><br><br>
    		<label>Foto</label><br>
    		<input type="file" name="userfile" class="form-control " value="<?php echo $mhs->photo ?>" >
    	</div>

    	<button type="submit" class="btn btn-primary">Simpan</button>

    </div>
    <?php form_close(); ?>

    <?php endforeach; ?>
</div>