<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://sibangsa.xyz/images/Sibangsa1.png" width="400" alt="Laravel Logo"></a></p>
<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tentang Proyek Ini
# 🌱 Sibangsa — Sistem Informasi Bank Sampah

Sibangsa adalah aplikasi berbasis **Laravel** yang dirancang untuk membantu pengelolaan Bank Sampah.  
Proyek ini dibuat sebagai solusi digital untuk pencatatan transaksi setoran dan penarikan sampah, manajemen nasabah, serta pengelolaan peran pengguna.

---

## ✨ Fitur Utama
- 🔐 **Modul Autentikasi & Hak Akses**
  - Login Admin & Petugas
  - Login Nasabah (Dalam pengembangan)
  - Manajemen Role & User (CRUD, reset password, nonaktifkan user)

- 👥 **Modul Manajemen Nasabah**
  - CRUD Nasabah
  - Data profil & status aktif

- ♻️ **Modul Transaksi**
  - Setoran sampah (jenis, berat, nilai)
  - Penarikan saldo
  - Validasi saldo & integritas data

- 📊 **Laporan & Dashboard**
  - Rekap setoran & penarikan
  - Statistik nasabah aktif
  - Perhitungan otomatis saldo

---

## 🛠️ Teknologi yang Digunakan
- **Framework**: Laravel
- **Database**: MySQL
- **Frontend**: Blade / Vite
- **Version Control**: GitHub

---

## 📂 Struktur Database
Tabel utama:
- `users` → data pengguna sistem
- `nasabah` → data nasabah bank sampah
- `jenis_sampah` → kategori sampah
- `setoran` → transaksi setoran
- `penarikan` → transaksi penarikan

Relasi antar tabel menggunakan **foreign key** untuk menjaga integritas data.

---

## 🚀 Cara Menjalankan Proyek
1. Clone repository:
   ```bash
   git clone https://github.com/username/sibangsa.git
   cd sibangsa
   
2. Clone repository:
    ```bash
     git clone https://github.com/username/sibangsa.git
3. Masuk ke folder sibangsa:
    ```bash
    cd sibangsa
5. Install dependecies:
   ```bash
   php artisan migrate --seed
7. Setup enviorment:
   Copy .env.example, ganti nama mmenjadi .env
   Atur konfigurasi database
   
9. Jalankan migration & seeder:
10. ```bash
    php artisan migrate --seed
   
11. Start server:
    ```bash
    php artisan serve

13. Jika UI tidak tampail, jalankan:
    ```bash
    npm run dev

## 👨‍💻 Tim Pengembang

## 📌 Catatan
        ▪ Proyek ini dikembangkan bertahap: MVP → Full System.
        ▪ Cocok untuk pembelajaran CRUD, relasi database, dan logika bisnis sederhana.
        ▪ Tujuan utama dari proyek ini adalah membantu Bank Sampah dalam pencatatan, baik itu pencatatan transaksi atau menajemen nasabah.
        
## 📄 Lisensi
Proyek ini menggunakan lisensi MIT. Silakan gunakan, modifikasi, dan kembangkan sesuai kebutuhan.


    

