<?php
class Penghuni {
    private $conn;
    private $table = "penghuni";

    // Constructor untuk koneksi database
    public function __construct($db) {
        $this->conn = $db;
    }

    // Mengambil semua data penghuni
    public function readAll() {
        $query = "SELECT * FROM " . $this->table;
        return mysqli_query($this->conn, $query);
    }

    // Tambah penghuni baru
    public function create($nama, $no_hp) {
        $query = "INSERT INTO " . $this->table . " (nama, no_hp) VALUES ('$nama', '$no_hp')";
        return mysqli_query($this->conn, $query);
    }

    // Update data penghuni
    public function update($id, $nama, $no_hp) {
        $query = "UPDATE " . $this->table . " SET nama='$nama', no_hp='$no_hp' WHERE id_penghuni=$id";
        return mysqli_query($this->conn, $query);
    }

    // Hapus penghuni
    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id_penghuni=$id";
        return mysqli_query($this->conn, $query);
    }
}
?>
