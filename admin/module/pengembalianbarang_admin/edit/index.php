 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <?php 
	$id = $_GET['pengembalianbarang_admin'];
	$hasil = $lihat -> pengembalianbarang_edit($id);
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
                        <h1 class="mt-4">Edit Data Pengembalian Barang</h1>
                        

						<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Form Edit	
                            </div>
							<div class="card-body">
							<table class="table table-bordered table-striped" >
							<form action="fungsi/edit/edit_admin.php?pengembalianbarang_admin=edit" method="POST" enctype="multipart/form-data">
							

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
												<td>Penerimaan Unit</td>
												<td><input type="text" required value="<?php echo $hasil['penerimaan_unit'];?>"class="form-control"  name="penerimaan_unit"></td>
											</tr>
                                            <tr>
												<td>Pengembalian Unit</td>
												<td><input type="text" required value="<?php echo $hasil['pengembalian_unit'];?>" class="form-control"  name="pengembalian_unit"></td>
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
						<a href="admin.php?page=pengembalianbarang_admin"><button class="btn btn-primary"><i class="fa fa-angle-left"></i> Balik </button></a>
							</div>
						
						</div>
						
				  </div>
				  </div>
        
