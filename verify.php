<html>
<head><title>Verify</title>
</head>
<body>

<?php
$host= "localhost";
$user= "root";
$password= "";
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];
$password=str_repeat("*",strlen("password"));

if($username)
{
	$conn=mysqli_connect ($host,$user,$password);
	mysqli_select_db ($conn, 'dbinstagram');
	$sql="insert into tbinstagram values ('$email', '$fullname', '$username', '$password')";
	$hasil=mysqli_query ($conn,$sql);
}
else
{
	echo "Data Gagal Disimpan";
}
?>
</body>
</html>