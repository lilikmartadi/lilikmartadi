<?php
$file = 'barang.json';
$barang = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penawaran Barang</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; background-color: #f4f4f4; }
        .container { width: 90%; margin: auto; padding: 20px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; }
        .item { background: white; padding: 15px; text-align: center; border: 1px solid #ddd; border-radius: 5px; }
        .item img { max-width: 100%; border-radius: 5px; }
    </style>
</head>
<body>

<div class="container">
    <h1>Produk Rekomendasi</h1>
    <a href="login.php">🔑 Login Admin</a>
    <div class="grid">
        <?php foreach ($barang as $b) echo "<div class='item'><img src='{$b['foto']}' alt='{$b['nama']}'><h3>{$b['nama']}</h3><a href='{$b['link']}'>Lihat Detail</a></div>"; ?>
    </div>
</div>

</body>
</html>
