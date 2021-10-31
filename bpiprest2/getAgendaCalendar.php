<?php

include 'conn.php';

$hasil = $connect->query("SELECT * FROM agenda a LEFT JOIN pegawai b ON(a.id_pegawai=b.id_pegawai) LEFT JOIN deputi c ON(b.id_deputi=c.id_deputi) LEFT JOIN unitkerja d ON(b.id_unitkerja=d.id_unitkerja) order by a.tanggal desc");

$result = array();
$result2 = array();
$result3 = array();
$result4 = array();

while($dapatData = $hasil->fetch_assoc()) 
{
	$idagenda=$dapatData['id_agenda'];
    $hasil2 = $connect->query("SELECT * FROM agendapegawai a LEFT JOIN pegawai b ON(a.id_pegawai=b.id_pegawai) WHERE id_agenda='$idagenda'");
	
	while($dapatData2 = $hasil2->fetch_assoc()) 
    {
		$dapatData['anggota'][]=$dapatData2;
	}
	
	$result3['kodeEvent']= $dapatData['id_agenda'];
	$result3['tanggalEvent']= $dapatData['tanggal'];
	$result3['judulEvent']= $dapatData['nama_agenda'];
	$result3['lokasiEvent']= $dapatData['lokasi_agenda'];
	$result3['isiEvent']= $dapatData['informasi'];
	$result3['waktuEvent']= substr($dapatData['jam_mulai'],0,5)." Sd ".substr($dapatData['jam_selesai'],0,5);
	$result4[]=$result3;
	
	$result[] = $dapatData;
}

$result2['status'] = "ok";
$result2['message'] = "Event Is Found";
$result2['data']=$result4;

header('Content-Type: application/json');
echo json_encode($result2);

?>