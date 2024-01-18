<?php 
session_start();
if(!empty($_SESSION['jenis_user'])){
	require '../../config.php';

	if(!empty($_GET['inventory_admin'])){
		$id= $_GET['id'];
		$data[] = $id;
		$sql = 'DELETE FROM inventory_admin WHERE id=?';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../admin.php?page=inventory_admin&&remove=hapus-data"</script>';
	}
    if(!empty($_GET['kelola_user'])){
		$id_user= $_GET['id_user'];
		$data[] = $id_user;
		$sql = 'DELETE FROM user WHERE id_user=?';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../admin.php?page=kelola_user&&remove=hapus-data"</script>';
	}
	if(!empty($_GET['pengadaan_admin'])){
		$id_pengadaan= $_GET['id_pengadaan'];
		$data[] = $id_pengadaan;
		$sql = 'DELETE FROM pengadaan_admin WHERE id_pengadaan=?';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../admin.php?page=pengadaan_admin&&remove=hapus-data"</script>';
	}
	if(!empty($_GET['room_inventory'])){
		$id= $_GET['id'];
		$data[] = $id;
		$sql = 'DELETE FROM room_inventory WHERE id=?';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../admin.php?page=room_inventory&&remove=hapus-data"</script>';
	}
	if(!empty($_GET['room_pengadaan'])){
		$id= $_GET['id'];
		$data[] = $id;
		$sql = 'DELETE FROM room_pengadaan WHERE id=?';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../admin.php?page=room_pengadaan&&remove=hapus-data"</script>';
	}
	if(!empty($_GET['isi_inventory'])){
		$id= $_GET['id'];
		$no_room = $_GET['no_room'];
		$data[] = $id;
		$sql = 'DELETE FROM inventory_admin WHERE id=?';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../admin.php?page=isi_inventory&id='.$no_room.'&remove=hapus-data"</script>';
	}
	if(!empty($_GET['isi_pengadaan'])){
		$id_pengadaan= $_GET['id_pengadaan'];
		$no_room = $_GET['no_room'];
		$data[] = $id_pengadaan;
		$sql = 'DELETE FROM pengadaan_admin WHERE id_pengadaan=?';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../admin.php?page=isi_pengadaan&id='.$no_room.'&remove=hapus-data"</script>';
	}
	if(!empty($_GET['pengembalianbarang_admin'])){
		$id= $_GET['id'];
		$data[] = $id;
		$sql = 'DELETE FROM pengembalianbarang_admin WHERE id=?';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../admin.php?page=pengembalianbarang _admin&&remove=hapus-data"</script>';
	}
	if(!empty($_GET['main_inventory'])){
		$id= $_GET['id'];
		$data[] = $id;
		$sql = 'DELETE FROM main_inventory WHERE id=?';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../admin.php?page=main_inventory&&remove=hapus-data"</script>';
	}
	if(!empty($_GET['main_pengadaan'])){
		$id_pengadaan= $_GET['id_pengadaan'];
		$data[] = $id_pengadaan;
		$sql = 'DELETE FROM main_pengadaan WHERE id_pengadaan=?';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../admin.php?page=main_pengadaan&&remove=hapus-data"</script>';
	}
	
   
}