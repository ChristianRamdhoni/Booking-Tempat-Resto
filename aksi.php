<?php
include 'koneksi.php';
   if($_POST['upload']){
	$ekstensi_diperbolehkan	= array('png','jpg');
	$foto = $_FILES['file']['name'];
	$x = explode('.', $foto);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];	
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		    if($ukuran < 1044070){			
			move_uploaded_file($file_tmp, 'file/'.$nama);
			$nama = $_POST['nama'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$usia = $_POST['usia'];
			$alamat = $_POST['alamat'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$tanggal_lahir = $_POST['tanggal_lahir'];
			$id_user = $_POST['id_user'];
			$query = mysql_query("UPDATE pengguna SET nama='$nama',jenis_kelamin='$jenis_kelamin',usia='$usia',alamat='$alamat',email='$email',username='$username',password='$password',tanggal_lahir='$tanggal_lahir',id_user='$id_user'");
			if($query){
				echo 'FILE BERHASIL DI UPLOAD';
			}else{
				echo 'GAGAL MENGUPLOAD ';
			}
		    }else{
			echo 'UKURAN FILE TERLALU BESAR';
		    }
	       }else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	       }
    }
?>