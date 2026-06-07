<?php
require_once 'config.php';
require_once 'controllers/KamarController.php';

$controller = new KamarController($conn);

// Jika ada request untuk menambah data
if (isset($_POST['tambah'])) {
    $nomor = $_POST['nomor_kamar'];
    $fasilitas = $_POST['fasilitas'];
    $harga = $_POST['harga'];
    
    $controller->tambah($nomor, $fasilitas, $harga);
}
?>
