<?php 

session_start();



if(!isset($_SESSION["username"])) {
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

require 'functions.php';


if(isset($_POST["submit"])){
    if(tambahProduk($_POST) > 0 ){
        echo "
        <script type='text/javascript'>
            alert('Data produk berhasil ditambahkan!');
            window.location = 'product.php';
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data produk gagal ditambahkan!');
            window.location = 'product.php';
        </script>
        ";
    }
}


?>

<?php include '../layout/sidebar.php' ?>

<div class="main">
    <div class="box">
        <h2>Tambah Produk</h2>
        <form method="POST" enctype="multipart/form-data">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control"><br /><br />

            <label>Harga Produk</label>
            <input type="text" name="harga_produk" class="form-control"><br /><br />

            <label>Foto Produk</label>
            <input type="file" name="foto_produk" class="form-control"><br /> <br />

            <label>Stok Produk</label>
            <input type="text" name="stok_produk" class="form-control"><br /><br />

            <label>Deskripsi Produk</label><br />
            <textarea name="deskripsi_produk" rows="10" class="form-control"></textarea><br /> <br />

            <button type="submit" name="submit">Tambah Produk</button>
        </form>
    </div>
</div>