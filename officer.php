<?php 


	@ob_start();
	session_start();
	
	if(!empty($_SESSION['jenis_user'])){ // mengecek apakah user yang login role nya officer atau bukan
		require 'config.php';
		include $view;
		$lihat = new view($config);
		$perusahaan = $lihat -> perusahaan();
		//  admin
			include 'admin/template/header1.php'; // tampilan untuk header halaman officer
			include 'admin/template/sidebar_officer.php'; // tampilan untuk sidebar halaman officer
				if(!empty($_GET['page'])){
					include 'admin/module/'.$_GET['page'].'/index.php'; 
				}else{
					include 'admin/template/home_officer.php';
				}
			include 'admin/template/footer1.php'; //tampilan untuk footer halaman officer
		// end admin
	}else{
		echo '<script>window.location="index.php";</script>'; // jika user yang login bukan role officer, dilempar kembali ke halaman utama website
	}
?>


