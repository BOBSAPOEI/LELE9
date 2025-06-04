# Class untuk ruang rapat
class RuangRapat:
    def __init__(self, nama, ukuran, fasilitas):
        self.nama = nama
        self.ukuran = ukuran  # kecil/sedang/besar
        self.fasilitas = fasilitas
        self.tersedia = True

    def __str__(self):
        status = "Tersedia" if self.tersedia else "Sudah Dipesan"
        return f"{self.nama} ({self.ukuran}) - {', '.join(self.fasilitas)} [{status}]"

# Class untuk reservasi
class Reservasi:
    def __init__(self, pegawai, ruang):
        self.pegawai = pegawai
        self.ruang = ruang

    def __str__(self):
        return f"{self.pegawai} memesan ruang {self.ruang.nama}"

# Sistem utama untuk manajemen reservasi
class SistemReservasi:
    def __init__(self):
        self.daftar_ruang = []
        self.daftar_reservasi = []

    def tambah_ruang(self, ruang):
        self.daftar_ruang.append(ruang)

    def tampilkan_ruang(self):
        print("=== Daftar Ruang Rapat ===")
        for ruang in self.daftar_ruang:
            print(ruang)

    def reservasi_ruang(self, nama_pegawai, nama_ruang):
        for ruang in self.daftar_ruang:
            if ruang.nama == nama_ruang and ruang.tersedia:
                ruang.tersedia = False
                reservasi = Reservasi(nama_pegawai, ruang)
                self.daftar_reservasi.append(reservasi)
                print(f"Reservasi berhasil: {reservasi}")
                return
        print(f"Ruang '{nama_ruang}' tidak tersedia atau tidak ditemukan.")

    def batalkan_reservasi(self, nama_pegawai, nama_ruang):
        for reservasi in self.daftar_reservasi:
            if reservasi.pegawai == nama_pegawai and reservasi.ruang.nama == nama_ruang:
                reservasi.ruang.tersedia = True
                self.daftar_reservasi.remove(reservasi)
                print(f"Reservasi ruang '{nama_ruang}' oleh {nama_pegawai} dibatalkan.")
                return
        print(f"Tidak ada reservasi atas nama {nama_pegawai} untuk ruang '{nama_ruang}'.")

    def tampilkan_reservasi(self):
        print("\n=== Daftar Reservasi ===")
        if not self.daftar_reservasi:
            print("Belum ada reservasi.")
        else:
            for r in self.daftar_reservasi:
                print(r)

# --------------------------
# Simulasi Penggunaan
# --------------------------

# Inisialisasi sistem
sistem = SistemReservasi()

# Tambahkan ruang rapat
sistem.tambah_ruang(RuangRapat("Ruang A", "kecil", ["TV", "AC"]))
sistem.tambah_ruang(RuangRapat("Ruang B", "sedang", ["Proyektor", "Papan Tulis"]))
sistem.tambah_ruang(RuangRapat("Ruang C", "besar", ["Sound System", "LCD", "Mic"]))

# Tampilkan ruang awal
sistem.tampilkan_ruang()

# Pegawai melakukan reservasi
sistem.reservasi_ruang("Satria", "Ruang A")
sistem.reservasi_ruang("Dewi", "Ruang B")

# Tampilkan reservasi
sistem.tampilkan_reservasi()

# Tampilkan status ruang setelah reservasi
sistem.tampilkan_ruang()

# Batalkan salah satu reservasi
sistem.batalkan_reservasi("Satria", "Ruang A")

# Tampilkan ulang daftar reservasi dan ruang
sistem.tampilkan_reservasi()
sistem.tampilkan_ruang()

