## Config Environment

        System Requirement:
        1. PHP mininum 8.1.2 version
        2. Node JS have installed requirement : {"node":"^14.18.0 || >=16.0.0"}

## Config Start Development

        <1>clone repo: `git clone https://github.com/gii17/ujian_test.git`
        <2>in terminal: cd test
        <3>install library development: composer install
        <4>koneksi DB: rubah file .env
        <4>Buat DB lokal
        <5>isikan :
                DB_CONNECTION=mysql
                DB_HOST=127.0.0.1
                DB_PORT=3306
                DB_DATABASE="sesuaikan dengan local"
                DB_USERNAME="sesuaikan dengan local"
                DB_PASSWORD="sesuaikan dengan local"
        <6>ketik di terminal : php artisan migrate --seed
        <7>ketik di terminal : npm run dev

## Running Aplikasi Lokal

         <1>ketik di terminal: php artisan serve
         <2>buat terminal yang sama di direktori yang sama:
         <3>npm install --legacy-peer-deps
         <3>ketik di terminal: npm run dev
         <4>buka di browser http://localhost:8000

## Library Or Package yang digunakan untuk test

        <1>Spatie
        <2>Laravel Collective
        <3>Ui
        <4>Realrashid/Alert

## Cara Masuk ke halaman admin 
    <1>Seeder terlebih dahulu php Artisan --seed
    <2>Lalu ketik di Url Seperti ini Office/Auth/login Karena Menurut saya
        Halaman Login sengaja tidak di tampilkan karena hanya Admin dan Staf saja
        yang boleh mengetahui Url Laman lOGIN
    <3> Akun Admin = gmail = admin@admin.com
                     password = "admin123"
    <4> Akses Admin = Create Konser
                      Edit Konser
                      Delete Konser
                      Acc Ticket / Ticket 
                      List Pemesana
                      CRUD Staff
                      Laporan
        Akses Staff =  Acc Ticket
                        List Pemesanan
                        Laporan
        Akses Guest / Cusstomer = Pesan Ticket
