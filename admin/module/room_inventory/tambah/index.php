 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
    
     
	 <div id="layoutSidenav_content">
           
                  <div class="col-lg-12 main-chart">
					  
						
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Edit Data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Hapus Data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['gagal'])){?>
						<div class="alert alert-danger">
						<p>Edit Data Gagal !</p>
						</div>
						<?php }?>



					
						<div class="container-fluid px-4">
                        <h1 class="mt-4">Tabel Room Inventaris</h1>
                        

						

						<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Inventaris Barang	
                            </div>
							<div class="card-body">
							<table class="table table-bordered table-striped" >
							<form action="fungsi/tambah/tambah_admin.php?room_inventory=tambah" method="POST" enctype="multipart/form-data">
							

															
											<tr>
												<td>No. Room</td>
												<td><input type="text" required class="form-control"  name="no_room"></td>
											</tr>
                                             <tr>
												<td>Nama Room</td>
												<td><input type="text" required class="form-control"  name="nama_room"></td>
											</tr>
											
                                            
									<td></td>
									<td><button class="btn btn-primary"><i class="fa fa-edit"></i> Insert Data</button>
									
								</tr>
							</form>
                      
						</table>
							</div>
						
						</div>
						
				  </div>
				  </div>
        
