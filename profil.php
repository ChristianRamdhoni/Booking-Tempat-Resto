<?php
include 'koneksi.php';
session_start();
$id_user = $_SESSION['id_user'];
$query = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE id_user='$id_user'");
while ($data = mysqli_fetch_array($query)) {
  

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
  height: 580px;
  border-radius: 30px;
}#box2 p{ 
  text-align: center;
  font-family: MADE Tommy Soft, monospace;
  padding-top: 20px;
  font-size: 23px;
  position: absolute;
  margin-left: 230px;
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
 margin-left: 210px;
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
  }#box2{
    line-height: 25px;
  
  }#box2 h1{
    margin-left: 300px;
    line-height: 30px;
    font-family: arial, monospace;
    font-size: 17px;

  }#box2 h2{
    position: absolute;
    margin-top: 11px;
    line-height:;
    margin-left: 30px;
    font-size: 19px;
    font-family: Poppins, monospace;

  }.tutup{
    position: absolute;
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
 margin-left: 20px;
 margin-top: 40px;
  }.tutup:hover {
  color:#FFF;
  opacity:0.8;
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
   <?php } ?>
 </div>
 <div id="box2">
  <br>
  <p>Ini Data Profil mu</p>
<div id="text">
  <br><br><br>
  <h2>Nama Lengkap : <h1><?php echo $_SESSION['nama']; ?></h1></h2>
  <h2>Jenis Kelamin : <h1><?php echo $_SESSION['jenis_kelamin']; ?></h1></h2>
    <h2>Alamat : <h1><?php echo $_SESSION['alamat']; ?></h1></h2>
      <h2>Email : <h1><?php echo $_SESSION["email"]; ?></h1></h2>
      <h2>Username : <h1><?php echo $_SESSION['username']; ?></h1></h2>
      <h2>Password : <h1><?php echo $_SESSION['password']; ?></h1></h2>
      <h2>Tanggal Lahir : <h1><?php echo $_SESSION['tanggal_lahir']; ?> </h1></h2>
      <h2>ID User : <h1><?php echo $_SESSION['id_user']; ?></h1></h2>
      <a href="ubahprofil.php"><b><button class="main-button">Ubah</button></b></a> 
      <a href="beranda.php"><b><button class="tutup">Tutup</button></b></a>
</div>

 </div>
</body>
</html>