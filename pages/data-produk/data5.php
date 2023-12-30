<?php
require('koneksi.php');

$sql = " SELECT p.product_category product_category, 
        p.product_name product_name,
        total_penjualan AS total
        FROM product p, fact_penjualan f
        WHERE p.product_id = f.product_id 
        GROUP BY product_category";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "name" => $row['product_category'],
        "kategori" => $row['product_name'],
        "total" => $row['total']
    ));
}

$data5 = json_encode($hasil);