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
                        <h1 class="mt-4">Kelola User</h1>
                        
                        <div class="card mb-4">
				
                            <div class="card-header">
							<a href="admin.php?page=kelola_user/tambah"><button class="btn btn-primary btn-md pull-right"><i class="fa fa-plus"></i> Insert Data</button></a>
                            </div>

							<div class="card-body">
				
                          
                                <table id="datatablesSimple">
                                 <thead>
                                        <tr>
											<th>No</th>
											<th>Nama</th>
                                            <th>Username</th>
                                            <th>Jenis User</th>
											<th>Alamat</th>
											<th>No. Telepon</th>
											<th>Email</th>
											<th>Aksi</th>
                                        </tr>
								 </thead>

								
								
								
									
							
								<tbody>
								<?php 
								$no=1;
								$hasil = $lihat -> kelola_user();
								foreach($hasil as $isi) {
								?>
								
									<tr>
										<td><?php echo $no++?></td>
										<td><?php echo $isi['nm_user'];?></td>
										<td><?php echo $isi['username'];?></td>
										<td><?php echo $isi['jenis_user'];?></td>
										<td><?php echo $isi['alamat_user'];?></td>
										<td><?php echo $isi['telepon'];?></td>
										<td><?php echo $isi['email'];?></td>
										<td>
										
											<a href="admin.php?page=kelola_user/edit&kelola_user=<?php echo $isi['id_user'];?>"><button class="btn btn-warning btn-xs">Edit</button></a>
											<a href="fungsi/hapus/hapus_admin.php?kelola_user=hapus&id_user=<?php echo $isi['id_user'];?>" onclick="javascript:return confirm('Hapus Data ?');"><button class="btn btn-danger btn-xs">Hapus</button></a>
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
					
					
									

					
				  
          