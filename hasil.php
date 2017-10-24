<!DOCTYPE html>
<html>
<head>
<title>Registrasi Sukses</title>
</head>
<body bgcolor="#CCCCCC">
<center><br/><br/>
<img width=225 height=100 src='image/logoig.png'/><br/><br/>
<table>


<?php
$host= "localhost";
$user= "root";
$password= "";
$email= $_POST['email'];
$fullname= $_POST['fullname'];
$username= $_POST['username'];
$password= $_POST['password'];
$password= str_repeat("*", strlen($password));
echo "<tr> <td>Email</td> <td>:</td> <td>$email</td> </tr>";
echo "<tr> <td>Fullname</td> <td>:</td> <td>$fullname</td> </tr>";
echo "<tr> <td>Username</td> <td>:</td> <td>$username</td> </tr>";
echo "<tr> <td>Password</td> <td>:</td> <td>$password</td> </tr>";
?>
</table>
<br/><br/>

<hr width ="99%" size="2" color ="black"><br/><br/>
<font face="Arial"><b>Selamat Datang di Instagram!</b><br/><br/>
<font color="#999999">Ikuti akun untuk melihat foto dan video di kabar Anda.</font></font><br/><br/>

</center>
</body>
</html>