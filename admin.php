<?php 


	@ob_start();
	session_start();
	
	if(!empty($_SESSION['jenis_user'])){ // mengecek apakah user yang login role nya admin atau bukan
		require 'config.php';
		include $view;
		$lihat = new view($config);
		$perusahaan = $lihat -> perusahaan();
		//  admin
			include 'admin/template/header1.php'; // tampilan untuk header halaman admin
			include 'admin/template/sidebar_admin.php'; // tampilan untuk sidebar halaman admin
				if(!empty($_GET['page'])){
					include 'admin/module/'.$_GET['page'].'/index.php'; 
				}else{
					include 'admin/template/home_admin.php';
				}
			include 'admin/template/footer1.php'; //tampilan untuk footer halaman admin
		// end admin
	}else{
		echo '<script>window.location="index.php";</script>'; // jika user yang login bukan role admin, dilempar kembali ke halaman utama website
	}
?>

