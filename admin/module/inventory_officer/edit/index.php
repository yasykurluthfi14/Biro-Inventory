 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <?php 
	$id = $_GET['inventory_officer'];
	$hasil = $lihat -> inventoryadmin_edit($id);
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
                        <h1 class="mt-4">Edit Data Inventaris</h1>
                        

						<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Form Edit	
                            </div>
							<div class="card-body">
							<table class="table table-bordered table-striped" >
							<form action="fungsi/edit/edit_officer.php?inventory_admin=edit" method="POST" enctype="multipart/form-data">
							

											<tr>
												<td>Id</td>
												<td><input type="number" required readonly value="<?php echo $hasil['id'];?>"class="form-control"  name="id"></td>
											</tr>						
                                            <tr>
												<td>Tanggal</td>
												<td><input type="date" required value="<?php echo $hasil['tanggal'];?>"class="form-control"  name="tanggal"></td>
											</tr>
                                             <tr>
												<td>Nama Barang</td>
												<td><input type="text" required value="<?php echo $hasil['nama_barang'];?>"class="form-control"  name="nama_barang"></td>
											</tr>
											<tr>
												<td>No. Room</td>
												<td><input type="text" required value="<?php echo $hasil['no_room'];?>"class="form-control"  name="no_room"></td>
											</tr>
                                            <tr>
												<td>Volume Perhitungan</td>
												<td><input type="text" required value="<?php echo $hasil['volume_perhitungan'];?>" class="form-control"  name="volume_perhitungan"></td>
											</tr>
                                            <tr>
												<td>Satuan Perhitungan</td>
												<td><input type="number" required value="<?php echo $hasil['satuan_perhitungan'];?>" required class="form-control"  name="satuan_perhitungan"></td>
											</tr>
                                            <tr>
												<td>Satuan Harga</td>
												<td><input type="number" required value="<?php echo $hasil['satuan_harga'];?>" class="form-control"  name="satuan_harga"></td>
											</tr>
                                            <tr>
												<td>Keterangan</td>
												<td><input type="text" required value="<?php echo $hasil['keterangan'];?>"class="form-control"  name="keterangan"></td>
											</tr>
											<tr>
												<td>Foto</td>
												<td><input type="file" required value="<?php echo $hasil['foto'];?>"class="form-control"  name="foto"></td>
											</tr>
                                            <tr>
									<td></td>
									<td><button class="btn btn-primary"><i class="fa fa-edit"></i> Update Data</button>
										</td>
								
								</tr>
							</form>
                      
						</table>
						<a href="officer.php?page=inventory_officer"><button class="btn btn-primary"><i class="fa fa-angle-left"></i> Balik </button></a>
							</div>
						
						</div>
						
				  </div>
				  </div>
        
