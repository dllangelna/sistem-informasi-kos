<?php
require_once '../models/Kamar.php';
require_once '../config.php';

class KamarController {
    private $model;

    public function __construct($db) {
        $this->model = new Kamar($db);
    }

    // Fungsi untuk menampilkan daftar kamar
    public function index() {
        $data = $this->model->read();
        return $data;
    }

    // Fungsi untuk menambah data kamar
    public function tambah($nomor, $harga) {
        if ($this->model->create($nomor, $harga)) {
            header("Location: ../index.php?status=sukses");
        } else {
            echo "Gagal menambah data.";
        }
    }
}
?>
