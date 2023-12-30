<?php
require('koneksi.php');

$sql = "SELECT p.product_name product,
        s.shipmethod_name shipmethod_name,
        total_pembelian as frekuensi, 
        from fact_pembelian fp, ship_method s, product p
        where s.shipmethod_id=fp.shipmethod_id=p.product_id";

$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "name" => $row['product'],
        "total" => $row['frekuensi']
    ));
}

$data = json_encode($hasil);
?>