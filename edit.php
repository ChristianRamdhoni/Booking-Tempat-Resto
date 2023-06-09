<?php
session_start();
$id_user = $_SESSION['id_user'];
	require_once 'koneksi.php';
	if(ISSET($_POST['simpan'])){
		$nama_lengkap = $_POST['nama_lengkap'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$usia = $_POST['usia'];
		$alamat =  $_POST['alamat'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$foto_name = $_FILES['foto']['name'];
		$foto_temp = $_FILES['foto']['tmp_name'];
		$exp = explode(".", $foto_name);
		$end = end($exp);
		$name = time().".".$end;
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png", "");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($foto_temp, $path)){
				mysqli_query($mysqli, "UPDATE `pengguna` set `nama_lengkap` = '$nama_lengkap', `jenis_kelamin` = '$jenis_kelamin', `usia` = '$usia', `alamat` = '$alamat', `email` = '$email',  `username` = '$username',`password` = '$password',`tanggal_lahir` = '$tanggal_lahir', `foto` = '$path' WHERE `id_user` = '$id_user'") or die(mysqli_error());
				echo "<script>alert('Berhasil Menyimpan!')</script>";
				header("location: profil.php");
			}	
		}else{
			echo "<script>alert('Hanya Gambar')</script>";
		}
	}
?>