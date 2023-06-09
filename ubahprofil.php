<?php
include 'koneksi.php';
session_start();
$id_user = $_SESSION['id_user'];
$query = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE id_user='$id_user'");
while ($data = mysqli_fetch_array($query)) {
	

?>
<?php 
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<style >
 body{
background-color: #f5f5f5;
margin-right: 30px;
}#box{
background: #ff8c00;
margin-left: 350px;
width: 668px;
height: 690px;
margin-bottom: 20px;
border-radius: 30px;
}#gambar1{
margin-left: px;
margin-top: -115px;
position: absolute;
}#gambar1 img{
border-radius: 50%;
margin-left: 260px;
width: 150px;
height: 130px;
}#gambar2{
margin-left: px;
padding-top: 40px;
}#box2{
	background-color: #fffff0;
	margin-top: -600px;
  padding-top: -60px;
	width: 668px;
	margin-left: 350px;
	height: 930px;
	border-radius: 30px;
}#box2 h3{ 
	text-align: center;
	font-family: MADE Tommy Soft, monospace;
	padding-top: 20px;
	font-size: 23px;
	 text-shadow: 1.5px 1px rgba(0, 0, 0, 0.42);
   color:#f36700;
 }.main-button {
display:inline-block;
  height: 40px;
  width: 120px; 
  border:none;
  border-radius:40px;
  background-color:#f36700;
  color:#FFF;
  font-size: 15px;
  font-weight: 700;
  -webkit-transition:0.2s opacity;
  transition:0.2s opacity;
  font-family: Poppins, cursive;
  text-shadow: 1.5px 1px rgba(0, 0, 0, 0.42);
 margin-left: 280px;
 margin-top: 40px;
 
}
.main-button:hover {
  color:#FFF;
  opacity:0.8;

}#isi {
  margin-left: 260px;

}#isi h1{
font-size: 15px;
font-family: Poppins, monospace;
padding-top:
margin-top: 30px;
margin-left: -250px;
line-height: 30px;
text-align: center;
  }#isi input{
    width: 300px;
 font-size: inherit;
 background-color: #fffff0;
 text-align-last: center;
  padding-top: 5px;
  margin-bottom: 2px;
  border: 0;
  margin-left: -70px;
  border-radius: 0;
  border-bottom: 2px solid rgba(0, 0, 0, 0.1);
  }
</style>
</head>
<body>
 <div id="box">
 	<div id="gambar2">
 <img src="images/garis2.png" width="666" height="50">
</div>
 	<br><br>
  <div id="gambar1">
 	<img src="<?php echo $data['foto']?>" height="80" width="100"/>
 </div>
  
 </div>
 <div id="box2">
  <br>
 	<h3>Ini Data Profil mu</h3>
<form method="POST" action="" enctype="multipart/form-data">
  <div id="isi">
    <h1>Nama Lengkap</h1>
    <input type="text" name="nama_lengkap" value="<?php echo$_SESSION['nama']; ?>">
  </div>

  <div id="isi">
    <h1>Jenis Kelamin :</h1>
    <input type="text" name="jenis_kelamin" value="<?php echo $_SESSION['jenis_kelamin']; ?>">
  </div>
  
  <div id="isi">
    <h1>Alamat</h1>
    <input type="text" name="alamat" value="<?php echo $_SESSION['alamat']; ?>">
  </div>

  <div id="isi">
    <h1>Email</h1>
    <input type="text" name="email" value="<?php echo $_SESSION['email']; ?>">
  </div>

  <div id="isi">
    <h1>Username</h1>
    <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>">
  </div>

  <div id="isi">
    <h1>Password</h1>
    <input type="text" name="password" value="<?php echo $_SESSION['password']; ?>">
  </div>

  <div id="isi">
    <h1>Tanggal Lahir</h1>
    <input type="date"  name="tanggal_lahir" value="<?php echo $_SESSION['tanggal_lahir']; ?>">
  </div>

  <div id="isi">
    <h1>Foto Profil</h1>
    <input type="file" name="foto" value="<?php echo $data["foto"]?>"/>
      </div>
<?php } ?>
 	<a href="ubahprofil.php" onclick="return confirm ('Jika berhasil kamu akan di alihkan kehalaman Login demi Kenyamanan Kamu, Tapi jika gagal Kamu akan tetap disini') "><b><button class="main-button" name="simpan">Simpan</button></b></a> 
 </form>
 <?php
  if(ISSET($_POST['simpan'])){
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
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
    $allowed_ext = array("gif", "jpg", "jpeg", "png");
    if(in_array($end, $allowed_ext)){
      if(move_uploaded_file($foto_temp, $path)){
        mysqli_query($mysqli, "UPDATE `pengguna` set `nama` = '$nama_lengkap', `jenis_kelamin` = '$jenis_kelamin', `alamat` = '$alamat', `email` = '$email',  `username` = '$username',`password` = '$password',`tanggal_lahir` = '$tanggal_lahir', `foto` = '$path' WHERE `id_user` = '$id_user'");
        echo "Berhasil Menyimpan";
        header("location: index.php");
      } 
    }else{
      echo "<script>alert('File kamu bukan bertipe gambar')</script>";
    }
  }
?>


 </div>
</body>
</html>