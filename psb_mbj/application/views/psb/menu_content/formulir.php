<br><section class="content-header">
  <h1>
    Formulir Pendaftaran Siswa Baru
  </h1>
  <ol class="breadcrumb">
    <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Database Santri</li>
  </ol>
</section>
<br>

<section class="content">
	<?php
    	echo form_open_multipart('psb/register', 'role="form"');
    ?>
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-warning">
				<div class="box-header with-border">
				  <h3 class="box-title">Data Siswa</h3>

				  <div class="box-tools pull-right">
				    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				  </div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <div class="row">
				    <div class="col-md-6">
				      <div class="form-group">
		                <label>Nama Lengkap</label>
		                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama lengkap" required>
		              </div>
		              <div class="form-group">
		                <label>Nama Panggilan</label>
		                <input type="text" class="form-control" id="nick_name" name="nick_name" placeholder="Masukkan Nama panggilan" required>
		              </div>
					  <div class="form-group">
		                <label>Tempat Lahir</label>
		                <input type="text" class="form-control" id="birth_place" name="birth_place" placeholder="Masukkan Tempat Lahir" required>
		              </div>
		              <div class="form-group">
		                <label>Tanggal Lahir</label>
		                <input type="text" class="form-control" id="birth_date" name="birth_date" placeholder="Masukkan Tanggal Lahir" required>
		              </div>
				    </div><br>

				    <!-- /.col -->
				    <div class="col-md-6">
					    <div class="form-group">
			                <label class="col-sm-4 control-label" for="form-field-1">
			                    Jenis Kelamin
			                </label>
			                <div class="col-sm-4">
			                    <?php
			                    echo form_dropdown('gender', array('L' => 'LAKI LAKI', 'P' => 'PEREMPUAN'), null, "class='form-control' required='' name='gender'");
			                    ?>
			                </div>
			            </div><br><br>
			            <div class="form-group">
			                <label class="col-sm-4 control-label" for="form-field-1">
			                    Pilih Jenjang Pendidikan
			                </label>
			                <div class="col-sm-4">
			                    <?php
			                    echo form_dropdown('education_level', array('TPA' => 'TPA', 'PAUD' => 'PAUD', 'SD_ASRAMA' => 'SD ASRAMA', 'SD_NON_ASRAMA' => 'SD NON ASRAMA', 'SMP' => 'SMP'), null, "class='form-control' required='' name='education_level'");
			                    ?>
			                </div>
			            </div><br><br>
			            <div class="form-group">
			                <label class="col-sm-4 control-label">Untuk Kelas</label>
			                <div class="col-sm-4">
				                <input type="text" class="form-control" name="to_grade" id="to_grade" placeholder="Masukkan Kelas" required>
			                </div>
		              	</div><br><br>
		              	<div class="form-group">
			                <label class="col-sm-4 control-label">Nama Sekolah Sebelumnya</label>
			                <div class="col-sm-8">
				                <input type="text" class="form-control" id="school_previous" name="school_previous" placeholder="" required>
			                </div>
		              	</div><br><br>
		              	<div class="form-group">
			                <label class="col-sm-4 control-label">Alamat Sekolah Sebelumnya</label>
			                <div class="col-sm-8">
				                <input type="text" class="form-control" id="school_address" name="school_address" placeholder="" required>
			                </div>
		              	</div>
						
				    </div>
				    <!-- /.col -->
				  </div>
				  <!-- /.row -->
				</div>
			</div>
		</div>
			
		<div class="col-xs-6">
			<div class="box box-warning">
				<div class="box-header with-border">
				  <h3 class="box-title">Data Orang Tua</h3><br>
				  <h3 class="box-title">Ayah</h3>

				  <div class="box-tools pull-right">
				    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				  </div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <div class="row">
				    <div class="col-md-6">
				      <div class="form-group">
		                <label>Nama Ayah</label>
		                <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Masukkan Nama Ayah" required>
		              </div>
		              <div class="form-group">
		                <label>Tempat Lahir Ayah</label>
		                <input type="text" class="form-control" id="father_birth_place" name="father_birth_place" placeholder="Masukkan Nama panggilan" required>
		              </div>
					  <div class="form-group">
		                <label>Tanggal Lahir Ayah</label>
		                <input type="text" class="form-control" id="father_birth_date" name="father_birth_date" placeholder="Masukkan Tempat Lahir" required>
		              </div><br>
		              <div class="form-group">
		                <label class="col-sm-6 control-label" for="form-field-1">Pendidikan Terakhir Ayah</label>
		                <div class="col-sm-5 ">
		                    <?php
		                    echo form_dropdown('father_education', array('SD' => 'SD', 'SMP' => 'SMP', 'SMA' => 'SMA', 'D' => 'D', 'S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3'), null, "class='form-control' required='' name='father_education'");
		                    ?>
						</div>
		              </div>
				    </div>

				    <!-- /.col -->
				    <div class="col-md-6">
					    <div class="form-group">
		                	<label>Pekerjaan Ayah</label>
		                	<input type="text" class="form-control" id="father_job" name="father_job" placeholder="Masukkan Pekerjaan ayah" required>
		              	</div>
			            <div class="form-group">
			                <label>No Telepon Ayah</label>
			                <input type="text" class="form-control" id="father_phone" name="father_phone" placeholder="Masukkan No Telepon" required>
		              	</div>
		              	<div class="form-group">
			                <label>No Whatsapp</label>
			                <input type="text" class="form-control" id="father_whatsapp" name="father_whatsapp" placeholder="Masukkan No whatsapp" required>
		              	</div>
				    </div>
				    <!-- /.col -->
				  </div>
				  <!-- /.row -->
				</div>
			</div>
		</div>

		<div class="col-xs-6">
			<div class="box box-warning">
				<div class="box-header with-border">
				  <h3 class="box-title">Data Orang Tua</h3><br>
				  <h3 class="box-title">Ibu</h3>

				  <div class="box-tools pull-right">
				    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				  </div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <div class="row">
				    <div class="col-md-6">
				      <div class="form-group">
		                <label>Nama Ibu</label>
		                <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Masukkan Nama Ibu" required>
		              </div>
		              <div class="form-group">
		                <label>Tempat Lahir Ibu</label>
		                <input type="text" class="form-control" id="mother_birth_place" name="mother_birth_place" placeholder="Masukkan tempat lahir" required>
		              </div>
					  <div class="form-group">
		                <label>Tanggal Lahir Ibu</label>
		                <input type="text" class="form-control" id="mother_birth_date" name="mother_birth_date" placeholder="Masukkan tanggal Lahir" required>
		              </div><br>
		              <div class="form-group">
		                <label class="col-sm-6 control-label" for="form-field-1">Pendidikan Terakhir Ibu</label>
		                <div class="col-sm-5 ">
		                    <?php
		                    echo form_dropdown('mother_education', array('SD' => 'SD', 'SMP' => 'SMP', 'SMA' => 'SMA', 'D' => 'D', 'S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3'), null, "class='form-control' required='' name='mother_education'");
		                    ?>
						</div>
		              </div>
				    </div>

				    <!-- /.col -->
				    <div class="col-md-6">
					    <div class="form-group">
		                	<label>Pekerjaan Ibu</label>
		                	<input type="text" class="form-control" id="mother_job" name="mother_job" placeholder="Masukkan Pekerjaan Ibu" required>
		              	</div>
			            <div class="form-group">
			                <label>No Telepon Ibu</label>
			                <input type="text" class="form-control" id="mother_phone" name="mother_phone" placeholder="Masukkan No Telepon" required>
		              	</div>
		              	<div class="form-group">
			                <label>No Whatsapp</label>
			                <input type="text" class="form-control" id="mother_whatsapp" name="mother_whatsapp" placeholder="Masukkan No whatsapp" required>
		              	</div>
				    </div>
				    <!-- /.col -->
				  </div>
				  <!-- /.row -->
				</div>
			</div>	
			</div>
		</div>
	<div class="box-footer">
      	<div class="form-group col-xs-12">
            <label>Catatan</label>
            <!-- <input type="text" class="form-control" name="note" placeholder="Masukkan Catatan"> -->
            <textarea name="note" class="form-control" cols="20" rows="5" placeholder="Masukkan Catatan" required></textarea>
      	</div>
	    <div class="col-xs-12">
	        <button type="submit" name="submit" class="btn btn-warning btn-lg btn-flat text-black" title="submit">Daftar</button>
	    </div>
	</div>
	<?php echo form_close(); ?>
</section>