<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kamar Kos</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h2>Data Kamar Kos</h2>
<a href="../index.php">Kembali ke Home</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nomor Kamar</th>
        <th>Fasilitas</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    <?php
    // Kita panggil controller untuk ambil data
    require_once '../controllers/KamarController.php';
    require_once '../config.php';

    $controller = new KamarController($conn);
    $data = $controller->index();

    while($row = mysqli_fetch_assoc($data)) {
        echo "<tr>
                <td>{$row['id_kamar']}</td>
                <td>{$row['nomor_kamar']}</td>
                <td>{$row['fasilitas']}</td>
                <td>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>
                <td>Edit | Hapus</td>
              </tr>";
    }
    ?>
</table>

</body>
</html>
