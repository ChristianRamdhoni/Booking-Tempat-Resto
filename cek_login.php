<?php
session_start();
include_once 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$sql  = ("select * from pengguna where username='$username' and password='$password'");
$hasil = mysqli_query ($mysqli, $sql) or die (mysqli_error($mysqli));
$jumlah = mysqli_num_rows($hasil);

if ($jumlah>0) {
	$row = mysqli_fetch_assoc($hasil);
	$_SESSION['username']= $username;
	$_SESSION['password']= $password;
 	$_SESSION["nama"]=$row["nama"];
 	$_SESSION["nama_pangg"]=$row["nama_panggilan"];
	$_SESSION["alamat"]=$row["alamat"];
	$_SESSION["usia"]=$row["usia"];
	$_SESSION["email"]=$row['email'];
	$_SESSION["tanggal_lahir"]=$row["tanggal_lahir"];
	$_SESSION["id_user"]=$row["id_user"];
	$_SESSION["jenis_kelamin"]= $row["jenis_kelamin"];
	$_SESSION["foto"]= $row=["foto"];
	$_SESSION['status']= "login";
	header("location:beranda.php");

}else{
	echo "password atau username salah";
}
?>