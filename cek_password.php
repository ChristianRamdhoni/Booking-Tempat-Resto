<?php
include_once("login.php");
 $id_user = $_POST['IDUSER'];
    $nama = $_POST['NAMA'];
    $username = $_POST['USERNAME'];
    $password = $_POST['PASSWORD'];
    $repassword = $_POST['REPASSWORD'];
if($password != $repassword)
{
print "<script>alert('Konfirmasi password harus sama dengan password !');
javascript:history.go(-1);</script>";
exit;
}
if((!empty($id_user)) && (!empty($nama)) && (!empty($username)) && (!empty($password)))
{
$query = mysql_query("INSERT INTO pengguna(id_user,nama,username,password)
values ('$id_user','$nama','$username','$password');");
print "Registrasi success";
}
else
{
print "<script>alert('Maaf, tidak boleh ada field yang kosong !');
javascript:history.go(-1);</script>";
}
?>
<?php mysql_close($connect); ?>