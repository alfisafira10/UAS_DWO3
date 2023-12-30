<?php
require('koneksi.php');

$sql1 = "SELECT s.territory_name territory_name,
        s.country_region_code country_region_code,
        t.bulan as bulan, 
        total_penjualan as penjualan 
        FROM sales_territory s, fact_penjualan fp, time t 
        WHERE s.country_region_code = country_region_code AND s.territory_id = fp.territory_id AND t.time_id = fp.time_id 
        GROUP BY territory_name, bulan";

$result1 = mysqli_query($conn, $sql1);

$penjualan = array();

while ($row = mysqli_fetch_array($result1)) {
    array_push($penjualan, array(
        "penjualan" => $row['penjualan'],
        "bulan" => $row['bulan'],
        "kategori" => $row['territory_name'],
        "name" => $row['country_region_code']
    ));
}

$data2 = json_encode($penjualan);
