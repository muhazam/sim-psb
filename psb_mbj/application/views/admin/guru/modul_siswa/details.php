<section class="content-header">
  <h1>
      Detail Santri / Siswa
  </h1>
  <ol class="breadcrumb">
    <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Details Santri / Siswa</li>
  </ol>
</section>

<section class='content'>
  <div class='row'>
    <div class='col-xs-12'>
      <div class='box box-warning'>            
        <div class="box-header container">
          <li class="box-title">Data Santri / Siswa</li>
        </div><br>
          <div class="box-body">
            <div class='col-xs-12'>
              <table class="table table-responsive table-bordered table-striped table-hover dataTable">
                <tbody>
                  <tr><td>NAMA LENGKAP</td><td><?= $name; ?></td></tr>
                  <tr><td>NAMA PANGGILAN</td><td><?= $nick_name; ?></td></tr>
                  <tr><td>TANGGAL LAHIR</td><td><?= $birth_date; ?></td></tr>
                  <tr><td>TEMPAT LAHIR</td><td><?= $birth_place; ?></td></tr>
                  <tr><td>JENIS KELAMIN</td><td><?= $gender; ?></td></tr>
                  <tr><td>JENJANG KELAS</td><td><?= $education_level; ?></td></tr>
                  <tr><td>MENDAFTAR DI KELAS?</td><td><?= $to_grade; ?></td></tr>
                  <tr><td>NAMA SEKOLAH SEBELUMNYA</td><td><?= $school_previous; ?></td></tr>
                  <tr><td>ALAMAT SEKOLAH SEBELUMNYA</td><td><?= $school_address; ?></td></tr>
                </tbody>
              </table><br>
            </div>
          </div>
      </div><!-- /.box -->
    </div><!-- /.col -->

    <div class='col-xs-12'>
      <div class='box box-warning'>            
        <div class="box-header container">
          <li class="box-title">Data Orang Tua Ayah</li>
        </div><br>
          <div class="box-body">
            <div class='col-xs-12'>
              <table class="table table-responsive table-bordered table-striped table-hover dataTable">
                <tbody>
                  <tr><td>NAMA AYAH</td><td><?= $father_name; ?></td></tr>
                  <tr><td>TANGGAL LAHIR AYAH</td><td><?= $father_birth_date; ?></td></tr>
                  <tr><td>TEMPAT LAHIR AYAH</td><td><?= $father_birth_place; ?></td></tr>
                  <tr><td>PENDIDIKAN TERAKHIR AYAH</td><td><?= $father_education; ?></td></tr>
                  <tr><td>PEKERJAAN AYAH</td><td><?= $father_job; ?></td></tr>
                  <tr><td>NO TELEPON AYAH</td><td><?= $father_phone; ?></td></tr>
                  <tr><td>NO WHATSAPP AYAH</td><td><?= $father_whatsapp; ?></td></tr>
                </tbody>
              </table><br>
            </div>
          </div>
      </div><!-- /.box -->
    </div><!-- /.col -->
    <div class='col-xs-12'>
      <div class='box box-warning'>            
        <div class="box-header container">
          <li class="box-title">Data Orang Tua Ibu</li>
        </div><br>
          <div class="box-body">
            <div class='col-xs-12'>
              <table class="table table-responsive table-bordered table-striped table-hover dataTable">
                <tbody>
                  <tr><td>NAMA IBU</td><td><?php echo $mother_name; ?></td></tr>
                  <tr><td>TANGGAL LAHIR IBU</td><td><?php echo $mother_birth_date; ?></td></tr>
                  <tr><td>TEMPAT LAHIR IBU</td><td><?php echo $mother_birth_place; ?></td></tr>
                  <tr><td>PENDIDIKAN TERAKHIR IBU</td><td><?php echo $mother_education; ?></td></tr>
                  <tr><td>PEKERJAAN IBU</td><td><?php echo $mother_job; ?></td></tr>
                  <tr><td>NO TELEPON IBU</td><td><?php echo $mother_phone; ?></td></tr>
                  <tr><td>NO WHATSAPP IBU</td><td><?php echo $mother_whatsapp; ?></td></tr>
                </tbody>
              </table><br>
            </div>
          </div>
      </div><!-- /.box -->
    </div><!-- /.col -->
    <div class='col-xs-12'>
      <div class='box box-warning'>            
        <div class="box-header container">
          <li class="box-title">CATATAN</li>
        </div><br>
          <div class="box-body">
            <div class='col-xs-12'>
              <table class="table table-responsive table-bordered table-striped table-hover dataTable">
                <tbody>
                  <td><?php echo $note; ?></td>
                </tbody>
              </table><br>
            </div>
          </div>
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
