<body>
<div class="container">
			<h2>Pengembalian Barang</h2>
			
				<div class="data-tables datatable-dark">
					
					 <table id="laporan">
                                 <thead>
                                       
								 <tr>
											<th>No</th>
											<th>Tanggal</th>
                                            <th>Nama Barang</th>
											<th>Penerimaan Jumlah Unit</th>
                                            <th>Pengembalian Jumlah Unit</th>
                                        </tr>
								 </thead>

								
								
								
							
								<tbody>
								<?php 
								$no=1;
								$hasil = $lihat -> pengembalianbarang_admin();
								foreach($hasil as $isi) {
								?>
								
									<tr>
										<td><?php echo $no++?></td>
										<td><?php echo $isi['tanggal'];?></td>
										<td><?php echo $isi['nama_barang'];?></td>
										<td><?php echo $isi['penerimaan_unit'];?></td>
										<td><?php echo $isi['pengembalian_unit'];?></td>
										
									</tr>
									
								<?php } ?> 		
								</tbody>
                                </table>
					
				</div>
				<a href="officer.php"><button class="btn btn-primary"><i class="fa fa-angle-left"></i> Ke Halaman Officer </button></a>
</div>
	
<script>
$(document).ready(function() {
    $('#laporan').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>
