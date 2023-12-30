<?php
require('koneksi.php');

$sql = "SELECT v.vendor_name vendor_name, 
        total_pembelian AS total
        FROM vendor v, fact_pembelian fp 
        WHERE v.vendor_id = fp.vendor_id 
        GROUP BY v.vendor_name";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "name" => $row['vendor_name'],
        "total" => $row['total']
    ));
}

$data3 = json_encode($hasil);
