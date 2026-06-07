# Sistem Informasi Pengelolaan Kos

Repository ini berisi laporan jawaban UAS Basis Data mengenai rancangan database, dokumentasi ERD, normalisasi, script SQL DDL & DML, serta aplikasi CRUD berbasis Python dan PHP.

## 1. Topik yang Dipilih
**Topik:** Sistem Informasi Pengelolaan Kos.

## 2. Proses Bisnis dan Modul
* **Modul Penghuni:** Mengelola data diri penyewa.
* **Modul Kamar:** Mengelola data kamar dan status ketersediaan.
* **Modul Transaksi:** Mencatat periode sewa dan pembayaran.

## 3. Pihak yang Terlibat
* **Penghuni:** Melakukan pendaftaran dan pembayaran.
* **Admin/Pemilik:** Mengelola data master dan transaksi.

## 4. Entity Relationship Diagram (ERD)

```mermaid
erDiagram
    KAMAR ||--o{ TRANSAKSI : disewa
    PENGHUNI ||--o{ TRANSAKSI : melakukan
    
    KAMAR {
        int id_kamar PK
        string nomor_kamar
        string fasilitas
        int harga
    }
    
    PENGHUNI {
        int id_penghuni PK
        string nama
        string no_hp
    }
    
    TRANSAKSI {
        int id_transaksi PK
        int id_kamar FK
        int id_penghuni FK
        date tgl_masuk
    }
