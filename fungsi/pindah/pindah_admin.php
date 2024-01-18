<?php 
session_start();


if(!empty($_SESSION['jenis_user'])){
	require '../../config.php';

    if(!empty($_GET['main_inventory'])){

      
        $id = $_POST['id'];
		$tanggal = htmlentities($_POST['tanggal']);
        $nama_barang = htmlentities($_POST['nama_barang']);
        $no_room = htmlentities($_POST['no_room']);
        $volume_perhitungan = htmlentities($_POST['volume_perhitungan']);
        $satuan_perhitungan = htmlentities($_POST['satuan_perhitungan']);
		$satuan_harga = htmlentities($_POST['satuan_harga']);
        $total_harga = $satuan_perhitungan*$satuan_harga;
        $keterangan = htmlentities($_POST['keterangan']);
        $status = 'inventory_admin';
        $foto = htmlentities($_POST['foto']);

        $data[] = $id;
		$data[] = $tanggal;
        $data[] = $nama_barang;
        $data[] = $no_room;
        $data[] = $volume_perhitungan;
        $data[] = $satuan_perhitungan;
		$data[] = $satuan_harga;
		$data[] = $total_harga;
        $data[] = $keterangan;
        $data[] = $status;
        $data[] = $foto;


		
			$sql='INSERT INTO inventory_admin(id,tanggal,nama_barang,no_room,volume_perhitungan,satuan_perhitungan,satuan_harga,total_harga,keterangan,status,foto) 
			VALUES(?,?,?,?,?,?,?,?,?,?,?)'; //sql insert query					
			$row = $config -> prepare($sql);
			$row->execute($data);
           

            $delete = $config->prepare("DELETE FROM main_inventory WHERE nama_barang = '$nama_barang'");
            $delete->execute(array(':nama_barang' => $nama_barang));
          
                echo '<script>window.location="../../admin.php?page=main_inventory&&pindah=pindah-data"</script>';
			

        }
        if(!empty($_GET['main_pengadaan'])){

           
    
            $id_pengadaan= $_POST['id_pengadaan'];
            $tanggal_pengadaan = htmlentities($_POST['tanggal_pengadaan']);
            $nb_pengadaan = htmlentities($_POST['nb_pengadaan']);
            $no_room = htmlentities($_POST['no_room']);
            $vp_pengadaan = htmlentities($_POST['vp_pengadaan']);
            $sp_pengadaan = htmlentities($_POST['sp_pengadaan']);
            $sh_pengadaan = htmlentities($_POST['sh_pengadaan']);
            $th_pengadaan = $sp_pengadaan*$sh_pengadaan;
            $kp = htmlentities($_POST['kp']);
            $status = 'pengadaan_admin';
            $foto = htmlentities($_POST['foto']);
    
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

            
		$sql = 'INSERT INTO pengadaan_admin (id_pengadaan,tanggal_pengadaan,nb_pengadaan,no_room,vp_pengadaan,sp_pengadaan,sh_pengadaan,th_pengadaan,kp,status,foto) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?) ';
        $row = $config -> prepare($sql);
        $row -> execute($data);

        $delete = $config->prepare("DELETE FROM main_pengadaan WHERE nb_pengadaan = '$nb_pengadaan'");
        $delete->execute(array(':nb_pengadaan' => $nb_pengadaan));


        echo '<script>window.location="../../admin.php?page=main_pengadaan&pindah=pindah-data"</script>';

        }
    }