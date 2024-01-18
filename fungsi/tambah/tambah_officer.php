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
	
	
	if(!empty($_GET['inventory_officer'])){

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

		$sql = 'INSERT INTO inventory_admin (id,tanggal,nama_barang,no_room,volume_perhitungan,satuan_perhitungan,satuan_harga,total_harga,keterangan,foto) 
			    VALUES (?,?,?,?,?,?,?,?,?,?) ';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../officer.php?page=inventory_officer&success=tambah-data"</script>';
	}

	if(!empty($_GET['pengadaan_officer'])){

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
		
		
		echo '<script>window.location="../../admin.php?page=pengadaan_officer&success=tambah-data"</script>';
	}
	

}