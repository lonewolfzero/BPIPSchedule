<?php

include 'conn.php';
$username= $connect->real_escape_string(@$_POST['username']);
$password = $connect->real_escape_string(@$_POST['password']);
$result = array();

if(empty($username))
{
  $username = $connect->real_escape_string($_GET['username']);
}

if(empty($password))
{
  $password=$connect->real_escape_string($_GET['password']);
  $password=md5($password);
}
else
{
	$password=md5($password);
}

if(!empty($username) && !empty($password))
{
	$hasil = $connect->query("select * from admin d LEFT JOIN pegawai a ON(d.id_pegawai=a.id_pegawai) LEFT JOIN deputi b ON(a.id_deputi=b.id_deputi) LEFT JOIN unitkerja c ON(a.id_unitkerja=c.id_unitkerja) WHERE username='$username' AND password='$password'");

	while($dapatData = $hasil->fetch_assoc()) 
	{
		$result[] = $dapatData;
	}
}


if(empty($result))
{
	$result['value'] = 0;
    $result['message'] = "login gagal";
}
else
{
	$result['value'] = 1;
    $result['message'] = "Login Berhasil";
}


	header('Content-Type: application/json');
	echo json_encode($result);

?>