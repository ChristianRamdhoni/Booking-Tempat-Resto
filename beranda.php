<?php
include 'koneksi.php';
session_start();
$id_user= $_SESSION['id_user'];
 $query = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE id_user='$id_user'");
while ($data = mysqli_fetch_array($query)) {
if ($_SESSION['status']!="login") {
  header("location: beranda.php?pesan=belum_login");
  echo "anda belum login";
 
  


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="shortcut icon" href="images/logo3.png">
    
 <title>Document</title>
<style>

@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;

}
body {
    background-color: #F5F5F5;
    color: #374049;

}

.wrapper {
    position: fixed;
    left: 0;
    width: 255px;
    height: 110%;
    background: -webkit-linear-gradient(left, #7579ff, #b224ef);
    margin-top: -670px;
    line-height: 20px;
    font-family: Poppins, monospace;
}
.wrapper .navbar {
    position: relative;
    margin-top: 50px;
    color: white;
}

.title-1
{
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    font-size: 20px;
    font-style: normal;
    margin-top: 16px;
    color:#374049;
    font-family: 'Share Tech Mono', monospace;

}


.wrapper .navbar .profil {
    padding: 25px;
    text-align: center;
}
.wrapper .navbar .profil .foto_profil {
    width: 70px;
    margin: 0 auto 10px;
    display: block;
}
.wrapper .navbar .profil .foto_profil img {
    width: 120%;
    margin-left: -5px;
}
.wrapper .navbar .profil .profil_info .name {
    font-size: 17px;
    text-transform: capitalize;
    font-weight: 800;
    color: #fff;

}.foto_profil img{
    border-radius: 50%; 
    
}
.wrapper .navbar .profil .profil_info .role {
    font-weight: 600;
    font-size: 15px;
    color: #ffa500;
}

.wrapper .navbar ul 
{
    padding: 10px 40px;
}
.wrapper .navbar ul li > a {
    display: block;
    position: relative;
    font-size: 14px;
    padding: 15px;
    height: 50px;
    color: #fff;
    font-weight: 600;
    transition: all 2s ease;

  
}
.wrapper .navbar ul li a span.icon {
    margin-right: 10px;
}

.wrapper .navbar ul li a > span {
    display: inline-block;
}a.active{
  color: red;
}




a.active .icon,
a:hover .icon
{
    color: pink;
}
a.active .title,
a:hover .title
{
    color: #374049;
    font-weight: 800;
}.main-button {
  display:inline-block;
  padding:15px 30px;
  border:none;
  border-radius:40px;
  background-color:#f36700;
  color:#FFF;
  text-transform: uppercase;
  font-weight: 700;
  -webkit-transition:0.2s opacity;
  transition:0.2s opacity;
  font-family: 'Dancing Script', cursive;
  text-shadow: 1.5px 1px rgba(0, 0, 0, 0.42);
  margin-left: 300px;
  margin-top: -60px;
 }
.main-button:hover {
  color:#FFF;
   box-shadow: 0 0 10px 4px #34495e;
  opacity:0.8;

 }
.form-login {
  display: flex;
  align-items: center;
  margin-left: 23px; }


.navbar ul li:nth-child(1) > a:hover .icon
{
    color: yellow;
}
.navbar ul li:nth-child(3) > a:hover .icon
{
    color: #f36700;
}
.navbar ul li:nth-child(4) > a:hover .icon
{
    color: #ff375c;
}
.navbar ul li:nth-child(5) > a:hover .icon
{
    color: #41ffed;
}
.navbar ul li:nth-child(6) > a:hover .icon
{
    color: #ff5100;
}
.navbar ul li:nth-child(7) > a:hover .icon
{
    color: #e65aff;
}
.navbar ul li:nth-child(8) > a:hover .icon
{
    color: #ff4141;
}
#header{
    margin-left: 130px;
    background-color: white;
    height: 60px;
    -webkit-box-shadow: 0px 3px 10px -3px rgba(0, 0, 0, 2);
            box-shadow: 0px 3px 10px -3px rgba(0, 0, 0, 2);
               text-align: left;
}
#box{
    background: -webkit-linear-gradient(left, #fff, #fff, #d0d0d0);
    margin-left: 280px;
    margin-right: 55px;
    height: 530px; 
    left: 100px;
    border-radius: 11px;
    text-align: center;
    width: 1050px;
}#pict{
    text-align: left;
    margin-top: 0px;
    padding-top: 20px;
}#textdashboard{
    margin-top: -290px;
    margin-left: 330px;
    font-family: Poppins, monospace;
    font-size: 23px;
    color: #696984;
}#pict2{
    text-align: left;
    margin-top: -30px;
    padding-top: 0px;
    margin-left: 140px;
}#judul{
 margin-left: 600px;
 margin-top: -45px;
}.dropdown{
  position: relative;
  display: inline-block;
}.lainnya{
  display: none;
   background: -webkit-linear-gradient(left, #b224ef,#7579ff);
  min-width: 200px;
  border-radius: 10px;
}.lainnya a{
  color: #fff;
  padding: 4px;
  text-decoration: none;
  display: block;
  font-size: 13px;
  margin-left: 10px;
}.dropdown:hover .lainnya{
  display: block;

}#versi{
  padding-top: 110px;
  padding-left: 60px;
  font-family: calibri, monospace;
  font-size: 15px;
}#waktu{
  font-size: 20px;
  margin-top: -35px;
  margin-left: 495px;
  font-family: MADE Tommy Soft, monospace;
}
</style>

