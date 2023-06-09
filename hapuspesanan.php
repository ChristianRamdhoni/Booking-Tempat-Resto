<?php
include 'koneksi.php';
session_start();
$id_user = $_SESSION['id_user'];
$query = mysqli_query($mysqli, "DELETE FROM booking WHERE id_user='$id_user'");
$result  = $mysqli->query($query);
    if ($result) {
    	$pesan ="Berhasil menghapus, Terimakasih"; 
    }else{
    	$pesan = 'Maaf, penghapusan pesanan gagal!';
    	$redirect ="";
  echo ("<script language='JavaScript'>
  		window.alert('$pesan'); window.location.href='$redirect';
  	</script>");
  }

header("location:404notfound.html");
?> 