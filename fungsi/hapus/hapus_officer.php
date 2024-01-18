<?php 
session_start();
if(!empty($_SESSION['jenis_user'])){
	require '../../config.php';

	if(!empty($_GET['inventory_officer'])){
		$id= $_GET['id'];
		$data[] = $id;
		$sql = 'DELETE FROM inventory_admin WHERE id=?';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../officer.php?page=inventory_officer&&remove=hapus-data"</script>';
	}
	if(!empty($_GET['pengadaan_officer'])){
		$id_pengadaan= $_GET['id_pengadaan'];
		$data[] = $id_pengadaan;
		$sql = 'DELETE FROM pengadaan_admin WHERE id_pengadaan=?';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../officer.php?page=pengadaan_officer&&remove=hapus-data"</script>';
	}
}