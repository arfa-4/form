# Form Data Diri

Aplikasi PHP sederhana untuk mengisi dan menampilkan data diri.

## Fitur

- Formulir untuk memasukkan nama, alamat, nomor WhatsApp, dan status.
- Menampilkan data yang dikirim dengan metode POST.
- Melakukan pemeriksaan data kosong dan mengamankan output HTML.
- Menampilkan contoh perhitungan total uang untuk uang, makan, dan parkir.

## Menjalankan aplikasi

1. Letakkan folder `form` di direktori web server, misalnya `C:\laragon\www\form`.
2. Jalankan Laragon dan pastikan web server aktif.
3. Buka `http://localhost/form/` di browser.
4. Isi semua kolom formulir, lalu pilih **Kirim Data**. Hasil ditampilkan di halaman berikutnya.
5. Untuk melihat contoh perhitungan, buka `http://localhost/form/mtk.php`.

## File

- `index.php` - halaman formulir.
- `tampil.php` - menampilkan data formulir.
- `mtk.php` - contoh penjumlahan uang.
- `backup-original/` - salinan file PHP awal sebelum revisi.

## Kebutuhan

- PHP
- Web server lokal seperti Laragon
