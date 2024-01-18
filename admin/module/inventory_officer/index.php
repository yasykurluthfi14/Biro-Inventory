 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

       
	  <div id="layoutSidenav_content">		
						
	  
	  				<div class="col-lg-12 main-chart">	

						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Tambah Data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Hapus Data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['gagal'])){?>
						<div class="alert alert-danger">
						<p>Tambah Data Gagal !</p>
						</div>
						<?php }?>
						
						 	
						

						<!-- Trigger the modal with a button -->
						
						
                      
						
						<!-- view sample -->	
						
               
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tabel Inventaris Staff</h1>

						
                       
                        <div class="card mb-4">
				
                            <div class="card-header">
							<a href="officer.php?page=inventory_officer/tambah"><button class="btn btn-primary btn-md pull-right"><i class="fa fa-plus"></i> Insert Data</button></a>
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
											<th>Aksi</th>
                                        </tr>

										<tr>
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
										<td>
										
											<a href="officer.php?page=inventory_officer/edit&inventory_officer=<?php echo $isi['id'];?>"><button class="btn btn-warning btn-xs">Edit</button></a>
											<a href="fungsi/hapus/hapus_officer.php?inventory_officer=hapus&id=<?php echo $isi['id'];?>" onclick="javascript:return confirm('Hapus Data ?');"><button class="btn btn-danger btn-xs">Hapus</button></a>
										</td>
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
					
					
									

					
				  
          