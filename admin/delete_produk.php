<?php

require 'functions.php';

$id = $_GET['id'];

if(hapusProduk($id) > 0 ){
    echo"
    <script type='text/javascript'>
        alert('Data produk berhasil dihapus');
        window.location = 'product.php';
    </script>
    ";
}else{
    echo"
    <script type='text/javascript'>
        alert('Data produk gagal dihapus');
        window.location = 'product.php';
    </script>
    ";
}




?>

