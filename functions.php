
<?php

session_start();

require 'koneksi.php';


function query($query){

    global $conn;

    $rows = [];


    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;    
}

function checkoutProduct($data){
    global $conn;

    foreach($_SESSION['cart'] as $product_id => $result) : ?>
        <?php $barang = query("SELECT * FROM produk WHERE id_produk = '$product_id'")[0];

        $totalHarga =  $result * $barang["harga_produk"];
        ?>
    <?php endforeach;



$name = $_SESSION['name'];
$alamat = $data['alamat'];
$no_telp = $data['no_hp'];
$nama_produk = $barang['nama_produk']; 
$harga = $barang['harga_produk'];
$price = $totalHarga;

$foto = $barang['foto_produk'];
$id = $barang['id_produk'];

$stok = $barang['stok_produk'];
$sisa = $stok - $result;

$st = 'proses';



?>