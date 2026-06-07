<?php
class Kamar {
    private $conn;
    private $table = "kamar";

    // Constructor untuk koneksi database
    public function __construct($db) {
        $this->conn = $db;
    }

    // Mengambil semua data kamar
    public function readAll() {
        $query = "SELECT * FROM " . $this->table;
        return mysqli_query($this->conn, $query);
    }

    // Tambah kamar baru
    public function create($nomor, $fasilitas, $harga) {
        $query = "INSERT INTO " . $this->table . " (nomor_kamar, fasilitas, harga) VALUES ('$nomor', '$fasilitas', '$harga')";
        return mysqli_query($this->conn, $query);
    }

    // Update data kamar
    public function update($id, $nomor, $fasilitas, $harga) {
        $query = "UPDATE " . $this->table . " SET nomor_kamar='$nomor', fasilitas='$fasilitas', harga='$harga' WHERE id_kamar=$id";
        return mysqli_query($this->conn, $query);
    }

    // Hapus kamar
    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id_kamar=$id";
        return mysqli_query($this->conn, $query);
    }
}
?>
