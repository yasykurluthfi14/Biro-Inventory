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
                        <h1 class="mt-4">Room Inventaris</h1>
                       
                        <div class="card mb-4">
				
                            <div class="card-header">
							<a href="admin.php?page=room_inventory/tambah"><button class="btn btn-primary btn-md pull-right"><i class="fa fa-plus"></i> Insert Data</button></a>
                            </div>

							<div class="card-body">
				
                          
                                <table id="datatablesSimple">
                                 <thead>
                                        <tr>
											<th>No</th>
											<th>No. Room</th>
											<th>Room</th>
											<th>Aksi</th>
                                        </tr>
								 </thead>
								<tbody>
								<?php 
								$no=1;
								$hasil = $lihat -> room_inventory();
								foreach($hasil as $isi) {
								?>
								
									<tr>
										<td><?php echo $no++?></td>
										<td>INV- <?php echo $isi['no_room'];?></td>
										<td><a class="btn btn-warning" style="background-color:orangered; padding-right:20px" href="admin.php?page=isi_inventory&id=<?php echo $isi['no_room'];?>"><?php echo $isi['nama_room'];?></a></td>
										<td>
										
											<a href="admin.php?page=room_inventory/edit&room_inventory=<?php echo $isi['id'];?>"><button class="btn btn-warning btn-xs">Edit</button></a>
											<a href="fungsi/hapus/hapus_admin.php?room_inventory=hapus&id=<?php echo $isi['id'];?>" onclick="javascript:return confirm('Hapus Data ?');"><button class="btn btn-danger btn-xs">Hapus</button></a>
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
					
					
									

					
				  
          