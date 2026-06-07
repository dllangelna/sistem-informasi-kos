# Sistem Informasi Pengelolaan Kos

Repository ini berisi laporan jawaban UAS Basis Data mengenai rancangan database, dokumentasi ERD, normalisasi, script SQL DDL & DML, serta aplikasi CRUD berbasis Python dan PHP.

## 1. Topik yang Dipilih
**Topik:** Sistem Informasi Pengelolaan Kos.
Sistem ini dirancang untuk mengelola proses operasional kos, mulai dari pendaftaran penghuni, pengelolaan ketersediaan kamar, hingga pencatatan transaksi pembayaran sewa.

## 2. Proses Bisnis dan Modul
* **Modul Penghuni:** Mengelola data diri penyewa (nama, nomor HP, KTP).
* **Modul Kamar:** Mengelola data kamar (nomor kamar, fasilitas, harga, status).
* **Modul Transaksi:** Mencatat periode sewa dan pembayaran biaya sewa.

## 3. Pihak yang Terlibat (Aktor)
* **Penghuni:** Melakukan pendaftaran data diri dan melakukan pembayaran sewa.
* **Admin/Pemilik Kos:** Mengelola data master kamar dan penghuni, serta mencatat transaksi pembayaran.

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
        string no_ktp
    }
    
    TRANSAKSI {
        int id_transaksi PK
        int id_kamar FK
        int id_penghuni FK
        date tgl_masuk
        int total_bayar
    }

## 5. Kardinalitas
* **Penghuni ke Transaksi:** (1:N) - Satu penghuni dapat melakukan transaksi sewa berkali-kali.
* **Kamar ke Transaksi:** (1:N) - Satu kamar dapat disewa dalam berbagai transaksi sewa.

## 6. Normalisasi Database
Database telah dinormalisasi hingga **3NF** untuk memastikan data bersifat atomik, memiliki ketergantungan fungsional penuh, dan menghapus ketergantungan transitif guna meminimalkan redundansi data.

## 7. Implementasi Database (DDL SQL)
File `database.sql` berisi perintah untuk membuat tabel:
* `kamar` (Master)
* `penghuni` (Master)
* `transaksi` (Transaksi)

## 8. Manipulasi Data (DML)
File ini mencakup perintah `INSERT` untuk mengisi data awal, `UPDATE` untuk perubahan data, dan `DELETE` untuk menghapus data.

## 9. Aplikasi CRUD
Aplikasi ini dikembangkan dengan dua pendekatan:
* **Python:** Skrip interaktif untuk administrasi database menggunakan `mysql-connector-python`.
* **PHP (MVC):** Antarmuka web untuk pengelolaan data yang mudah digunakan oleh admin.

---

### Cara Menjalankan
1. **Database:** Import `database.sql` ke MySQL melalui phpMyAdmin.
2. **PHP:** Pastikan XAMPP berjalan. Buka folder `php/` di browser atau jalankan `php -S localhost:8080` di terminal.
3. **Python:** Jalankan `pip install -r python/requirements.txt` lalu jalankan `python python/crud_kos.py`.

---
*Dibuat untuk memenuhi tugas UAS Mata Kuliah Basis Data.*
