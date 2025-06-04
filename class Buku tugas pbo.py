class Buku:
    def __init__(self, judul, pengarang):
        self.judul = judul
        self.pengarang = pengarang
        self.status = "tersedia"

    def pinjam(self):
        if self.status == "tersedia":
            self.status = "dipinjam"
            return True
        else:
            return False

    def kembalikan(self):
        self.status = "tersedia"

    def __str__(self):
        return f"{self.judul} oleh {self.pengarang} ({self.status})"

class Anggota:
    def __init__(self, nama, id_anggota):
        self.nama = nama
        self.id_anggota = id_anggota
        self.daftar_buku = []

    def pinjam_buku(self, buku):
        if buku.pinjam():
            self.daftar_buku.append(buku)
            print(f"{self.nama} berhasil meminjam buku '{buku.judul}'")
        else:
            print(f"Buku '{buku.judul}' sedang tidak tersedia")

    def kembalikan_buku(self, buku):
        if buku in self.daftar_buku:
            buku.kembalikan()
            self.daftar_buku.remove(buku)
            print(f"{self.nama} telah mengembalikan buku '{buku.judul}'")
        else:
            print(f"{self.nama} tidak meminjam buku '{buku.judul}'")

    def __str__(self):
        return f"{self.nama} (ID: {self.id_anggota}) meminjam: {[b.judul for b in self.daftar_buku]}"

# Buat beberapa buku
buku1 = Buku("Laskar Pelangi", "Andrea Hirata")
buku2 = Buku("Bumi Manusia", "Pramoedya Ananta Toer")

# Buat anggota
anggota1 = Anggota("Satria", "A001")

# Proses peminjaman
anggota1.pinjam_buku(buku1)  # sukses
anggota1.pinjam_buku(buku2)  # sukses

# Coba pinjam buku yang sudah dipinjam
anggota2 = Anggota("Dewi", "A002")
anggota2.pinjam_buku(buku1)  # gagal karena sudah dipinjam

# Proses pengembalian
anggota1.kembalikan_buku(buku1)

# Anggota lain mencoba pinjam setelah dikembalikan
anggota2.pinjam_buku(buku1)  # sekarang sukses
