<?php
require('koneksi.php');

$sql1 =  "SELECT v.vendor_name vendor_name,
         p.product_category product_category,
         t.bulan as bulan,
         total_pembelian as pembelian 
         FROM vendor v, product p, fact_pembelian f, time t 
         WHERE p.product_category = product_category AND p.product_id = f.product_id AND v.vendor_id = f.vendor_id AND t.time_id = f.time_id
         GROUP BY vendor_name, bulan";

$result1 = mysqli_query($conn, $sql1);

$pembelian = array();

while ($row = mysqli_fetch_array($result1)) {
    array_push($pembelian, array(
        "pembelian" => $row['pembelian'],
        "bulan" => $row['bulan'],
        "kategori" => $row['product_category'],
        "name" => $row['vendor_name']
    ));
}

$data4 = json_encode($pembelian);
