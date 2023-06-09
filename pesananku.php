<?php
include "koneksi.php";
session_start();
$id_user = $_SESSION['id_user'];
if ($_SESSION['status']!="login") {
  header("location: beranda.php?pesan=belum_login");
  echo "anda belum login";
}

$query = mysqli_query($mysqli, "SELECT * FROM booking WHERE id_user='$id_user' ORDER BY nomor_pemesan DESC");
$cek = mysqli_num_rows($query);
if ($cek==0) {
	header("location:404notfound.html");
	exit;
}
$i=1;
foreach ($query as $key => $value) { ?>
<?php } ?>	

<!-- MEMBUAT PEMBENTUKAN  PESANAN SESUAI ID USER (AKUN)-->

<!DOCTYPE html>
<html>
<head>
<title>Pesananku</title>
<style >
body{
	background-size: cover;
	width: 100%;
}
#header{
	width: 100%;
	background-color: #fff;
	-webkit-box-shadow: 0px 3px 10px -3px rgba(0, 0, 0, 2);
            box-shadow: 0px 3px 10px -3px rgba(0, 0, 0, 2);
               text-align: left;
    height: 50px;
    border-radius: 5px; 
    margin-top: -20px;
    margin-left: -10px;
}#header p{
margin-top: -30px;
color: #000;
margin-left: 1200px;
font-family: calibri, monospace;
font-size: 20px;


}#logo{
	margin-top: 7px;
	margin-left: 600px;

}#judul{

   text-shadow: 1.5px 1px rgba(0, 0, 0, 0.42);
   color:#f36700;
   font-family: MADE Tommy Soft, monospace;
   font-size: 30px;
   padding-top: 4px;
   margin-left: 10px;
}#box{
	border-radius: 30px;
	background-color: white;
	width: 600px;
	height: 1000px;
    box-shadow: 7px 10px 15px gray;
}#pesanan{
	font-family: Poppins, monospace;
	line-height: 10px;
	text-align-last: center;
	margin-left: 30px;
}#pesanan h1{
	margin-left: -350px;
	color: #656565;
	font-size: 25px;
}#pesanan img {
	margin-left: -29px;
	margin-top: -60px;
}#pesanan h3{
	text-align-last: left;
	line-height: 12px;
}#pesanan p{
	font-family: calibri, monospace;
	margin-left: 105px;
	margin-top: -11px;
}#on{
	margin-left: -365px;
	margin-top: -26px;
}#pesanan h4{
	font-family: calibri, monospace;
	margin-top: -10px;
	text-align-last: left;
	font-size: 20px;
	color: #656565;
}#pesanan h2{
	font-family: calibri, monospace;
	line-height: 20px;
	font-size: 17px;
	margin-left: 400px;
	text-align-last: left;

}.main-button {
  display:inline-block;
  padding:15px 30px;
  border:none;
  border-radius:40px;
  background-color:#f36700;
  color:#FFF;
  font-size: 15px;
  font-weight: 700;
  -webkit-transition:0.2s opacity;
  transition:0.2s opacity;
  font-family: Poppins, monospace;
  text-shadow: 1.5px 1px rgba(0, 0, 0, 0.42);
  margin-left: 330px;
  margin-top: 40px;
}
.main-button:hover {
  color:#FFF;
  opacity:0.8;

 }
</style>
</head>
<body background="images/background.jpg">
<div id="header">
	<h1 id="judul">Data Pesanan'mu <p id="waktu"></p></h1>
	<script >
		var dt = new Date();
		document.getElementById("waktu").innerHTML = dt.toLocaleDateString();
	</script>
</div>

<div id="isi">
	<br><br><br>
	<center><div id="box">
		<div id="pesanan">
			<br><br>
			<h1>Detail Pesanan</h1>
			<img src="images/pembatas.png" width="600px" height="80px">
			<br><br>
			<h3>Nomor Pemesanan :  <h4><?= $value  ['nomor_pemesan']; ?></h4></h3>
			<h3>Nama Pemesan    : <h4> <?= $value['nama_lengkap']; ?></h4></h3>
			<h3>Email     : <h4> <?= $value['email']; ?></h4></h3>
			<h3>Nomor Handphone : <h4> <?= $value['nomor_hp']; ?></h4></h3>
			<h3>Tanggal Booking : <h4><?= $value['booking']; ?></h4></h3>
			<h3>Jam Check-In :<h4> <?= $value['jam']; ?></h4></h3>
			<h3>Jumlah Tamu : <h4> <?= $value['tamu']; ?></h4></h3>
			<h3>Keterangan Tambahan : <h4> <?= $value['keterangan']; ?></h4></h3>
			<h3>Cabang : <h4> <?= $value['cabang']; ?></h4></h3>
			<img src="images/pembatas.png" width="600px" height="80px">
			<br>
			<h3>Status :<p><?= $value['status']; ?></p></h3>
			<div id="on">
			<img src="images/online2.png" width="20px" height="20px">

			<h2>Apakah kamu sudah pulang kerumah dari Kedai Bujang? <br>jika iya, yuk! bantu admin
			Untuk mengelola datamu seperti<br> mengonfirmasi jika anda sudah pulang</h2>

<a href="hapuspesanan.php" onclick="return confirm ('Apakah anda yakin?') "><b><button class="main-button">Konfirmasi Pulang</button></b></a>
		</div>
	</div>
	</div></center>
	
</div>
</body>
</html>


