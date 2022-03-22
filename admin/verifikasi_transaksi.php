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
$produk = query("SELECT * FROM transaksi WHERE status = 'proses'");


?>

<?php include '../layout/sidebar.php' ?>

<div class="main">
    <h3>Verifikasi Transaksi</h3>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Nama Produk</th>
            <th>Alamat</th>
            <th>Harga Produk</th>
            <th>Foto Produk</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($produk as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["name"]; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td><?= $data["alamat"]; ?></td>
                <td>Rp <?= $data["harga_produk"]; ?></td>
                <td><img src="../foto/<?= $data["foto_produk"]; ?>" width="80"></td>
                <td>
                    <a href="detail_transaksi.php?id=<?= $data["id_transaksi"]; ?>" class="edit">Detail Transaksi</a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</div>