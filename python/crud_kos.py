import mysql.connector

# 1. Konfigurasi Koneksi
def connect_db():
    return mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="db_kos"
    )

# 2. Fungsi Read (Menampilkan data)
def tampilkan_kamar():
    db = connect_db()
    cursor = db.cursor()
    cursor.execute("SELECT * FROM kamar")
    results = cursor.fetchall()
    print("\n--- Daftar Kamar ---")
    for row in results:
        print(f"ID: {row[0]} | Nomor: {row[1]} | Fasilitas: {row[2]} | Harga: {row[3]}")
    db.close()

# 3. Fungsi Create (Menambah data)
def tambah_kamar(nomor, fasilitas, harga):
    db = connect_db()
    cursor = db.cursor()
    sql = "INSERT INTO kamar (nomor_kamar, fasilitas, harga) VALUES (%s, %s, %s)"
    cursor.execute(sql, (nomor, fasilitas, harga))
    db.commit()
    print("Data kamar berhasil ditambah!")
    db.close()

# 4. Fungsi Update
def update_kamar(id_kamar, harga_baru):
    db = connect_db()
    cursor = db.cursor()
    sql = "UPDATE kamar SET harga = %s WHERE id_kamar = %s"
    cursor.execute(sql, (harga_baru, id_kamar))
    db.commit()
    print("Harga kamar berhasil diupdate!")
    db.close()

# 5. Fungsi Delete
def hapus_kamar(id_kamar):
    db = connect_db()
    cursor = db.cursor()
    sql = "DELETE FROM kamar WHERE id_kamar = %s"
    cursor.execute(sql, (id_kamar,))
    db.commit()
    print("Data kamar berhasil dihapus!")
    db.close()

# Menjalankan menu simpel
if __name__ == "__main__":
    tampilkan_kamar()
    # Contoh penggunaan:
    # tambah_kamar('103', 'AC, TV', 2000000)
    # update_kamar(1, 1800000)
