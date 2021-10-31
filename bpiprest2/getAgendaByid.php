<?php

include 'conn.php';
$id =  $connect->real_escape_string(@$_POST['id']);
$result = array();

if(empty($id))
{
  $id = $connect->real_escape_string($_GET['id']);
}

if(!empty($id))
{
	
	$hasil = $connect->query("SELECT * FROM agenda a LEFT JOIN pegawai b ON(a.id_pegawai=b.id_pegawai) LEFT JOIN deputi c ON(b.id_deputi=c.id_deputi) LEFT JOIN unitkerja d ON(b.id_unitkerja=d.id_unitkerja) WHERE a.id_agenda='$id'");

	$result = array();

	while($dapatData = $hasil->fetch_assoc()) 
	{
		$idagenda=$dapatData['id_agenda'];
		$hasil2 = $connect->query("SELECT * FROM agendapegawai a LEFT JOIN pegawai b ON(a.id_pegawai=b.id_pegawai) WHERE id_agenda='$idagenda'");
		
		while($dapatData2 = $hasil2->fetch_assoc()) 
		{
			$dapatData['anggota'][]=$dapatData2;
		}
		
		$result[] = $dapatData;
	}

	
}

	header('Content-Type: application/json');
	echo json_encode($result);

?>