 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <?php 
	$id = $_GET['room_inventory'];
	$hasil = $lihat -> roominventory_edit($id);
?>
     
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
                        <h1 class="mt-4">Edit Room Inventaris</h1>
                        

						<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Form Edit	
                            </div>
							<div class="card-body">
							<table class="table table-bordered table-striped" >
							<form action="fungsi/edit/edit_admin.php?room_inventory=edit" method="POST" enctype="multipart/form-data">
							

											<tr>
												<td>Id</td>
												<td><input type="number" required readonly value="<?php echo $hasil['id'];?>"class="form-control"  name="id"></td>
											</tr>	
											<tr>
												<td>No. Room</td>
												<td><input type="text" required value="<?php echo $hasil['no_room'];?>"class="form-control"  name="no_room"></td>
											</tr>					
                                             <tr>
												<td>Nama Room</td>
												<td><input type="text" required value="<?php echo $hasil['nama_room'];?>"class="form-control"  name="nama_room"></td>
											</tr>
											
                    
									<td></td>
									<td><button class="btn btn-primary"><i class="fa fa-edit"></i> Update Data</button>
										</td>
								
								</tr>
							</form>
                      
						</table>
						<a href="admin.php?page=room_inventory"><button class="btn btn-primary"><i class="fa fa-angle-left"></i> Balik </button></a>
							</div>
						
						</div>
						
				  </div>
				  </div>
        
