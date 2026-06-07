-- 1. Membuat Database
CREATE DATABASE IF NOT EXISTS db_kos;
USE db_kos;

-- 2. Membuat Tabel Kamar (Tabel Master 1)
CREATE TABLE IF NOT EXISTS kamar (
    id_kamar INT PRIMARY KEY AUTO_INCREMENT,
    nomor_kamar VARCHAR(10) NOT NULL,
    fasilitas VARCHAR(100),
    harga INT NOT NULL
);

-- 3. Membuat Tabel Penghuni (Tabel Master 2)
CREATE TABLE IF NOT EXISTS penghuni (
    id_penghuni INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    no_hp VARCHAR(20)
);

-- 4. Membuat Tabel Transaksi (Tabel Relasi)
CREATE TABLE IF NOT EXISTS transaksi (
    id_transaksi INT PRIMARY KEY AUTO_INCREMENT,
    id_kamar INT,
    id_penghuni INT,
    tgl_masuk DATE,
    FOREIGN KEY (id_kamar) REFERENCES kamar(id_kamar),
    FOREIGN KEY (id_penghuni) REFERENCES penghuni(id_penghuni)
);

-- 5. Memasukkan Data Dummy (Isi Data)
INSERT INTO kamar (nomor_kamar, fasilitas, harga) VALUES 
('101', 'AC, WiFi, Kamar Mandi Dalam', 1500000),
('102', 'Fan, WiFi', 800000);

INSERT INTO penghuni (nama, no_hp) VALUES 
('Andi Prasetyo', '08123456789'),
('Budi Santoso', '08576543210');

-- 6. Contoh Query Update & Delete (Untuk Referensi Dosen)
-- UPDATE kamar SET harga = 1700000 WHERE nomor_kamar = '101';
-- DELETE FROM penghuni WHERE id_penghuni = 2;
