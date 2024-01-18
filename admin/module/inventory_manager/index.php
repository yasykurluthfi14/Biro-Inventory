 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

       
	  <div id="layoutSidenav_content">		
						
	  
	  				<div class="col-lg-12 main-chart">	

						
						 	
						

						<!-- Trigger the modal with a button -->
						
						
                      
						
						<!-- view sample -->	
						
               
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tabel Inventaris</h1>
                       
                        <div class="card mb-4">
				
						<div class="card-header">
							<a href="export.php?page=laporan_manager/laporan_inventory"><button class="btn btn-primary btn-md pull-right"> Export Data</button></a>
                            </div>
							<div class="card-body">
				
                          
                                <table id="datatablesSimple">
                                 <thead>
                                        <tr>
											<th>No</th>
											<th>Tanggal</th>
                                            <th>Nama Barang</th>
											<th>No. Room</th>
                                            <th colspan ="2">Rincian Perhitungan</th>
                                            <th colspan ="2">Harga</th>
											<th>Keterangan</th>
											<th>Foto</th>
                                        </tr>

										
									<tr >
										<th colspan ="4"> </th>
										<th style="color :red"><i>Volume</i></th>
										<th style="color :red"><i>Satuan</i></th>
										<th style="color :red"><i>Satuan</i></th>
										<th style="color :red"><i>Total</i></th>
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
										<td><img src="upload/<?php echo $isi['foto']; ?>" width="100px" height="60px"></td>
									</tr>
									
								<?php } ?> 		
								</tbody>
                                </table>
                            </div>
							
                        
                    </div>
					</div>
				
					
					<!-- end view sample -->
					<!-- tambah sample MODALS-->
						<!-- Modal -->
					
					
									

					
				  
          