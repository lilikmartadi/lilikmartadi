<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penawaran Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .item {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .item img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Produk Rekomendasi Spesial Untuk Anda</h1>
        <div class="grid">
            <?php
            // Daftar barang
            $barang = [
                ["nama" => "Barang 1", "foto" => "img1.jpg", "link" => "https://s.shopee.co.id/1VjULVCE3r"],
                ["nama" => "Barang 2", "foto" => "img2.jpg", "link" => "https://s.shopee.co.id/3LB8X7Bd7y"],
                ["nama" => "Barang 3", "foto" => "img3.jpg", "link" => "https://s.shopee.co.id/40QpKaCrbQ"],
                ["nama" => "Barang 4", "foto" => "img4.jpg", "link" => "https://s.shopee.co.id/VqxAOfqti"],
                ["nama" => "Barang 5", "foto" => "img5.jpg", "link" => "https://s.shopee.co.id/704QuRWUMD"],
                ["nama" => "Barang 6", "foto" => "img6.jpg", "link" => "https://s.shopee.co.id/AUeJ5MFujr"],
                ["nama" => "Barang 7", "foto" => "img7.jpg", "link" => "https://s.shopee.co.id/2fvRlq0yA5"],
                ["nama" => "Barang 8", "foto" => "img8.jpg", "link" => "https://s.shopee.co.id/4VN5y3D8Fv"],
                ["nama" => "Barang 9", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 10", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 11", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 12", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 9",  "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 10", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 11", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 12", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 9", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 10", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 11", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 12", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 9", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 10", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 11", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 12", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 9", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 10", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 11", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 12", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 9", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 10", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 11", "foto" => "https://via.placeholder.com/150", "link" => "#"],
                ["nama" => "Barang 12", "foto" => "https://via.placeholder.com/150", "link" => "#"],
            ];

            // Menampilkan barang
            foreach ($barang as $b) {
                echo "
                <div class='item'>
                    <img src='{$b['foto']}' alt='{$b['nama']}'>
                    <h3>{$b['nama']}</h3>
                    <a href='{$b['link']}'>Lihat Detail</a>
                </div>
                ";
            }
            ?>
        </div>
    </div>
</body>
</html>