</head>
<body>
    
<div id="header"> 
    <br>
    <div id="pict2">
      <br>
    <img src="images/logo2.png" width="40px" height="50px">
  </div>
  <div id="judul">
       <img src="images/text_logo.png" width="120" height="35">
       <p id="waktu"></p></h1>
  <script >
    var dt = new Date();
    document.getElementById("waktu").innerHTML = dt.toLocaleDateString();
  </script>
     </div>
          </div> <br> <br>

          <div id="box">
            <div id="pict">
                <br><br><br><br>

            <img src="images/kopit2.png" width="400px" height="300px">
        </div>
            <div id="textdashboard">
              <h4 align="margin-top">Hai, selamat datang! <?php echo  $_SESSION['nama_pangg']; ?><br>untuk sekarang kamu bisa Memesan <br> tempat di Kedai Bujang secara online <br> ayo pesankan tempat untukmu, dan selalu <br>jaga jarak dan patuhi protokol <br> kesehatan yaa!</h4>
          </div>
          <br><br>
          <a href="pilih_cabang.php"><b><button class="main-button">Mulai Sekarang</button></b></a>
          </div>
      
<div class="wrapper">
<div class="navbar">
           <br>
           <center><h4>ID User :  <?php echo $_SESSION['id_user'];?></h4></center>
            <div class="profil">
                <div class="foto_profil">
                   <img src="<?php echo $data['foto']?>" height="80px" width="130"/>
                 <?php } ?>
                </div>
                <div class="profil_info">
                 <h2 class="name"><?php echo $_SESSION['nama']; ?></h2>
                 <p class="role">User</p>
                </div>
            </div>

            <ul>
                <li>
                    <a href="beranda.php" class="active">
                    <span class="icon"><i class="fa fa-tachometer-alt"></i></span>
                    <span class="title">Beranda</span>
                    </a>
                </li>
               
                <li>
                    <a href="pilih_cabang.php">
                    <span class="icon"><i class="far fa-file-alt"></i></span>
                    <span class="title">Reservasi</span>
                    </a>
                </li>
                
                  <li>
                    <a href="penawaran.php" class="">
                    <span class="icon"><i class="fa fa-star"></i></span>
                    <span class="title">Penawaran</span>
                    </a>
                </li>
                
                <li>
                    <a href="pesananku.php">
                    <span class="icon"><i class="fa fa-database"></i></span>
                    <span class="title">Pesanan'ku</span>
                    </a>
                </li>
                <li>
                    <a href="masukan.php">
                    <span class="icon"><i class="fa fa-users"></i></span>
                    <span class="title">Lapor Admin</span>
                    </a>
                </li>

                <li>
                  <div class="dropdown">
                     <span class="icon"><i class="fa fa-cog"></i></span>
                    <span class="title">Settings</span>
                    <div class="lainnya">
                      <a href="profil.php">Profil</a>
                      <a href="ubahprofil.php">Ubah Profil</a>
                      <a href="syaratketentuan.html">Syarat Ketentuan</a>
                      <a href="logout.php" onclick="return confirm ('Apakah anda yakin untuk keluar?') ">Keluar</a>
                    </div>
                    </div>
                </li>
            </ul>
            <div id="versi">
              <h4>Versi2.20.299.2 beta </h4>
            </div>
    </div>

</div>







</body>
</html>