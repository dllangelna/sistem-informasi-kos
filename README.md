# Sistem Informasi Pengelolaan Kos

Repository ini berisi laporan jawaban UAS Basis Data mengenai rancangan database, dokumentasi ERD, normalisasi, script SQL DDL & DML, serta aplikasi CRUD (Create, Read, Update, Delete) berbasis Python dan PHP.

## Struktur Proyek
- `php/`: Berisi implementasi MVC (Model-View-Controller) untuk manajemen data Kamar dan Penghuni.
- `python/`: Berisi skrip Python untuk integrasi CRUD database MySQL.
- `database.sql`: Berisi DDL (Data Definition Language) untuk struktur tabel dan DML (Data Manipulation Language) untuk data dummy.

## Spesifikasi
- **Database**: MySQL / MariaDB
- **Backend PHP**: Native MVC (Model-View-Controller)
- **Backend Python**: mysql-connector-python

## Cara Menjalankan
1. Import file `database.sql` ke dalam MySQL melalui phpMyAdmin.
2. Pastikan XAMPP sudah berjalan untuk folder `php/`.
3. Untuk aplikasi Python, jalankan perintah `pip install -r python/requirements.txt` lalu jalankan skrip `python/crud_kos.py`.

---
*Dibuat untuk memenuhi tugas UAS Mata Kuliah Basis Data.*
