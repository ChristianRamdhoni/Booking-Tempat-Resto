<?php
include 'koneksi.php';
session_start();
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
    
    
 <title>Document</title>
<style>

}
body {
    background: #ffffe0;
    color: #374049;

}
#header{
    margin-left: ;
    background-color: white;
    height: 50px;
    -webkit-box-shadow: 0px 3px 10px -3px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 3px 10px -3px rgba(0, 0, 0, 0.1);

}

}#pict{
    text-align: left;
    margin-top: 0px;
    padding-top: 20px;
}#judul1{
  text-shadow: 1.5px 1px rgba(0, 0, 0, 0.42);
   color:#f36700;
    margin-top: -50px;
    font-family:  Cooper Black, Monospace;
    margin-left: 30px;
 margin-left: 600px;
 margin-top: -90px;
 display: inline;
 text-align: right;
 }#judul2{
font-family: MADE Tommy Soft,Monospace;
color: gray;
margin-left: 20px;
}#header.nav-collapse:after{
 visibility:visible;
    opacity:1;
}#pilihcabang{
  text-align-last: left;
  margin-top: -54px;
  margin-left: 19px;
}#box_dramaga{
  border-image: 70px ;
  background-color: #fff;
  border-radius: 30px;
  width: 350px;
  height: 550px;
  box-shadow: 7px 10px 15px gray;
  margin-left: 50px;
  }#text_dramaga{
  text-align: center;
  font-family: MADE Tommy Soft, Monospace;
  margin-top: 30px;
  padding-top: 20px;
}#gambar_dramaga{
  margin-left: 25px;
  border-radius: 20px;
  }#almt_dramaga{
  margin-left: 160px;
  margin-top: -36px;
  }#tlp_dramaga{
    margin-left: 30px;
    marg
  
}#box_cilendek{
  border-image: 70px ;
  background-color: #fff;
  border-radius: 30px;
  width: 350px;
  height: 550px;
  box-shadow: 7px 10px 15px gray;
  margin-left: 490px;
  margin-top: -580px;
}#text_cilendek{
  font-family: MADE Tommy Soft,Monospace;
  margin-top: 30px;
  padding-top: 20px;
  text-align-last: center;
}#gambar_cilendek{
margin-left: 25px;
border-radius: 20px;
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
  margin-right: -250px;
  margin-left: 83px;
}
.main-button:hover {
  color:#FFF;
  opacity:0.8;

 }#box_paledang{
  border-image: 70px ;
  background-color: #fff;
  border-radius: 30px;
  width: 350px;
  height: 550px;
  box-shadow: 7px 10px 15px gray;
  margin-left: 930px;
  margin-top: -580px;
}#text_paledang{
  font-family: MADE Tommy Soft,Monospace;
  margin-top: 30px;
  padding-top: 20px;
  text-align-last: center;
}#gambar_paledang{
margin-left: 25px;
border-radius: 20px;
}.main-button2 {
  display:inline-block;
  padding:10px 30px;
  border:none;
  font-size: 17px;
  border-radius:40px;
background : -webkit-linear-gradient(left, #b224ef, #7579ff);
  color:#FFF;
  font-weight: 700;
  -webkit-transition:0.2s opacity;
  transition:0.2s opacity;
  font-family: Poppins, cursive;
  text-shadow: 1.5px 1px rgba(0, 0, 0, 0.42);
  margin-left: 650px;
  margin-top: -55px;
  margin-left: 1100px;
  position: absolute;
}
.main-button2:hover {
   background: #2980b9;
box-shadow: 0 0 3px 4px #b224ef;
 }
</style>

</head>
<body>
    
<div id="header">   <br>
  <div id="judul1">    <br>
    <h1 id="pilihcabang">Cabang</h1>  
     </div>
      </div>

<h2 id="judul2">Mau di cabang yang mana?</h2>

<a href="beranda.php"><b><button class="main-button2">Gajadi deh</button></b></a>

      <!-- Cabang Kesatu -->
      <div id="box_dramaga">
        <a href=""></a>
        <h2 id="text_dramaga">Dramaga</h2>
        <img src="images/dramaga.jpg" width="300px" height="300px" id="gambar_dramaga">
        <p id="tlp_dramaga"><a href="tel:02518628091"><i class="fa fa-phone"></i> 0251-8628091</a></>
          <p id="almt_dramaga"><i class="fa fa-map-marker"></i> Jl. Margajaya no.5, Dramaga.</a></p>
          <br><br>
          <a href="booking.php"><b><button class="main-button">Booking Disini</button></b></a>
      </div>

<!-- Cabang Kedua -->
      <div id="box_cilendek">
        <a href=""></a>
        <h2 id="text_cilendek">Cilendek</h2>
        <img src="images/cilendek.jpg" width="300px" height="300px" id="gambar_cilendek">
        <p id="tlp_dramaga"><a href="tel:025166212231"><i class="fa fa-phone"></i> 0251-66212231</a></>
          <p id="almt_dramaga"><i class="fa fa-map-marker"></i> Jl. Dr. Semeru no.32, Cilendek.</a></p>
          <br><br>
          <a href="bookingcilendek.php"><b><button class="main-button">Booking Disini</button></b></a>
      </div>

<!-- Cabang Ketiga -->
      <div id="box_paledang">
        <a href=""></a>
        <h2 id="text_paledang">Paledang</h2>
        <img src="images/paledang.jpg" width="300px" height="300px" id="gambar_paledang">
        <p id="tlp_dramaga"><a href="tel:02518712775"><i class="fa fa-phone"></i> 0251-8712775</a></>
          <p id="almt_dramaga"><i class="fa fa-map-marker"></i> Jl. Paledang no.25, Paledang.</a></p>
          <br><br>
          <a href="bookingpaledang.php"><b><button class="main-button">Booking Disini</button></b></a>
      </div>




</body>
</html>