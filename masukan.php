<?php
include 'koneksi.php';
session_start();
$id_user = $_SESSION["id_user"];
 $query = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE id_user='$id_user'");
while ($data = mysqli_fetch_array($query)) {
if ($_SESSION['status']!="login") {
  header("location: beranda.php?pesan=belum_login");
  echo "anda belum login";
 }
}

?>
<?php
$no_pesan= mysqli_query($mysqli,"SELECT nomor_pemesan FROM booking ORDER BY id_user") or die (mysqli_error($mysqli)) ;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style >
      *{
  margin: 0;
  padding: 0;
  font-family: "montserrat",sans-serif;
}
.contact-section{
  background: -webkit-linear-gradient(left, #b224ef,#7579ff);
  background-size: cover;
  padding: 40px 0;
  height: 530px}
.contact-section h1{
  text-align: center;
  color:  white;
  font-family: Poppins, monospace;
}
.border{
  width: 100px;
  height: 30px;
  border-radius: 20px;
  background: white;
  font-family: Poppins, monospace;
  color:  #ff8c00;
  text-align-last: center;
  padding-top: 6px;
  margin: 40px auto;
  margin-top: 10px;
}

.contact-form{
  max-width: 600px;
  margin: auto;
  padding: 0 10px;
  overflow: hidden;
}

.contact-form-text{
  display: block;
  width: 100%;
  box-sizing: border-box;
  margin: 16px 0;
  border: 0;
  background: #ff8c00;
  padding: 20px 40px;
  outline: none;
  border-radius: 20px;
  color: white;
  font-family: MADE Tommy Soft, monospace;
  transition: 0.5s;
}
.contact-form-text:focus{
  box-shadow: 0 0 10px 4px #34495e;
}
textarea.contact-form-text{
  resize: none;
  height: 120px;
}
.contact-form-btn{
  float: right;
  border: 0;
  background: #34495e;
  color: #fff;
  padding: 12px 50px;
  border-radius: 20px;
  cursor: pointer;
  transition: 0.5s;
  font-family: Poppins, monospace;
}
.contact-form-btn:hover{
  background: #2980b9;
}footer{
  height: 30px;
  line-height: 5px;
}#instagram h3{
margin-left: 40px;
margin-top: -15px;
font-size: 15px;
}#instagram img{
  padding-top: 10px;
  margin-left: 10px;
}#twitter img{
  margin-left: 170px;
  margin-top: -15px;
}#twitter h3{
  margin-left: 205px;
  margin-top: -15px;
  font-size: 15px;
}#facebook img{
  margin-left: 360px;
  margin-top: -15px;
}#facebook h3{
  margin-left: 400px;
  margin-top: -15px;
  font-size: 15px;
}.contact-form h2{
  color: white;
  font-family: Poppins;
  font-size: 18px;
}

    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

<div class="contact-section">

  <h1>Silahkan Ajukan tentang Keluhan mu</h1>
  <div class="border">
   <a href="beranda.php">Beranda</a>
 </div>
  <form class="contact-form" action="" method="post">
    <h2 >ID User :</h2>
    <input type="text" class="contact-form-text" name="id_user" readonly  value="<?php echo $_SESSION['id_user'] ?>">
    <textarea class="contact-form-text" name="laporan" placeholder="Pesan kamu.."></textarea>
    <input type="submit" class="contact-form-btn" name="submit" value="Kirim">
  </form>
</div>
<footer>
  <div id="instagram">
    <img src="images/instagram.png" width="25" height="25">
    <h3>@kedaibujang</h3>
  </div>

<div id="twitter">
  <img src="images/twitter.png" width="25" height="25">
  <h3>@kedaibujang_</h3>
</div>

<div id="facebook">
  <img src="images/facebook.png" width="25" height="25">
  <h3>Kedai Bujang</h3>
</div>
</footer>
<?php
 if (isset($_POST['submit'])) {
    $id_user= $_POST['id_user'];
    $laporan= $_POST['laporan'];

    $sql = "INSERT INTO laporan(id_user, laporan) VALUES ('$id_user', '$laporan')";
    $result = $mysqli->query($sql);

    if ($result) {
      $pesan ="Berhasil mendaftar, Terimakasih";
    }else{
      $pesan = 'Maaf, Anda telah Mengirim laporan sebelumnya';
      $redirect ="";
    }
  echo ("<script language='JavaScript'>
      window.alert('$pesan'); window.location.href='$redirect';
    </script>");

  }

?>


  </body>
</html>
