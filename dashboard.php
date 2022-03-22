<?php include 'layout/navbar.php'; ?>
<?php 

$data = query("SELECT * FROM transaksi WHERE name ='{$_SESSION['name']}'");

?>



<div class="container">

    <div class="informasi">
        <h2>Hallo, selamat datang <?= $_SESSION["name"]; ?> ini Dashboard belanja-mu!</h2><br /> <br />

        <p>Status = Proses <br /> Mohon bersabar, produk kamu sedang di proses oleh admin</p>

        <p>Status = Dikirim <br /> Mohon tunggu dirumah, produk kamu sedang dikirim lho!</p>

        <p>Status = Ditolak <br /> Mohon diperiksa kembali data-data kamu dan pastikan mengisi data dengan benar!</p>     
    </div>

    <div class="data-transaksi">
    <table>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Nama Produk</th>
            <th>Alamat</th>
            <th>Harga Produk</th>
            <th>Foto Produk</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($data as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["name"]; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td><?= $data["alamat"]; ?></td>
                <td>Rp <?= $data["harga_produk"]; ?></td>
                <td><img src="foto/<?= $data["foto_produk"]; ?>" width="80"></td>
                <td><?= $data["status"]; ?></td>
                <td>
                    <a href="detail_transaksi.php?id=<?= $data["id_transaksi"]; ?>" class="detail">Detail Transaksi</a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>


</div>