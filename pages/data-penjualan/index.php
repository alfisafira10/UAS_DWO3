<?php
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT count(product_id) as jumlah FROM product");
$r  = mysqli_fetch_array($query);
echo $r['jumlah']; ?>

<br>
<?php
$query = mysqli_query($conn, "SELECT count(territory_id) as jumlah FROM sales_territory");
$r  = mysqli_fetch_array($query);
echo $r['jumlah'];
?>

<br>
<?php
$query = mysqli_query($conn, "SELECT count(vendor_id) as jumlah FROM vendor");
$r  = mysqli_fetch_array($query);
echo $r['jumlah'];
?>

<br>
<?php
$query = mysqli_query($conn, "SELECT count(shipmethod_id) as jumlah FROM ship_method");
$r  = mysqli_fetch_array($query);
echo $r['jumlah'];
?>

<br>
<?php
$query = mysqli_query($conn, "SELECT count(vendor_id) as jumlah FROM vendor");
$r  = mysqli_fetch_array($query);
echo $r['jumlah'];
?>

<br>
<?php
$query = mysqli_query($conn, "SELECT total_penjualan as total FROM fact_penjualan");
$r  = mysqli_fetch_array($query);
echo $r['total'];
?>

<br>
<?php
$query = mysqli_query($conn, "SELECT total_pembelian as total FROM fact_pembelian");
$r  = mysqli_fetch_array($query);
echo $r['total'];
?>