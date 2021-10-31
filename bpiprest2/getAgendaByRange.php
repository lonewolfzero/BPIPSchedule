<?php

include 'conn.php';

$dari=$connect->real_escape_string(@$_POST['dari']);
$sampai=$connect->real_escape_string(@$_POST['sampai']);


$result = array();

if(empty($dari))
{
  $dari = $connect->real_escape_string(@$_GET['dari']);
}

if(empty($sampai))
{
  $sampai = $connect->real_escape_string(@$_GET['sampai']);
}


if(!empty($dari) && !empty($sampai))
{
	//echo "masuk"
	$hasil = $connect->query("SELECT * FROM agenda a LEFT JOIN pegawai b ON(a.id_pegawai=b.id_pegawai) LEFT JOIN deputi c ON(b.id_deputi=c.id_deputi) LEFT JOIN unitkerja d ON(b.id_unitkerja=d.id_unitkerja) WHERE a.tanggal between '$dari' AND '$sampai' order by tanggal desc");

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