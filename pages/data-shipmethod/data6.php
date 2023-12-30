<?php
require('koneksi.php');

$sql = "SELECT s.shipmethod_id , s.shipmethod_name shipmethod_name, count(s.shipmethod_id) as frekuensi
        FROM ship_method s, fact_pembelian fp
        WHERE s.shipmethod_id = fp.shipmethod_id 
        GROUP BY s.shipmethod_id";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "name" => $row['shipmethod_name'],
        "total" => $row['frekuensi']
        
    ));
}

$data6 = json_encode($hasil);