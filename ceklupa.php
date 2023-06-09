<?php
include "koneksi.php";

function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
  $forgetCetak="";
  $email="";
      if($_SERVER['REQUEST_METHOD'] == "POST") {

        if($_POST["email"]) 
        {
                   $email=test_input($_POST["email"]);
		    }

if(isset($_POST) & !empty($_POST['email'])){

	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$sql = "SELECT * FROM pengguna WHERE email = '$email'";
	$res = mysqli_query($mysqli, $sql);
	$count = mysqli_num_rows($res) or die (mysqli_error($mysqli));
  
	if($count == 1){
	    
	}else{
	     echo "<script> alert('Email anda belum terdaftar'); </script>";
	     
	}
}
$r = mysqli_fetch_array($res);
$password = $r['password'];
$to = $r['email'];
$subject = "Your Recovered Password";
 
$message = "Please use this password to login : " . $password;
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: www.adinyahya.com'. "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$our_server='www.adinyahya.com';
ini_set('SMTP',$our_server);

if(mail($to, $subject, $message, $headers)){
echo "<script> alert('Silahkan cek email untuk mengetahui password'); </script>";
}else{
echo "<script> alert('Gagal mengirim ke email'); </script>";
}
      }
?>