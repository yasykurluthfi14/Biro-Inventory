<?php 
session_start();
function upload(){
	$namaFile = $_FILES['foto']['name'];
	$ukuranFile = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmpName = $_FILES['foto']['tmp_name'];

	//cek apakah error 
	if( $error === 4 ){
		echo "<script>
			alert ('Pilih File Terlebih Dahulu!');
			</script>";
			return false;
			}
	
	//cek ekstensi file

	$ekstensiFileValid =  ['jpg','jpeg','png','gif'];
	$ekstensiFile = explode('.' , $namaFile);
	$ekstensiFile = strtolower(end($ekstensiFile));

	if(!in_array($ekstensiFile , $ekstensiFileValid)){
		echo "<script>
			alert ('Ekstensi tidak sesuai!');
			</script>";
			return false;
	}

	


	move_uploaded_file($tmpName, '../../upload/' . $namaFile);

	return $namaFile;
}

if(!empty($_SESSION['jenis_user'])){
	require '../../config.php';
	
	if(!empty($_GET['main_inventory'])){

		$foto = upload();
		
		$id = $_POST['id'];
		$tanggal= $_POST['tanggal'];
		$nama_barang = $_POST['nama_barang'];
		$no_room = $_POST['no_room'];
		$volume_perhitungan = $_POST['volume_perhitungan'];
		$satuan_perhitungan = $_POST['satuan_perhitungan'];
		$satuan_harga = $_POST['satuan_harga'];
		$total_harga = $satuan_perhitungan*$satuan_harga;
		$keterangan = $_POST['keterangan'];

		
			$data[] = $id;
			$data[] = $tanggal;
			$data[] = $nama_barang;
			$data[] = $no_room;
			$data[] = $volume_perhitungan;
			$data[] = $satuan_perhitungan;
			$data[] = $satuan_harga;
			$data[] = $total_harga;
			$data[] = $keterangan;
			$data[] = $foto;

			$sql='INSERT INTO main_inventory(id,tanggal,nama_barang,no_room,volume_perhitungan,satuan_perhitungan,satuan_harga,total_harga,keterangan,foto) 
			VALUES(?,?,?,?,?,?,?,?,?,?)'; //sql insert query					
			$row = $config -> prepare($sql);
			if($row->execute($data))
			{
				echo '<script>window.location="../../admin.php?page=main_inventory&success=tambah-data"</script>';
			}
		

	
		
	}
	
	if(!empty($_GET['inventory_admin'])){

		$foto = upload();
		
		$id = $_POST['id'];
		$tanggal= $_POST['tanggal'];
		$nama_barang = $_POST['nama_barang'];
		$no_room = $_POST['no_room'];
		$volume_perhitungan = $_POST['volume_perhitungan'];
		$satuan_perhitungan = $_POST['satuan_perhitungan'];
		$satuan_harga = $_POST['satuan_harga'];
		$total_harga = $satuan_perhitungan*$satuan_harga;
		$keterangan = $_POST['keterangan'];

		
			$data[] = $id;
			$data[] = $tanggal;
			$data[] = $nama_barang;
			$data[] = $no_room;
			$data[] = $volume_perhitungan;
			$data[] = $satuan_perhitungan;
			$data[] = $satuan_harga;
			$data[] = $total_harga;
			$data[] = $keterangan;
			$data[] = $foto;

			$sql='INSERT INTO inventory_admin(id,tanggal,nama_barang,no_room,volume_perhitungan,satuan_perhitungan,satuan_harga,total_harga,keterangan,foto) 
			VALUES(?,?,?,?,?,?,?,?,?,?)'; //sql insert query					
			$row = $config -> prepare($sql);
			if($row->execute($data))
			{
				echo '<script>window.location="../../admin.php?page=inventory_admin&success=tambah-data"</script>';
			}
		

	
		
	}
	if(!empty($_GET['kelola_user'])){
		
		$id_user = $_POST['id_user'];
		$nm_user = $_POST['nm_user'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		$jenis_user = $_POST['jenis_user'];
		$alamat_user = $_POST['alamat_user'];
		$telepon = $_POST['telepon'];
		$email = $_POST['email'];
		

		$data[] = $id_user;
		$data[] = $nm_user;
		$data[] = $username;
		$data[] = md5($pass);
		$data[] = $jenis_user;
		$data[] = $alamat_user;
		$data[] = $telepon;
		$data[] = $email;
		

		$sql = 'INSERT INTO user (id_user,nm_user,username,pass,jenis_user,alamat_user,telepon,email) 
			    VALUES (?,?,?,?,?,?,?,?) ';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../admin.php?page=kelola_user&success=tambah-data"</script>';
	}

	if(!empty($_GET['pengadaan_admin'])){

		$foto = upload();

		$id_pengadaan = $_POST['id_pengadaan'];
		$tanggal_pengadaan= $_POST['tanggal_pengadaan'];
		$nb_pengadaan= $_POST['nb_pengadaan'];
		$no_room= $_POST['no_room'];
		$vp_pengadaan = $_POST['vp_pengadaan'];
		$sp_pengadaan = $_POST['sp_pengadaan'];
		$sh_pengadaan = $_POST['sh_pengadaan'];
		$th_pengadaan = $sp_pengadaan*$sh_pengadaan;
		$kp = $_POST['kp'];

		$data[] = $id_pengadaan;
		$data[] = $tanggal_pengadaan;
		$data[] = $nb_pengadaan;
		$data[] = $no_room;
		$data[] = $vp_pengadaan;
		$data[] = $sp_pengadaan;
		$data[] = $sh_pengadaan;
		$data[] = $th_pengadaan;
		$data[] = $kp;
		$data[] = $foto;
		
	

		$sql = 'INSERT INTO pengadaan_admin (id_pengadaan,tanggal_pengadaan,nb_pengadaan,no_room,vp_pengadaan,sp_pengadaan,sh_pengadaan,th_pengadaan,kp,foto) 
			    VALUES (?,?,?,?,?,?,?,?,?,?) ';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		
		
		echo '<script>window.location="../../admin.php?page=pengadaan_admin&success=tambah-data"</script>';
	}
	if(!empty($_GET['main_pengadaan'])){

		$foto = upload();

		$id_pengadaan = $_POST['id_pengadaan'];
		$tanggal_pengadaan= $_POST['tanggal_pengadaan'];
		$nb_pengadaan= $_POST['nb_pengadaan'];
		$no_room= $_POST['no_room'];
		$vp_pengadaan = $_POST['vp_pengadaan'];
		$sp_pengadaan = $_POST['sp_pengadaan'];
		$sh_pengadaan = $_POST['sh_pengadaan'];
		$th_pengadaan = $sp_pengadaan*$sh_pengadaan;
		$kp = $_POST['kp'];
		$status = 'main_pengadaan';

		$data[] = $id_pengadaan;
		$data[] = $tanggal_pengadaan;
		$data[] = $nb_pengadaan;
		$data[] = $no_room;
		$data[] = $vp_pengadaan;
		$data[] = $sp_pengadaan;
		$data[] = $sh_pengadaan;
		$data[] = $th_pengadaan;
		$data[] = $kp;
		$data[] = $status;
		$data[] = $foto;
		
	

		$sql = 'INSERT INTO main_pengadaan (id_pengadaan,tanggal_pengadaan,nb_pengadaan,no_room,vp_pengadaan,sp_pengadaan,sh_pengadaan,th_pengadaan,kp,status,foto) 
			    VALUES (?,?,?,?,?,?,?,?,?,?,?) ';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		
		
		echo '<script>window.location="../../admin.php?page=main_pengadaan&success=tambah-data"</script>';
	}
	if(!empty($_GET['room_inventory'])){
		
		$id = $_POST['id'];
		$no_room= $_POST['no_room'];
		$nama_room= $_POST['nama_room'];
		
		
		$data[] = $id;
		$data[] = $no_room;
		$data[] = $nama_room;
		

		$sql = 'INSERT INTO room_inventory (id,no_room,nama_room) 
			    VALUES (?,?,?) ';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../admin.php?page=room_inventory&success=tambah-data"</script>';
	}
	if(!empty($_GET['room_pengadaan'])){
		
		$id = $_POST['id'];
		$no_room= $_POST['no_room'];
		$nama_room= $_POST['nama_room'];
		
		
		$data[] = $id;
		$data[] = $no_room;
		$data[] = $nama_room;
		

		$sql = 'INSERT INTO room_pengadaan (id,no_room,nama_room) 
			    VALUES (?,?,?) ';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../admin.php?page=room_pengadaan&success=tambah-data"</script>';
	}

	if(!empty($_GET['pengembalianbarang_admin'])){

		$foto = upload();
		
		$id = $_POST['id'];
		$tanggal= $_POST['tanggal'];
		$nama_barang = $_POST['nama_barang'];
		$penerimaan_unit = $_POST['penerimaan_unit'];
		$pengembalian_unit = $_POST['pengembalian_unit'];

		
			$data[] = $id;
			$data[] = $tanggal;
			$data[] = $nama_barang;
			$data[] = $penerimaan_unit;
			$data[] = $pengembalian_unit;
			$data[] = $foto;

			$sql='INSERT INTO pengembalianbarang_admin(id,tanggal,nama_barang,penerimaan_unit,pengembalian_unit,foto) 
			VALUES(?,?,?,?,?,?)'; //sql insert query					
			$row = $config -> prepare($sql);
			if($row->execute($data))
			{
				echo '<script>window.location="../../admin.php?page=pengembalianbarang_admin&success=tambah-data"</script>';
			}
		

	
		
	}
	if(!empty($_GET['isi_inventory'])){

		$foto = upload();
		
		$id = $_POST['id'];
		$tanggal= $_POST['tanggal'];
		$nama_barang = $_POST['nama_barang'];
		$no_room = $_POST['no_room'];
		$volume_perhitungan = $_POST['volume_perhitungan'];
		$satuan_perhitungan = $_POST['satuan_perhitungan'];
		$satuan_harga = $_POST['satuan_harga'];
		$total_harga = $satuan_perhitungan*$satuan_harga;
		$keterangan = $_POST['keterangan'];

		
			$data[] = $id;
			$data[] = $tanggal;
			$data[] = $nama_barang;
			$data[] = $no_room;
			$data[] = $volume_perhitungan;
			$data[] = $satuan_perhitungan;
			$data[] = $satuan_harga;
			$data[] = $total_harga;
			$data[] = $keterangan;
			$data[] = $foto;

			$sql='INSERT INTO inventory_admin(id,tanggal,nama_barang,no_room,volume_perhitungan,satuan_perhitungan,satuan_harga,total_harga,keterangan,foto) 
			VALUES(?,?,?,?,?,?,?,?,?,?)'; //sql insert query					
			$row = $config -> prepare($sql);
			if($row->execute($data))
			{
				echo '<script>window.location="../../admin.php?page=isi_inventory&id='.$no_room.'&success=tambah-data"</script>';
			}
		

	
		
	}
	if(!empty($_GET['isi_pengadaan'])){

		$foto = upload();

		$id_pengadaan = $_POST['id_pengadaan'];
		$tanggal_pengadaan= $_POST['tanggal_pengadaan'];
		$nb_pengadaan= $_POST['nb_pengadaan'];
		$no_room= $_POST['no_room'];
		$vp_pengadaan = $_POST['vp_pengadaan'];
		$sp_pengadaan = $_POST['sp_pengadaan'];
		$sh_pengadaan = $_POST['sh_pengadaan'];
		$th_pengadaan = $sp_pengadaan*$sh_pengadaan;
		$kp = $_POST['kp'];

		$data[] = $id_pengadaan;
		$data[] = $tanggal_pengadaan;
		$data[] = $nb_pengadaan;
		$data[] = $no_room;
		$data[] = $vp_pengadaan;
		$data[] = $sp_pengadaan;
		$data[] = $sh_pengadaan;
		$data[] = $th_pengadaan;
		$data[] = $kp;
		$data[] = $foto;
		
	

		$sql = 'INSERT INTO pengadaan_admin (id_pengadaan,tanggal_pengadaan,nb_pengadaan,no_room,vp_pengadaan,sp_pengadaan,sh_pengadaan,th_pengadaan,kp,foto) 
			    VALUES (?,?,?,?,?,?,?,?,?,?) ';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		
		
		echo '<script>window.location="../../admin.php?page=isi_pengadaan&id='.$no_room.'&success=tambah-data"</script>';
	}

	

}