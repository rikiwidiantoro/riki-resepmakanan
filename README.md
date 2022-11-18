## Cara Installasi

1. Download Code di repository ini dan code di link drive ini : ....
2. Extract semua. Lalu gabungkan code di drive dengan code di repository github
3. Jika tidak menggunakan valet, ubah "APP_URL" pada file .env dengan localhost atau server lokal
3. Buat database sesuai nama di file .sql lalu import file .sql yang sebelumnya yg ada di drive. pastikan nama file nya sama dengan nama "DB_DATABASE" pada file .env
4. Jika data pada database setelah import tidak muncul maka buka code, lalu buka terminal dan jalankan perintah "php artisan migrate:refresh", kemudian jalankan perintah "php artisan db:seed" => untuk men-generate data default yang telah dibuat dengan seeding & factory


## Cara Running

- Jika menggunakan valet : jalankan "npm run dev" pada terminal, lalu klik nama repository "riki-resepmakanan.test" pada browser
- Tanpa menggunakan valet : buka 2 terminal lalu jalankan "npm run dev" pada terminal 1, dan jalankan "npm run serve" pada terminal 2 atau sebaliknya
- User default : nama = Riki Widiantoro, email = qwerty@aa.com, password = qwertyuiop | atau bisa dilihat pada code di file database/seeders/DatabaseSeeder.php


## Fitur yang belum selesai
1. User yang sudah login bisa meng-klik tombol suka pada resep, akan tetapi tidak berpengaruh pada jumlah suka (tag suka diatas judul) dan jika di refresh atau berpindah halaman kembali seperti semula. jadi tombol suka hanya fungsionalitas saja dihalaman home
2. Belum bisa upload image/gambar
3. Bagian tulis resep, bahan-bahan dan langkah pembuatan belum bisa menggunakan list. jadi hanya menggunakan tag textarea
4. 


## Dibuat dengan :
- Framework Laravel & Bootstrap
- PHP, JavaScript, MySQL
- Fitur otentikasi Laravel UI
- Fitur Seeding & Factory Laravel
- XAMPP, VS Code, Chrome



## Tes Teknis Fullstack Meta Mata Internship Challenge From Home Batch 4

Membuat website dengan Tema : Website untuk berbagi resep makanan.

Kebutuhan Sistem :
- User harus melakukan login sebelum masuk ke website ✅
- User bisa melakukan registrasi jika belum mempunyai akun ✅
- User yang sudah login bisa memposting resep makanan ✅ sebagian
- Resep makananan minimal berisi foto makanan, nama, bahan, cara pembuatan ✅ sebagian
- User yang sudah login bisa melihat resep milik sendiri atau dari orang lainnya ✅
- User yang sudah login bisa meng-klik tombol suka pada resep ✅
- Daftar resep ditampilkan berdasarkan yang terbaru ✅

Desain Web :
[Link Desain (Figma)](https://www.figma.com/file/3RNhvNP3qeTAx8HYcBxvwz/Tes-MM-Intern-Batch-2?node-id=0%3A1)

Ketentuan Pengerjaan :
- Membuat tampilan sesuai contoh desain
- Tampilan responsive baik di Desktop, Tablet, atau Mobile
- Harus menggunakan Laravel, MySQL, dan bootstrap
- Boleh menggunakan reactjs (nilai plus)
- Disarankan menggunakan packages laravel breeze untuk fitur otentikasi
- Tidak harus menyelesaikan seluruh fitur untuk mengumpulkan tes ini. Namun, semakin banyak fitur yang bisa diselesaikan akan lebih baik.

Penilaian :
- Skema database
- Code style (Kerapian, Konsistensi, dan ketelitian)
- Kesesuaian Dengan desain
- Responsive Layout
- Fungsionalitas
