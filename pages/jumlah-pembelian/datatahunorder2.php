<?php
require('koneksi.php');

$sql1 = "SELECT t.tahun tahun, t.bulan bulan, total_pembelian AS total
        FROM time t , fact_pembelian f
        WHERE t.time_id = f.time_id 
        GROUP BY bulan, t.time_id = f.time_id";

$result1 = mysqli_query($conn, $sql1);

$pembelian = array();

while ($row = mysqli_fetch_array($result1)) {
    array_push($pembelian, array(
        "pembelian" => $row['total'],
        "kategori" => $row['tahun'],
        "name" => $row['tahun'],
    ));
}

$datatahunorder2 = json_encode($pembelian);
