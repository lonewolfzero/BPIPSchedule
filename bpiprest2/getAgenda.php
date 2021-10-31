<?php

include 'conn.php';

$hasil = $connect->query("SELECT * FROM agenda a LEFT JOIN pegawai b ON(a.id_pegawai=b.id_pegawai) LEFT JOIN deputi c ON(b.id_deputi=c.id_deputi) LEFT JOIN unitkerja d ON(b.id_unitkerja=d.id_unitkerja) order by a.tanggal desc");

$result = array();

while($dapatData = $hasil->fetch_assoc()) 
{
	$idagenda=$dapatData['id_agenda'];
    $hasil2 = $connect->query("SELECT * FROM agendapegawai a LEFT JOIN pegawai b ON(a.id_pegawai=b.id_pegawai) WHERE id_agenda='$idagenda'");
	
	$dapatData['jam_mulai']=substr($dapatData['jam_mulai'],0,5);
    $dapatData['jam_selesai']=substr($dapatData['jam_selesai'],0,5);
	
	while($dapatData2 = $hasil2->fetch_assoc()) 
    {
		$dapatData['anggota'][]=$dapatData2;
	}
	
	$result[] = $dapatData;
}

//$result['status'] = "ok";
//$result['message'] = "Event Is Found";

header('Content-Type: application/json');
echo json_encode($result);

?>