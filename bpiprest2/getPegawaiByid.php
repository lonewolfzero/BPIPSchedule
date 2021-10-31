<?php

include 'conn.php';
$id = $connect->real_escape_string(@$_POST['id']);
$result = array();

if(empty($id))
{
  $id = $connect->real_escape_string($_GET['id']);
}

if(!empty($id))
{
	$hasil = $connect->query("select * from pegawai a LEFT JOIN deputi b ON(a.id_deputi=b.id_deputi) LEFT JOIN unitkerja c ON(a.id_unitkerja=c.id_unitkerja) WHERE id_pegawai='$id'");

	while ($dapatData = $hasil->fetch_assoc()) 
	{
		$result[] = $dapatData;
	}
}

	header('Content-Type: application/json');
	echo json_encode($result);

?>