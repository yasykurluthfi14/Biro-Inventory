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
                        <h1 class="mt-4">Pengembalian Barang</h1>
                       
                        <div class="card mb-4">
				
                            <div class="card-header">
							<a href="admin.php?page=pengembalianbarang_admin/tambah"><button class="btn btn-primary btn-md pull-right"><i class="fa fa-plus"></i> Insert Data</button></a>
                            </div>

							<div class="card-body">
				
                          
                                <table id="datatablesSimple">
                                 <thead>
                                        <tr>
											<th>No</th>
											<th>Tanggal</th>
                                            <th>Nama Barang</th>
											<th>Penerimaan Jumlah Unit</th>
                                            <th>Pengembalian Jumlah Unit</th>
											<th>Foto</th>
											<th>Aksi</th>
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
										<td><img src="upload/<?php echo $isi['foto']; ?>" width="100px" height="60px"></td>
										<td>
										
											<a href="admin.php?page=pengembalianbarang_admin/edit&pengembalianbarang_admin=<?php echo $isi['id'];?>"><button class="btn btn-warning btn-xs">Edit</button></a>
											<a href="fungsi/hapus/hapus_admin.php?pengembalianbarang_admin=hapus&id=<?php echo $isi['id'];?>" onclick="javascript:return confirm('Hapus Data ?');"><button class="btn btn-danger btn-xs">Hapus</button></a>
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
					
					
									

					
				  
          