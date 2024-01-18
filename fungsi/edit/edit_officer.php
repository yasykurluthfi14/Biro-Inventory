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

	if(!empty($_GET['inventory_admin'])){

        $foto = upload();

		$id= htmlentities($_POST['id']);
		$tanggal = htmlentities($_POST['tanggal']);
        $nama_barang = htmlentities($_POST['nama_barang']);
        $no_room = htmlentities($_POST['no_room']);
        $volume_perhitungan = htmlentities($_POST['volume_perhitungan']);
        $satuan_perhitungan = htmlentities($_POST['satuan_perhitungan']);
		$satuan_harga = htmlentities($_POST['satuan_harga']);
        $total_harga = $satuan_perhitungan*$satuan_harga;
        $keterangan = htmlentities($_POST['keterangan']);


		$data[] = $tanggal;
        $data[] = $nama_barang;
        $data[] = $no_room;
        $data[] = $volume_perhitungan;
        $data[] = $satuan_perhitungan;
		$data[] = $satuan_harga;
		$data[] = $total_harga;
        $data[] = $keterangan;
        $data[] = $foto;


		$data[] = $id;
        $sql = 'UPDATE inventory_admin SET tanggal=?,nama_barang=?,no_room=?,volume_perhitungan=?,satuan_perhitungan=?,satuan_harga=?,total_harga=?,keterangan=?,foto=? WHERE id=?';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../officer.php?page=inventory_officer/edit&inventory_officer='.$id.'&success=edit-data"</script>';
    }
    if(!empty($_GET['kelola_user'])){
		$id_user= htmlentities($_POST['id_user']);
		$nm_user = htmlentities($_POST['nm_user']);
        $username = htmlentities($_POST['username']);
        $pass = htmlentities($_POST['pass']);
        $jenis_user = htmlentities($_POST['jenis_user']);
		$alamat_user = htmlentities($_POST['alamat_user']);
        $telepon = htmlentities($_POST['telepon']);
        $email = htmlentities($_POST['email']);

		
		$data[] = $nm_user;
        $data[] = $username;
        $data[] = md5($pass);
        $data[] = $jenis_user;
		$data[] = $alamat_user;
        $data[] = $telepon;
        $data[] = $email;
       

		$data[] = $id_user;
        $sql = 'UPDATE user SET nm_user=?,username=?,pass=?,jenis_user=?,alamat_user=?,telepon=?,email=? WHERE id_user=?';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../admin.php?page=kelola_user/edit&kelola_user='.$id_user.'&success=edit-data"</script>';
    }

    if(!empty($_GET['pengadaan_officer'])){

        $foto = upload();

		$id_pengadaan= htmlentities($_POST['id_pengadaan']);
		$tanggal_pengadaan = htmlentities($_POST['tanggal_pengadaan']);
        $nb_pengadaan = htmlentities($_POST['nb_pengadaan']);
        $no_room = htmlentities($_POST['no_room']);
        $vp_pengadaan = htmlentities($_POST['vp_pengadaan']);
        $sp_pengadaan = htmlentities($_POST['sp_pengadaan']);
		$sh_pengadaan = htmlentities($_POST['sh_pengadaan']);
        $th_pengadaan = $sp_pengadaan*$sh_pengadaan;
        $kp = htmlentities($_POST['kp']);

		$data[] = $tanggal_pengadaan;
        $data[] = $nb_pengadaan;
        $data[] = $no_room;
        $data[] = $vp_pengadaan;
        $data[] = $sp_pengadaan;
		$data[] = $sh_pengadaan;
		$data[] = $th_pengadaan;
        $data[] = $kp;
        $data[] = $foto;
       



		$data[] = $id_pengadaan;
        $sql = 'UPDATE pengadaan_admin SET tanggal_pengadaan=?,nb_pengadaan=?,no_room=?,vp_pengadaan=?,sp_pengadaan=?,sh_pengadaan=?,th_pengadaan=?,kp=?,foto=? WHERE id_pengadaan=?';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../admin.php?page=pengadaan_officer/edit&pengadaan_officer='.$id_pengadaan.'&success=edit-data"</script>';
    }
   
}