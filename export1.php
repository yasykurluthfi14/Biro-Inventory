<?php 


	@ob_start();
	session_start();
	
	if(!empty($_SESSION['jenis_user'])){ // mengecek apakah user yang login role nya manager atau bukan
		require 'config.php';
		include $view;
		$lihat = new view($config);
		$perusahaan = $lihat -> perusahaan();
		//  admin
			include 'admin/template/header_manager.php'; // tampilan untuk header halaman manager
		
				if(!empty($_GET['page'])){
					include 'admin/module/'.$_GET['page'].'/index.php'; 
				}else{
					include 'admin/template/home_officer.php'; 
				}
			include 'admin/template/footer_manager.php'; //tampilan untuk footer halaman manager
		// end admin
	}else{
		echo '<script>window.location="index.php";</script>'; // jika user yang login bukan role manager, dilempar kembali ke halaman utama website
	}
?>


