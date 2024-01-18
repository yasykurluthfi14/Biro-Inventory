<body>
<div class="container">
			<h2>Inventory</h2>
			<h4>(All Room Inventory)</h4>
			
				<div class="data-tables datatable-dark">
					
					 <table id="laporan">
                                 <thead>
                                        <tr>
											<th>No</th>
											<th>Tanggal</th>
                                            <th>Nama Barang</th>
											<th>No. Room</th>
                                            <th colspan ="2">Rincian Perhitungan</th>
                                            <th colspan ="2">Harga</th>
											<th>Keterangan</th>
                                        </tr>

										
									<tr >
										<th colspan ="4"> </th>
										<th style="color :red"><i>Volume</i></th>
										<th style="color :red"><i>Satuan</i></th>
										<th style="color :red"><i>Satuan</i></th>
										<th style="color :red"><i>Total</i></th>
										<th></th>
									</tr>

								 </thead>

								
								
								
							
								<tbody>
								<?php 
								$no=1;
								$hasil = $lihat -> inventory_admin();
								foreach($hasil as $isi) {
								?>
								
									<tr>
										<td><?php echo $no++?></td>
										<td><?php echo $isi['tanggal'];?></td>
										<td><?php echo $isi['nama_barang'];?></td>
										<td>INV-<?php echo $isi['no_room'];?></td>
										<td><?php echo $isi['volume_perhitungan'];?></td>
										<td><?php echo $isi['satuan_perhitungan'];?></td>
										<td><?php echo $isi['satuan_harga'];?></td>
										<td><?php echo $isi['total_harga'];?></td>
										<td><?php echo $isi['keterangan'];?></td>
										
									</tr>
									
								<?php } ?> 		
								</tbody>
                                </table>
					
				</div>
				<a href="manager.php"><button class="btn btn-primary"><i class="fa fa-angle-left"></i> Ke Halaman Manager </button></a>
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
