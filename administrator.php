<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// File data barang
$file = 'barang.json';

// Membaca data barang dari file JSON
$barang = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

// Menyimpan data barang
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $foto = $_POST['foto'];
    $link = $_POST['link'];

    if (!empty($nama) && !empty($foto) && !empty($link)) {
        $barang[] = [
            "nama" => $nama,
            "foto" => $foto,
            "link" => $link
        ];
        file_put_contents($file, json_encode($barang, JSON_PRETTY_PRINT));
        echo "<script>alert('Data barang berhasil ditambahkan!');</script>";
        header("Refresh:0");
    } else {
        echo "<script>alert('Semua kolom harus diisi!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Kelola Barang</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
        .header { background: #007BFF; padding: 10px; text-align: right; }
        .header a { color: white; text-decoration: none; font-size: 16px; margin-right: 15px; }
        .container { width: 90%; margin: auto; padding: 20px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; }
        .item { background: white; padding: 15px; text-align: center; border: 1px solid #ddd; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); }
        .item img { max-width: 100%; border-radius: 5px; }
        .form-admin { padding: 15px; background: white; border: 1px solid #ddd; border-radius: 5px; }
        input, button { padding: 10px; margin: 5px; width: 100%; border-radius: 5px; }
        button { background-color: #007BFF; color: white; cursor: pointer; }
    </style>
</head>
<body>

<div class="header">
    <a href="logout.php">Logout ❌</a>
</div>

<div class="container">
    <h1>Admin - Tambah Barang</h1>
    <div class="form-admin">
        <form method="POST">
            <input type="text" name="nama" placeholder="Nama Barang" required>
            <input type="text" name="foto" placeholder="URL Gambar" required>
            <input type="text" name="link" placeholder="Link Shopee" required>
            <button type="submit">Tambah Barang</button>
        </form>
    </div>

    <h1>Produk Rekomendasi</h1>
    <div class="grid">
        <?php
        if (!empty($barang)) {
            foreach ($barang as $b) {
                echo "
                <div class='item'>
                    <img src='{$b['foto']}' alt='{$b['nama']}'>
                    <h3>{$b['nama']}</h3>
                    <a href='{$b['link']}' target='_blank'>Lihat Detail</a>
                </div>
                ";
            }
        } else {
            echo "<p>Belum ada barang yang ditambahkan.</p>";
        }
        ?>
    </div>
</div>

</body>
</html>
