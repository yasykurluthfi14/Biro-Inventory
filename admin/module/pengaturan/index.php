 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
						<h3>Pengaturan perusahaan</h3>
						<br>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Ubah Data Berhasil !</p>
						</div>
						<?php }?>
						<table class="table table-stripped">
							<thead>
								<tr>
									<td>Nama perusahaan</td>
									<td>Alamat perusahaan</td>
									<td>Kontak (Hp)</td>
									<td>Aksi</td>
								</tr>
							</thead>
							<tbody>
								<form method="post" action="fungsi/edit/edit.php?pengaturan=ubah">		
								<tr>
									<td><input class="form-control" name="namaperusahaan" value="<?php echo $perusahaan['nama_perusahaan'];?>" placeholder="Nama perusahaan"></td>
									<td><input class="form-control" name="alamat" value="<?php echo $perusahaan['alamat_perusahaan'];?>" placeholder="Alamat perusahaan"></td>
									<td><input class="form-control" name="kontak" value="<?php echo $perusahaan['tlp'];?>" placeholder="Kontak (Hp)"></td>
									<td><button id="tombol-simpan" class="btn btn-primary"><i class="fa fa-pencil"></i> Update Data</button></td>
								</tr>
								</form>
							</tbody>
						</table>
						<div class="clearfix" style="padding-top:41%;"></div>
				  </div>
              </div>
          </section>
      </section>
	
