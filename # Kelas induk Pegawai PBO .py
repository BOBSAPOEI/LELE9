# Kelas induk Pegawai
class Pegawai:
    def __init__(self, nama, id_pegawai):
        self.nama = nama
        self.id_pegawai = id_pegawai

    def hitung_gaji(self):
        pass  # Akan dioverride oleh anak kelas

    def __str__(self):
        return f"{self.nama} (ID: {self.id_pegawai})"

# Kelas anak: Pegawai Tetap
class PegawaiTetap(Pegawai):
    def __init__(self, nama, id_pegawai, gaji_tetap):
        super().__init__(nama, id_pegawai)
        self.gaji_tetap = gaji_tetap

    def hitung_gaji(self):
        return self.gaji_tetap

# Kelas anak: Pegawai Kontrak
class PegawaiKontrak(Pegawai):
    def __init__(self, nama, id_pegawai, upah_per_jam, jam_kerja):
        super().__init__(nama, id_pegawai)
        self.upah_per_jam = upah_per_jam
        self.jam_kerja = jam_kerja

    def hitung_gaji(self):
        return self.upah_per_jam * self.jam_kerja

# --------------------------
# Simulasi penggunaan
# --------------------------

# Daftar pegawai tetap dan kontrak
pegawai1 = PegawaiTetap("Adji", "PT001", 5000000)
pegawai2 = PegawaiKontrak("Satria", "PK001", 30000, 160)  # 160 jam kerja
pegawai3 = PegawaiKontrak("Gita jasmine", "PK002", 25000, 120)  # 120 jam kerja

# List semua pegawai
daftar_pegawai = [pegawai1, pegawai2, pegawai3]

# Tampilkan gaji masing-masing pegawai
print("=== Daftar Gaji Pegawai ===")
for pegawai in daftar_pegawai:
    print(f"{pegawai} - Gaji: Rp{pegawai.hitung_gaji():,}")
