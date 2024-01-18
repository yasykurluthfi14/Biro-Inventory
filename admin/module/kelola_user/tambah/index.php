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
				 <h1 class="mt-4">Tambah User</h1>
				
				

				 <div class="card mb-4">
					 <div class="card-header">
						 <i class="fas fa-table me-1"></i>
						 Form Tambah User	
					 </div>
					 <div class="card-body">
					 <table class="table table-bordered table-striped" >
					 <form action="fungsi/tambah/tambah_admin.php?kelola_user=tambah" method="POST" enctype="multipart/form-data">
					 

													 
									 <tr>
										 <td>Nama</td>
										 <td><input type="text" required class="form-control"  name="nm_user"></td>
									 </tr>
									  <tr>
										 <td>Username</td>
										 <td><input type="text" required class="form-control"  name="username"></td>
									 </tr>
									 <tr>
										 <td>Password</td>
										 <td><input type="password" required class="form-control"  name="pass"></td>
									 </tr>
									 <tr>
										 <td>Jenis User</td>
										 <td><select class="form-control" name="jenis_user">
												<option value="admin">Admin</option>
												<option value="officer">Officer</option>
												<option value="manager">Manager</option>
											</select>
										</td>
									 </tr>
									 <tr>
										 <td>Alamat</td>
										 <td><input type="text"  required class="form-control"  name="alamat_user"></td>
									 </tr>
									 <tr>
										 <td>No. Telepon</td>
										 <td><input type="text" required class="form-control"  name="telepon"></td>
									 </tr>
									 <tr>
										 <td>Email</td>
										 <td><input type="text"  required class="form-control" name="email"></td>
									 </tr>
									 
									 
									 <tr>
							 <td></td>
							 <td><button class="btn btn-primary"><i class="fa fa-edit"></i> Insert Data</button>
							 
						 </tr>
					 </form>
			   
				 </table>
					 </div>
				 
				 </div>
				 
		   </div>
		   </div>
 
