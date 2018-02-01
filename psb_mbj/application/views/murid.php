<br><section class="content-header container">
  <h1>
    Pengumuman siswa yang diterima
  </h1>
  <ol class="breadcrumb">
    <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">siswa yang diterima</li>
  </ol>
</section>
<br><br>

<div class="container">
	<div class="col-xs-12">
		<div class="row">
			<table class="table" id="mytable">
				<thead>
					<tr>
						<th>No</th>
						<th>NISN</th>
						<th>Nama</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody id="showdata">
					 <script type="text/javascript">
						$(document).ready(function() {
							list_murid();
							$('#mytable');

							function list_murid() {
								$.ajax({
									type 	: 'ajax',
									url 	: 'murid/data',
									async	: 'false',
									dataType: 'json',
									success : function(data) {
										var html = '';
										var i;
										var no = 1;
										for(i=0; i<data.length; i++) {
											html += 
												'<tr>'+
													'<td>'+no+++'</td>'+
													'<td>'+data[i].id_pendaftaran+'</td>'+
													'<td>'+data[i].nama+'</td>'+
													'<td>'+data[i].umur+'</td>'+
													'<td>'+data[i].alamat+'</td>'+
													'<td>'+data[i].status+'</td>'+
												'</tr>';
										}
										$('#showdata').html(html);
									}
								});
							}

						});
					</script>
					 				
				</tbody>
			</table>
		</div>
	</div>
</div>
