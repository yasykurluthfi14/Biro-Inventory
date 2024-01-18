<?php
	@ob_start();
	session_start();
	
	if(isset($_POST['proses'])){ // fungsi username dan password di proses

		
		require 'config.php';
			
		$username = strip_tags($_POST['username']); // ambil username yang diinput
		$pass = strip_tags($_POST['pass']); // ambil password yang diinput
	
	
		
		$sql = "select * from user where username ='$username' and pass = md5('$pass')"; // mengecek apakah username dan password ada di database biro
		$row = $config->prepare($sql);
		$row -> execute(array($username,$pass));
		$jum = $row -> rowCount();

	
		
		// cek jenis user dari username dan password yang diinput
		if($jum > 0){
			
			$user = $row -> fetch();
			$_SESSION['jenis_user'] = $user['jenis_user'];


			if($_SESSION['jenis_user']=='admin'){ // jika jenis user dari username berupa admin, halaman akan dipindahkan ke admin.php
				$_SESSION['username'] = $username;
			echo '<script>alert("Login Sukses");window.location="admin.php"</script>';

		}

			else if($_SESSION['jenis_user']=='officer'){ // jika jenis user dari username berupa officer, halaman akan dipindahkan ke officer.php
				$_SESSION['username'] = $username;
			echo '<script>alert("Login Sukses");window.location="officer.php"</script>';
		
		}

			else if($_SESSION['jenis_user']=='manager'){ // jika jenis user dari username berupa manager, halaman akan dipindahkan ke manager.php
				$_SESSION['username'] = $username;
			echo '<script>alert("Login Sukses");window.location="manager.php"</script>';
			}
			
			else{
			echo '<script>alert("Username atau Password Salah");window.location="login.php"</script>'; // jika jenis user dari username tidak ada di database, halaman akan dipindahkan kembali ke login.php
			}

		}else{
			echo '<script>alert("Login Gagal");history.go(-1);</script>'; // alert jika username atau password salah
		}
	}
?>

<!-- Tampilan untuk Login  -->


<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword">

    <title>Login</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
   
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
	<link href='assets/img/logo.png' rel='shotcut icon'>
    
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="goutfirst">
      <img style=" padding-top: 15px;width: 150px; height:150px"src ="assets/img/logo.png"  id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="POST">
      <input type="text" id="username" class="form-group" name="username" placeholder="Username"> 
      <input type="password" id="password" class="form-group" name="pass" placeholder="Password">
      <input type="submit" class="fadeIn fourth" name="proses"> <!-- setelah menekan tombol submit, username sama password dilempar ke atas halaman no 4 untuk di proses  -->
    </form>

   <!-- End Tampilan untuk Login  -->

  </div>
</div>
</body>
</html>