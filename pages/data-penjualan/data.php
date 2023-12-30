<?php
require('koneksi.php');

$sql = "SELECT s.territory_name territory_name, 
        total_penjualan AS total
        FROM sales_territory s, fact_penjualan p 
        WHERE s.territory_id = p.territory_id 
        GROUP BY s.territory_name";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "name" => $row['territory_name'],
        "total" => $row['total']
    ));
}

$data = json_encode($hasil);
