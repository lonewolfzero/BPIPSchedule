<?php

include 'conn.php';

$hasil = $connect->query("select * from pegawai a LEFT JOIN deputi b ON(a.id_deputi=b.id_deputi) LEFT JOIN unitkerja c ON(a.id_unitkerja=c.id_unitkerja)");

$result = array();

while ($dapatData = $hasil->fetch_assoc()) {

	$result[] = $dapatData;
}

header('Content-Type: application/json');
echo json_encode($result);

?>