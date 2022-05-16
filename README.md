## Tahap Pengunaan

1.  Clone Repository

    `git clone https://github.com/rochmadnf/simple-shop.git`

2.  Masuk kedalam direktori simple-shop

    `cd simple-shop`

3.  Install package yang dibutuhkan oleh aplikasi, lakukan pada terminal dengan sintaks dibawah ini

    `composer install` atau `composer update`

    `npm install` atau `npm run dev`

4.  Buat file .env

    `copy .\.env.example .\.env` (windows) || `cp .env.example .env` (linux/macos)

5.  Ubah settingan aplikasi pada file .env

        from

        ```php
        APP_NAME=Laravel
        APP_ENV=local
        APP_KEY=
        APP_DEBUG=true
        APP_URL=http://localhost
        ```

        to

        ```php
        APP_NAME="Simple Shop"
        APP_ENV=local
        APP_KEY=
        APP_DEBUG=true
        APP_URL=http://localhost
        # APP_URL=http://simple-shop.test // jika menggunakan valet
        ```

    > Note: pengaturan APP_ENV, APP_DEBUG, dan APP_URL sesuaikan pada tujuannya (dev atau prod). Pada bagian ini, pengaturan di tujukan untuk development

6.  Generate key

    `php artisan key:generate`

7.  Ubah settingan peyimpanan (database) aplikasi pada file .env

    ```php
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=database_name
    DB_USERNAME=database_username
    DB_PASSWORD=database_password
    ```

## Test Case

-   [x] Dapat melakukan fetch data dari API dengan endpoint (https://api.kedasbeautymember.com/public/api/products)

-   [ ] Buat halaman pemesanan sederhana dengan respon ke user apabila transaksi telah berhasil dilakukan (contoh menampilkan invoice). Poin++ apabila invoicenya dapat diprint dalam bentuk PDF. _(on progress)_
-   [ ] Buat halaman manajemen data pemesanan yang diterima dengan fungsi UPDATE. Poin+ jika dapat menampilkan detail dalam bentuk invoice _(on progress)_
