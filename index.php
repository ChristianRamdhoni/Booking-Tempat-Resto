 <?php include "koneksi.php";

           $sql = mysqli_query($mysqli, "select max(id_user) as maxID from pengguna");
           $data = mysqli_fetch_array($sql);

           $kode = $data['maxID'];

           $kode++;
           $ket = date("Ymd");
           $kodeauto = $kode;
           ?>



<!DOCTYPE html>
<html>
<head>
  <style >
        #main-button2 {
  display:inline-block;
  padding: 5px 30px;
  border:none;
  border-radius:40px;
  background : -webkit-linear-gradient(left, #b224ef, #7579ff);
  color:#FFF;
  font-weight: 700;
  -webkit-transition:0.2s opacity;
  transition:0.2s opacity;
  font-family: Poppins, monospace;
  text-shadow: 1.5px 1px rgba(0, 0, 0, 0.42);
  margin-left: 200px;
  margin-top: 30px;
  width: 250px;
  height: 37px;
  text-align: center;
}
#main-button2:hover {
  color:#FFF;
  opacity:0.8;
  background: -webkit-linear-gradient(left, #7579ff, #b224ef);

 }#main-button1 {
  display:inline-block;
  padding: 5px 30px;
  border:none;
  border-radius:40px;
  background : -webkit-linear-gradient(left, #b224ef, #7579ff);
  color:#FFF;
  font-weight: 700;
  -webkit-transition:0.2s opacity;
  transition:0.2s opacity;
  font-family: Poppins, monospace;
  text-shadow: 1.5px 1px rgba(0, 0, 0, 0.42);
  margin-left: 220px;
  margin-top: 40px;
  width: 130px;
  height: 37px;
  text-align: center;
}
#main-button1:hover {
  color:#FFF;
  opacity:0.8;
  background: -webkit-linear-gradient(left, #7579ff, #b224ef);

 }#form_daftar{
  font-family: Poppins, monospace;
 }#form_daftar span{
  font-family: Poppins;
  height: 10px;
  text-transform: capitalize;
 }#form_daftar input{
margin-bottom: -10px;
 }

  </style>
	<title>Login/Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <form method="post" action="cek_login.php">
          <div class="form sign-in" >
      <img src="images/logo2.png" width="40px" height="50px">
      <h2>Masuk</h2>
      <label>
        <span>Username</span>
        <td><input type="text" name="username"></td>
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password" required="">
      </label>
      <button id="main-button1" name="submit" value="Login">Masuk</button>

      
      <br>
      <div id="p">
        <br>
      <p>silahkan hubungi akun media sosial kami </p>
</div>
      <div class="social-media">
        <ul>
          <li><a href="https://m.facebook.com"><img src="images/facebook.png"></a></li>
          <li><a href=""><img src="images/twitter.png"></a></li>
          <li><a href=""><img src="images/linkedin.png"></a></li>
          <li><a href="cek_password.php"><img src="images/instagram.png"></a></li>
        </ul>
      </div>
    </div>
</form>
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <br><br><br>
          <h2>Belum Punya Akun?</h2>
          <p>Silahkan Daftar untuk mempermudah dalam mengakses website!</p>
        </div>
        <div class="img-text m-in">
          <h2>Sudah Daftar?</h2>
          <h4>Ayo cepat Login kalau kamu sudah punya akun!, Banyak penawaran menarik loh!</h4>
        </div>
        <div class="img-btn">
          <span class="m-up">Daftar</span>
          <span class="m-in">Masuk</span>
        </div>
      </div>
      <form action="#" method="post">
      <div id="form_daftar">
        <br><br>
        <h2>Daftar Akun</h2>
<div class="span_font">
        <label>
          <span>ID User</span>
          <input type="number" name="id_user" readonly value="<?php echo $kodeauto; ?>" required="Tolong isi kolom ini!">
        </label>
        <label>
          <span>Siapa Nama Lengkap'mu?</span>
          <input type="text" name="nama_lengkap" required="Tolong isi kolom ini!">
        </label>
        <label>
          <span>Nama Panggilan'mu?</span>
          <input type="text" name="nama_panggilan" required="Tolong isi kolom ini!">
        </label>
        <label>
          <span>Username </span>
          <input type="text" name="username" required="Tolong isi kolom ini!">
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password" required="Tolong isi kolom ini!">
        </label>
        </div>
       
        
<button id="main-button2" name="submit">Daftar Sekarang!</button>

      </form>
      <?php
  if (isset($_POST['submit'])) {
    $id_user= $_POST['id_user'];
    $nama_lengkap=$_POST['nama_lengkap'];
    $nama_panggilan=$_POST['nama_panggilan'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $foto= "images/Avatar-icon.jpg";
    $sql  = "INSERT INTO pengguna(id_user, nama, nama_panggilan, email, username, password, foto) VALUES('$id_user', '$nama_lengkap','$nama_panggilan','$email', '$username','$password','$foto')";
    
     $result  = $mysqli->query($sql);
    if ($result) {
      $pesan ="Berhasil mendaftar, Terimakasih";
    }else{
      $pesan = 'Maaf, Pendaftaran gagal';
      $redirect ="";
    }
  echo ("<script language='JavaScript'>
      window.alert('$pesan'); window.location.href='$redirect';
    </script>");
  }
?>
      </div>
    </div>
  </div>
<script type="text/javascript" src="script.js"></script>


</body>
</html>