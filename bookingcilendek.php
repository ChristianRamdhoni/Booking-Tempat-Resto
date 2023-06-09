<?php
include 'koneksi.php';
session_start();
if ($_SESSION['status']!="login") {
  header("location: beranda.php?pesan=belum_login");
  echo "anda belum login";
}
//menampilkan settingan user kuota dari database
$q_kuota= mysqli_query($mysqli,"SELECT kuota FROM kuota_cilendek ORDER BY id_user_kuota ASC limit 1") or die (mysqli_error($mysqli)) ;
$kuota_max= mysqli_fetch_array($q_kuota)['kuota'];
//jika tidak ditemukan
if (empty($kuota_max)) {
	$kuota_max=12;
}
$q_user= mysqli_query($mysqli, "SELECT nomor_pemesan FROM booking") or die (mysqli_error($mysqli));
$kuota_saat_ini = mysqli_num_rows($q_user);

$sisa_kuota = $kuota_max - $kuota_saat_ini;
if ($sisa_kuota==0) {
	echo "<h1>Maaf, kuota pendaftaran sudah penuh!</h1>";
	exit;
}
$sql = mysqli_query($mysqli, "select max(nomor_pemesan) as maxID from booking");
           $data = mysqli_fetch_array($sql);

           $kode = $data['maxID'];

           $kode++;
           $ket = "";
           $kodeauto = $ket . sprintf("%03s", $kode);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="Booking.css">
	<title>Pemesanan Tempat </title>
</head>

<body>
	<div class="header">
		<div id="gambar">

<a href="beranda.php"><img src="images/logo3.png" width="50px" height="50px"></a>
</div>
		<div id="session"><?php echo  $_SESSION['nama'] ;?></div>
		<div id="logo_text"> <img src="images/text_logo.png" width="130" height="50"></div>
			</div>

<h1 id=popup_kuota>
	<?= $kuota_max; ?> Kuota Pendaftaran by Admin
	Sisa <?=$sisa_kuota; ?> Pendaftaran Lagi!
</h1>

		<div class="appointment-w3">
		<form action="#" method="post">
			<div class="personal">
			<div class="main">
				<div id="judul">
					<br>
					<h2 id="text_judul">Silahkan di Booking..</h2>
				</div>
				<br>
				<h3>No.Pemesanan</h3>
					<div class="form-left-w3l">
					<input type="text" class="top-up" name="no_pesan" readonly value="<?php echo $kodeauto;  ?>" required="">
					</div>

					<div class="form-left-w3l">
					<input type="text" class="top-up" name="id_user" readonly value="<?php echo $_SESSION['id_user'] ?>" required="">
					</div>

					<div class="form-left-w3l">
					<input type="text" class="top-up" name="nama" placeholder="Nama Lengkap" required="">
					</div>

					<div class="form-left-w3l">
					<input type="email" name="email" placeholder="Email Kamu.." required="">
					</div>

					<div class="form-right-w3ls ">
					<input class="buttom" type="text" name="nomor_hp" placeholder="Nomor yang bisa dihubungi" required="">
					</div>
					</div>
				
			</div>
			<div class="information">
			<div class="main">
			<div class="form-left-w3l">
			<input id="datepicker" name="booking" type="date" placeholder="Booking Date &" required="">
			<input type="text" id="timepicker" name="jam" class="timepicker form-control hasWickedpicker" placeholder="cth. 18:00 PM" required="">
			<div class="clear"></div>
			</div>
			</div>
				
				<div class="main">
				<div class="form-left-w3l">
					<select class="form-control" name="tamu">
					<option value="">Tamu</option>
					<option>1 Orang</option>
					<option>2 Orang</option>
					<option>3 Orang</option>
					<option>4 Orang</option>
					<option>5 Orang</option>
					<option>6 Orang</option>
					<option>7 Orang</option>
					<option>8 Orang</option>
					<option>9 Orang</option>
					<option>10 Orang</option>
					<option>11 Orang</option>
					<option>12 Orang</option>
					<option>13 Orang</option>
					<option>14 Orang</option>
					<option>15 Orang</option>
					<option>16 (MAX) Orang</option>
					</select>
					</div>
				</div>
				</div>
				
				<div class="form-left-w3l">
				<input type="text" class="top-up" name="keterangan" placeholder="Keterangan(cth. siapkan asbak)" required="">
				</div>

				<div class="form-left-w3l">
				<input type="text" class="top-up" name="status" value="Aktif" readonly required="">
				</div>

				<div class="form-left-w3l">
				<input type="text" class="top-up" name="cabang" value="@Cilendek" readonly required="">
				</div>
				
			<div class="btnn">
			<input type="submit" name="submit" value="Pesan Tempat">
			</div>
			<h3>*perlu diperhatikan bahwa pemesanan ini berlaku hanya untuk satu tempat, mengingat dengan kondisi pandemi.</h3>
		</form>
						
		 <?php
		
  if (isset($_POST['submit'])) {
    $no_pesan= $_POST['no_pesan'];
    $id_user= $_POST['id_user'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $nomor_hp=$_POST['nomor_hp'];
    $booking=$_POST['booking'];
    $jam=$_POST['jam'];
    $tamu=$_POST['tamu'];
    $keterangan=$_POST['keterangan'];
    $status=$_POST['status'];
    $cabang=$_POST['cabang'];


    if ($kuota_saat_ini >= $kuota_max) {
    	$pesan = 'Maaf, Kuota Pendaftaran sudah penuh!';
    	$redirect = "";

    }else{


    $sql  = "INSERT INTO booking(nomor_pemesan, id_user, nama_lengkap, email, nomor_hp, booking,jam,tamu,keterangan,status, cabang) VALUES('$no_pesan', '$id_user', '$nama', '$email','$nomor_hp','$booking','$jam','$tamu','$keterangan','$status','$cabang')";
    $result  = $mysqli->query($sql);
    if ($result) {
    	$pesan ="Berhasil mendaftar, Terimakasih";
    }else{
    	$pesan = 'Maaf, Anda memiliki pesanan yang masih aktif!';
    	$redirect ="";
    }
  }
  echo ("<script language='JavaScript'>
  		window.alert('$pesan'); window.location.href='$redirect';
  	</script>");
  }
		?>
	</div>

	<br><br>
</div>
<br>
	<div class="copy">
		<p>&copy;2020 Kedai Bujang. All Rights Reserved |  <a href="http://www.instagram.com/ramdhonichristian/" target="_blank">@ramdhoni_christian</a></p>
	</div>
	</body>
</html>