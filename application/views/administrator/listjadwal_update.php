<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
     Edit List Jadwal
    </div>

    <?php foreach($listjadwal as $lj) : ?>
    	<form method="post" action="<?php echo base_url('administrator/listjadwal/update_aksi') ?>">
    		
    			
                <div class="form-group">
                        <label>Hari-1</label>
                        <input type="hidden" name="id_listjadwal" class="form-control" value="<?php echo $lj->id_listjadwal ?>"> 
                        <select name="hari1" class="form-control">
                            <option value="">--Pilih Hari--</option>
                            <option>-</option>
                            <option>Senin</option>
                            <option>Selasa</option>
                            <option>Rabu</option>
                            <option>Kamis</option>
                            <option>Jumat</option>
                            <option>Sabtu</option>
                            <option>Minggu</option>
                        </select>
                </div>
                <div class="form-group">
                        <label>Waktu Mulai-1</label>
                        <select name="waktu_mulai1" class="form-control">
                            <option value="">--Pilih Waktu Mulai--</option>
                            <option>-</option>
                            <option>12.00</option>
                            <option>12.15</option>
                            <option>12.30</option>
                            <option>12.45</option>
                            <option>13.00</option>
                            <option>13.15</option>
                            <option>13.30</option>
                            <option>13.45</option>
                            <option>14.00</option>
                            <option>14.15</option>
                            <option>14.30</option>
                            <option>14.45</option>
                            <option>15.00</option>
                            <option>15.15</option>
                            <option>15.30</option>
                            <option>15.45</option>
                            <option>16.00</option>
                            <option>16.15</option>
                            <option>16.30</option>
                            <option>16.45</option>
                            <option>17.00</option>
                            <option>17.15</option>
                            <option>17.30</option>
                            <option>17.45</option>
                            <option>18.00</option>
                            <option>18.15</option>
                            <option>18.30</option>
                            <option>18.45</option>
                            <option>19.00</option>
                            <option>19.15</option>
                            <option>19.30</option>
                            <option>19.45</option>
                            <option>20.00</option>
                            <option>20.15</option>
                            <option>20.30</option>
                            <option>20.45</option>
                            <option>21.00</option>
                        </select>
                </div>

                <div class="form-group">
                        <label>Waktu Selesai-1</label>
                        <select name="waktu_selesai1" class="form-control">
                            <option value="">--Pilih Waktu Mulai--</option>
                            <option>-</option>
                            <option>12.00</option>
                            <option>12.15</option>
                            <option>12.30</option>
                            <option>12.45</option>
                            <option>13.00</option>
                            <option>13.15</option>
                            <option>13.30</option>
                            <option>13.45</option>
                            <option>14.00</option>
                            <option>14.15</option>
                            <option>14.30</option>
                            <option>14.45</option>
                            <option>15.00</option>
                            <option>15.15</option>
                            <option>15.30</option>
                            <option>15.45</option>
                            <option>16.00</option>
                            <option>16.15</option>
                            <option>16.30</option>
                            <option>16.45</option>
                            <option>17.00</option>
                            <option>17.15</option>
                            <option>17.30</option>
                            <option>17.45</option>
                            <option>18.00</option>
                            <option>18.15</option>
                            <option>18.30</option>
                            <option>18.45</option>
                            <option>19.00</option>
                            <option>19.15</option>
                            <option>19.30</option>
                            <option>19.45</option>
                            <option>20.00</option>
                            <option>20.15</option>
                            <option>20.30</option>
                            <option>20.45</option>
                            <option>21.00</option>
                        </select>
                </div>

                <div class="form-group">
                        <label>Hari-2</label>
                        <select name="hari2" class="form-control">
                            <option value="">--Pilih Hari--</option>
                            <option>-</option>
                            <option>Senin</option>
                            <option>Selasa</option>
                            <option>Rabu</option>
                            <option>Kamis</option>
                            <option>Jumat</option>
                            <option>Sabtu</option>
                            <option>Minggu</option>
                        </select>
                </div>
                <div class="form-group">
                        <label>Waktu Mulai-2</label>
                        <select name="waktu_mulai2" class="form-control">
                            <option value="">--Pilih Waktu Mulai--</option>
                            <option>-</option>
                            <option>12.00</option>
                            <option>12.15</option>
                            <option>12.30</option>
                            <option>12.45</option>
                            <option>13.00</option>
                            <option>13.15</option>
                            <option>13.30</option>
                            <option>13.45</option>
                            <option>14.00</option>
                            <option>14.15</option>
                            <option>14.30</option>
                            <option>14.45</option>
                            <option>15.00</option>
                            <option>15.15</option>
                            <option>15.30</option>
                            <option>15.45</option>
                            <option>16.00</option>
                            <option>16.15</option>
                            <option>16.30</option>
                            <option>16.45</option>
                            <option>17.00</option>
                            <option>17.15</option>
                            <option>17.30</option>
                            <option>17.45</option>
                            <option>18.00</option>
                            <option>18.15</option>
                            <option>18.30</option>
                            <option>18.45</option>
                            <option>19.00</option>
                            <option>19.15</option>
                            <option>19.30</option>
                            <option>19.45</option>
                            <option>20.00</option>
                            <option>20.15</option>
                            <option>20.30</option>
                            <option>20.45</option>
                            <option>21.00</option>
                        </select>
                </div>

                <div class="form-group">
                        <label>Waktu Selesai-2</label>
                        <select name="waktu_selesai2" class="form-control">
                            <option value="">--Pilih Waktu Selesai--</option>
                            <option>-</option>
                            <option>12.00</option>
                            <option>12.15</option>
                            <option>12.30</option>
                            <option>12.45</option>
                            <option>13.00</option>
                            <option>13.15</option>
                            <option>13.30</option>
                            <option>13.45</option>
                            <option>14.00</option>
                            <option>14.15</option>
                            <option>14.30</option>
                            <option>14.45</option>
                            <option>15.00</option>
                            <option>15.15</option>
                            <option>15.30</option>
                            <option>15.45</option>
                            <option>16.00</option>
                            <option>16.15</option>
                            <option>16.30</option>
                            <option>16.45</option>
                            <option>17.00</option>
                            <option>17.15</option>
                            <option>17.30</option>
                            <option>17.45</option>
                            <option>18.00</option>
                            <option>18.15</option>
                            <option>18.30</option>
                            <option>18.45</option>
                            <option>19.00</option>
                            <option>19.15</option>
                            <option>19.30</option>
                            <option>19.45</option>
                            <option>20.00</option>
                            <option>20.15</option>
                            <option>20.30</option>
                            <option>20.45</option>
                            <option>21.00</option>
                        </select>
                </div>

                <div class="form-group">
                        <label>Hari-3</label>
                        <select name="hari3" class="form-control">
                            <option value="">--Pilih Hari--</option>
                            <option>-</option>
                            <option>Senin</option>
                            <option>Selasa</option>
                            <option>Rabu</option>
                            <option>Kamis</option>
                            <option>Jumat</option>
                            <option>Sabtu</option>
                            <option>Minggu</option>
                        </select>
                </div>
                <div class="form-group">
                        <label>Waktu Mulai-3</label>
                        <select name="waktu_mulai3" class="form-control">
                            <option value="">--Pilih Waktu Mulai--</option>
                            <option>-</option>
                            <option>12.00</option>
                            <option>12.15</option>
                            <option>12.30</option>
                            <option>12.45</option>
                            <option>13.00</option>
                            <option>13.15</option>
                            <option>13.30</option>
                            <option>13.45</option>
                            <option>14.00</option>
                            <option>14.15</option>
                            <option>14.30</option>
                            <option>14.45</option>
                            <option>15.00</option>
                            <option>15.15</option>
                            <option>15.30</option>
                            <option>15.45</option>
                            <option>16.00</option>
                            <option>16.15</option>
                            <option>16.30</option>
                            <option>16.45</option>
                            <option>17.00</option>
                            <option>17.15</option>
                            <option>17.30</option>
                            <option>17.45</option>
                            <option>18.00</option>
                            <option>18.15</option>
                            <option>18.30</option>
                            <option>18.45</option>
                            <option>19.00</option>
                            <option>19.15</option>
                            <option>19.30</option>
                            <option>19.45</option>
                            <option>20.00</option>
                            <option>20.15</option>
                            <option>20.30</option>
                            <option>20.45</option>
                            <option>21.00</option>
                        </select>
                </div>

                <div class="form-group">
                        <label>Waktu Selesai-3</label>
                        <select name="waktu_selesai3" class="form-control">
                            <option value="">--Pilih Waktu Selesai--</option>
                            <option>-</option>
                            <option>12.00</option>
                            <option>12.15</option>
                            <option>12.30</option>
                            <option>12.45</option>
                            <option>13.00</option>
                            <option>13.15</option>
                            <option>13.30</option>
                            <option>13.45</option>
                            <option>14.00</option>
                            <option>14.15</option>
                            <option>14.30</option>
                            <option>14.45</option>
                            <option>15.00</option>
                            <option>15.15</option>
                            <option>15.30</option>
                            <option>15.45</option>
                            <option>16.00</option>
                            <option>16.15</option>
                            <option>16.30</option>
                            <option>16.45</option>
                            <option>17.00</option>
                            <option>17.15</option>
                            <option>17.30</option>
                            <option>17.45</option>
                            <option>18.00</option>
                            <option>18.15</option>
                            <option>18.30</option>
                            <option>18.45</option>
                            <option>19.00</option>
                            <option>19.15</option>
                            <option>19.30</option>
                            <option>19.45</option>
                            <option>20.00</option>
                            <option>20.15</option>
                            <option>20.30</option>
                            <option>20.45</option>
                            <option>21.00</option>
                        </select>
                </div>

    		<button type="submit" class="btn btn-sm btn-primary">Simpan</button>



    	</form>
	<?php endforeach; ?>

</div>