<section class="content-header">
  <h1>
    <i class="fa fa-mortar-board">
    </i>
      Database Siswa Baru Daftar
      <small>Advanced Tables</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Database Siswa Baru Daftar</li>
  </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header breadcrumb">
              <li class="box-title">Data Siswa Baru</li>&nbsp &nbsp 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              
                <div class="row">
                  <div class="col-sm-12">
                    
                    <table id="mytable" class="table table-hover dataTable" role="grid" aria-describedby="example1_info">
                      <thead>
                        <tr >
                          <th >NO</th>
                          <th class="sorting">NAMA</th>
                          <th class="sorting">NAMA PANGGILAN</th>
                          <th class="sorting">TEMPAT LAHIR</th>
                          <th class="sorting">TANGGAL LAHIR</th>
                          <th class="sorting">JENIS KELAMIN</th>
                          <th class="sorting">MENDAFTAR DI KELAS?</th>
                          <th>AKSI</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        
                      </tbody> 
                    </table>
                  
                  </div>
                </div>
              
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        var t = $('#mytable').DataTable({
            "responsive": true,
            "scrollX": true,
            "ajax": "<?php echo site_url('psb/datas'); ?>",
            "order": [[ 1, 'asc' ]],
            
            "columns": [
                {
                    "data": null,
                    "sClass": "text-center",
                    "orderable": false,
                    "width": '5px',
                },
                { "data": "name", "sClass": "text-center"},
                {
                    "data": "nick_name",
                    "sClass": "text-center",
                    'width': '60px'
                },
                { "data": "birth_place", 'sClass': 'text-center'},
                { "data": "birth_date", 'sClass': 'text-center'},
                { "data": "gender", 'width': '200px', "sClass": 'text-center', 'width': '60px'},
                { "data": "to_grade", 'width': '200px', "sClass": 'text-center', 'width': '150px'},
                { "data": "action", "orderable": false, "sClass": "text-center"}
            ]
        });
           
        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    } );
</script>