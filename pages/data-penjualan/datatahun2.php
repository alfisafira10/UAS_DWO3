<?php
require('koneksi.php');

$sql1 = "SELECT t.tahun tahun, t.bulan bulan, total_penjualan AS total
        FROM time t , fact_penjualan f
        WHERE t.time_id = f.time_id 
        GROUP BY bulan";

$result1 = mysqli_query($conn, $sql1);

$penjualan = array();

while ($row = mysqli_fetch_array($result1)) {
    array_push($penjualan, array(
        "penjualan" => $row['total'],
        "kategori" => $row['tahun'],
        "name" => $row['tahun'],
    ));
}

$datatahun2 = json_encode($penjualan);
