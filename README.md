# Sistem Kas

Sistem Kas adalah aplikasi yang digunakan untuk mengelola pembayaran kas kelas. Aplikasi ini memungkinkan pengguna untuk mencatat pemasukan dan pengeluaran kas, serta melihat laporan keuangan.

## Fitur

-   **Manajemen Siswa**: Tambah, edit, dan hapus data siswa.
-   **Pencatatan Kas**: Catat pemasukan dan pengeluaran kas.
-   **Laporan Keuangan**: Tampilkan total pemasukan, pengeluaran, dan saldo kas.

## Instalasi

1. Clone repositori ini:
    ```bash
    git clone https://github.com/username/repo.git
    ```
2. Masuk ke direktori proyek:
    ```bash
    cd cash-system
    ```
3. Install dependensi menggunakan Composer:
    ```bash
    composer install
    ```
4. Buat file `.env` dan sesuaikan konfigurasi database:
    ```bash
    cp .env.example .env
    ```
5. Jalankan migrasi untuk membuat tabel di database:
    ```bash
    php artisan migrate
    ```

## Penggunaan

1. Jalankan server lokal:
    ```bash
    php artisan serve
    ```
2. Akses aplikasi melalui browser di `http://localhost:8000`.

## Kontribusi

Jika Anda ingin berkontribusi, silakan buat pull request atau buka isu untuk diskusi.

## Lisensi

Proyek ini dilisensikan di bawah MIT License. Lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.
