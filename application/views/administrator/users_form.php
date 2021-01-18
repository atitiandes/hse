<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
       Form Tambah Users
    </div>

    <form method="post" action="<?php echo base_url('administrator/users/tambah_users_aksi') ?>">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Masukkan Username" class="form-control">
			<?php echo form_error('username', '<div class="text-danger small" ml-3>') ?>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="text" name="password" placeholder="Masukkan Password" class="form-control">
			<?php echo form_error('password', '<div class="text-danger small" ml-3>') ?>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" placeholder="Masukkan Password" class="form-control">
			<?php echo form_error('email', '<div class="text-danger small" ml-3>') ?>
		</div>
		<div class="form-group">
			<label>Level</label>
			<select name="level" class="form-control">
				<?php
				if($level == 'admin'){
					?>
				
					<option value="admin" selected>Admin</option>
					<option value="siswa">Siswa</option>
					<option value="tutor">Tutor</option>
				<?php 
				}
				elseif($level == 'siswa')
				{

				 ?>

				 <option value="admin" >Admin</option>
					<option value="siswa" selected>Siswa</option>
					<option value="tutor">Tutor</option>

				<?php 
				}
				elseif($level == 'tutor')
				{

				 ?>

				 <option value="admin" >Admin</option>
					<option value="siswa">Siswa</option>
					<option value="tutor" selected>Tutor</option>

					<?php 
					}
					else
					{

					
					?>
					<option value="admin" >Admin</option>
					<option value="siswa">Siswa</option>
					<option value="tutor">Tutor</option>
					<?php 
					} ?>
			</select>
			<?php echo form_error('level', '<div class="text-danger small" ml-3>') ?>
		</div>


		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>

</div>