<?php

include 'conn.php';

$id=$connect->real_escape_string(@$_POST['id']);
$dari=$connect->real_escape_string(@$_POST['dari']);
$sampai=$connect->real_escape_string(@$_POST['sampai']);


$result = array();

if(empty($id))
{
  $id = $connect->real_escape_string($_GET['id']);
}

if(empty($dari))
{
  $dari = $connect->real_escape_string(@$_GET['dari']);
}

if(empty($sampai))
{
  $sampai = $connect->real_escape_string(@$_GET['sampai']);
}



if(!empty($dari) && !empty($sampai) && !empty($id))
{
	//echo "masuk"
	$hasil = $connect->query("SELECT * FROM agenda a LEFT JOIN pegawai b ON(a.id_pegawai=b.id_pegawai) LEFT JOIN deputi c ON(b.id_deputi=c.id_deputi) LEFT JOIN unitkerja d ON(b.id_unitkerja=d.id_unitkerja) WHERE a.id_pegawai='$id' AND a.tanggal between '$dari' AND '$sampai' order by tanggal desc");

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
	
	$hasil3 = $connect->query("SELECT * FROM agendapegawai e INNER JOIN agenda a ON(a.id_agenda=e.id_agenda) LEFT JOIN pegawai b ON(e.id_pegawai=b.id_pegawai) LEFT JOIN deputi c ON(b.id_deputi=c.id_deputi) LEFT JOIN unitkerja d ON(b.id_unitkerja=d.id_unitkerja) WHERE e.id_pegawai='$id' AND a.tanggal between '$dari' AND '$sampai' order by tanggal desc");
	
	while($dapatData = $hasil3->fetch_assoc()) 
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