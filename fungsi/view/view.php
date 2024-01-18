<?php
	/*
	 * PROSES TAMPIL  
	 */ 
	 class view {
		protected $db;
		function __construct($db){
			$this->db = $db;
		}
			
			function user(){
				$sql = "select user.*, login.*
						from user inner join login on user.id_user = login.id_user";
				$row = $this-> db -> prepare($sql);
				$row -> execute();
				$hasil = $row -> fetchAll();
				return $hasil;  
			}

			function user_edit($id){
				$sql = "select user.*, login.*
						from user inner join login on user.id_user = login.id_user
						where user.id_user= ?";
				$row = $this-> db -> prepare($sql);
				$row -> execute(array($id));
				$hasil = $row -> fetch();
				return $hasil;
			}
			
			function perusahaan(){
				$sql = "select*from perusahaan where id_perusahaan='1'";
				$row = $this-> db -> prepare($sql);
				$row -> execute();
				$hasil = $row -> fetch();
				return $hasil;
			}

			
			function inventory_admin(){
				$sql = "select * from inventory_admin";
				$row = $this-> db -> prepare($sql);
				$row -> execute();
				$hasil = $row -> fetchAll();
				return $hasil;
			}

			function main_inventory(){
				$sql = "select * from main_inventory";
				$row = $this-> db -> prepare($sql);
				$row -> execute();
				$hasil = $row -> fetchAll();
				return $hasil;
			}
			
			function pengembalianbarang_admin(){
				$sql = "select * from pengembalianbarang_admin";
				$row = $this-> db -> prepare($sql);
				$row -> execute();
				$hasil = $row -> fetchAll();
				return $hasil;
			}

			function inventory_admin_id($id){
				$sql = "select * from inventory_admin where no_room = '$id'";
				$row = $this-> db -> prepare($sql);
				$row -> execute();
				$hasil = $row -> fetchAll();
				return $hasil;
			}
			function pengadaan_admin_id($id){
				$sql = "select * from pengadaan_admin where no_room = '$id'";
				$row = $this-> db -> prepare($sql);
				$row -> execute();
				$hasil = $row -> fetchAll();
				return $hasil;
			}
			function kelola_user(){
				$sql = "select * from user";
				$row = $this-> db -> prepare($sql);
				$row -> execute();
				$hasil = $row -> fetchAll();
				return $hasil;
			}
			function pengadaan_admin(){
				$sql = "select * from pengadaan_admin";
				$row = $this-> db -> prepare($sql);
				$row -> execute();
				$hasil = $row -> fetchAll();
				return $hasil;
			}
			function main_pengadaan(){
				$sql = "select * from main_pengadaan";
				$row = $this-> db -> prepare($sql);
				$row -> execute();
				$hasil = $row -> fetchAll();
				return $hasil;
			}
			function room_inventory(){
				$sql = "select * from room_inventory";
				$row = $this-> db -> prepare($sql);
				$row -> execute();
				$hasil = $row -> fetchAll();
				return $hasil;
			}
			function room_pengadaan(){
				$sql = "select * from room_pengadaan";
				$row = $this-> db -> prepare($sql);
				$row -> execute();
				$hasil = $row -> fetchAll();
				return $hasil;
			}
			function inventoryadmin_edit($id){
				$sql = "select * from inventory_admin where id=?";
				$row = $this-> db -> prepare($sql);
				$row -> execute(array($id));
				$hasil = $row -> fetch();
				return $hasil;
			}

			function main_inventory_edit($id){
				$sql = "select * from main_inventory where id=?";
				$row = $this-> db -> prepare($sql);
				$row -> execute(array($id));
				$hasil = $row -> fetch();
				return $hasil;
			}
			function main_pengadaan_edit($id_pengadaan){
				$sql = "select * from main_pengadaan where id_pengadaan=?";
				$row = $this-> db -> prepare($sql);
				$row -> execute(array($id_pengadaan));
				$hasil = $row -> fetch();
				return $hasil;
			}

			function pengembalianbarang_edit($id){
				$sql = "select * from pengembalianbarang_admin where id=?";
				$row = $this-> db -> prepare($sql);
				$row -> execute(array($id));
				$hasil = $row -> fetch();
				return $hasil;
			}
			function inventoryadmin_id_edit($id){
				$sql = "select * from inventory_admin where id =?";
				$row = $this-> db -> prepare($sql);
				$row -> execute(array($id));
				$hasil = $row -> fetch();
				return $hasil;
			}
			function pengadaanadmin_edit($id_pengadaan){
				$sql = "select * from pengadaan_admin where id_pengadaan=?";
				$row = $this-> db -> prepare($sql);
				$row -> execute(array($id_pengadaan));
				$hasil = $row -> fetch();
				return $hasil;
			}
			function pengadaanadmin_id_edit($id_pengadaan){
				$sql = "select * from pengadaan_admin where id_pengadaan =?";
				$row = $this-> db -> prepare($sql);
				$row -> execute(array($id_pengadaan));
				$hasil = $row -> fetch();
				return $hasil;
			}
			function roominventory_edit($id){
				$sql = "select * from room_inventory where id=?";
				$row = $this-> db -> prepare($sql);
				$row -> execute(array($id));
				$hasil = $row -> fetch();
				return $hasil;
			}
			function roompengadaan_edit($id){
				$sql = "select * from room_pengadaan where id=?";
				$row = $this-> db -> prepare($sql);
				$row -> execute(array($id));
				$hasil = $row -> fetch();
				return $hasil;
			}
			function inventoryofficer_edit($id){
				$sql = "select * from inventory_admin where id=?";
				$row = $this-> db -> prepare($sql);
				$row -> execute(array($id));
				$hasil = $row -> fetch();
				return $hasil;
			}
			function pengadaanofficer_edit($id_pengadaan){
				$sql = "select * from pengadaan_admin where id_pengadaan=?";
				$row = $this-> db -> prepare($sql);
				$row -> execute(array($id_pengadaan));
				$hasil = $row -> fetch();
				return $hasil;
			}
			function kelolauser_edit($id_user){
				$sql = "select * from user where id_user=?";
				$row = $this-> db -> prepare($sql);
				$row -> execute(array($id_user));
				$hasil = $row -> fetch();
				return $hasil;
			}
		
			
			

			

		
			
			
			
			
			
			

			
			


			

			
	 }
