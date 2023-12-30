<?php
require('koneksi.php');

$sql1 = "SELECT s.shipmethod_name shipmethod_name, 
        s.territory_name territory_name,
        t.bulan as bulan, 
        total_pembelian as pembelian 
        FROM ship_method s, fact_pembelian fp, time t 
        WHERE s.territory_name = territory_name AND  s.shipmethod_id = fp.shipmethod_id AND t.time_id = fp.time_id 
        GROUP BY shipmethod_name, bulan";

$result1 = mysqli_query($conn, $sql1);

$pembelian = array();

while ($row = mysqli_fetch_array($result1)) {
    array_push($pembelian, array(
        "pembelian" => $row['pembelian'],
        "bulan" => $row['bulan'],
        "kategori" => $row['shipmethod_name'],
        "name" => $row['territory_name']
    ));
}

$data2 = json_encode($pembelian);