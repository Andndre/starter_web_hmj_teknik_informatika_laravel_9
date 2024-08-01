# TODO: Nama Aplikasi
<p align="center">
<img alt="php" src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"> <img alt="bootstrap" src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white"> <img alt="bootstrap" src="https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white"> <img alt="bootstrap" src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white">
</p>

## Description

TODO: Description

## System Requerements

-   PHP >= ^8.0.xx
-   [Git For Windows](https://git-scm.com/download/win)
-   [Composer](https://getcomposer.org/download/)
-   Apache | Nginx Server dan MySQL Server => [Dapat diperoleh dengan menginstall [XAMPP](https://www.apachefriends.org/download.html) atau [Laragon](https://laragon.org/download/index.html), disarankan menggunakan Laragon]
-   [Npm dan NodeJs](https://nodejs.org/en/)
-   [phpMyAdmin](https://www.phpmyadmin.net/) atau [HeidiSQL](https://www.heidisql.com/)

## PHP Extensions (Required by Package or Laravel)

-   PHP extension intl enabled
-   PHP extension fileinfo enabled
-   PHP extension openssl enabled
-   PHP extension json enabled (optional)
-   PHP extension mbstring enabled
-   PHP extension mysqli enabled
-   PHP extension pdo_mysql enabled
-   PHP extension curl enabled
-   PHP extension xml enabled (optional)
-   PHP extension imagick enabled (optional)
-   PHP extension php_zip enabled
-   PHP extension php_xml enabled
-   PHP extension php_gd2 enabled
-   PHP extension php_iconv enabled
-   PHP extension php_simplexml enabled
-   PHP extension php_xmlreader enabled
-   PHP extension php_zlib enabled

## How To Clone Repository

- Buka folder `xampp/htdocs` atau `laragon/www` lalu clone repository ini menggunakan perintah `git clone -b develop https://git.undiksha.ac.id/akuisisi/newhmjinformatika/etika.git`, branch default yang boleh diclone adalah branch `develop`
- Buka folder hasil clone/extract di Visual Studio Code atau text editor lainnya
- Buat sebuah database di MySQL, menggunakan PhpMyAdmin atau HeidiSQL. Selanjutnya copy file `.env.example` dan rename menjadi `.env` lalu sesuaikan nama database di `.env` dengan database yang telah dibuat
- Buka terminal/cmd, arahkan ke folder root project. Jalankan perintah `composer install`, jangan lakukan `composer update` jika spesifikasi anda tidak sesuai dengan requirements. Setelah itu, jalankan perintah berikut secara bertahap

1. `php artisan migrate --seed` untuk menjalankan migration dan seeder (jika ada)
2. `php artisan storage:link` untuk membuat link storage pada folder public
3. `php artisan key:generate` untuk membuat key pada env
4. `php artisan config:cache` untuk menggenerate cache config
5. `php artisan route:cache` untuk menggenerate cache route
6. `php artisan serve` untuk menjalankan server

- Jika tidak ada masalah, silahkan akses kehalaman `http://127.0.0.1:8000` atau `http://localhost:8000` maka seharusnya halaman awal aplikasi ETIKA terlihat
## How To Pull Repository
- Silahkan checkout ke branch anda dengan perintah `git checkout {nama branch}`
1. `git pull origin develop` mengecek perubahan di branch utama `develop`
2. `composer install` untuk melakukan install package (opsional, jika ada informasi penambahan package)
3. Tambahkan konfigurasi env (opsional, jika ada informasi penambahan konfigurasi)
4. `php artisan config:cache` untuk menggenerate cache config
5. `php artisan route:cache` untuk menggenerate cache route
- Jika terdapat conflict saat anda melakukan pull, silahkan diskusikan di group agar dibantu
## How To Push Repository
### Step By Step
- Pada pengembangan ini, kita akan menggunakan branch `develop` sebagai branch utama
- Untuk membuat fitur berdasarkan tasklist yang diberikan, masing-masing developer silahkan buat branch berdasarkan nama anda (ex: `dev deyan`) terlebih dahulu dengan perintah `git branch {nama branch}`. Kemudian silahkan checkout ke branch tersebut dengan perintah `git checkout {nama branch}`
- Jika terdapat perubahan yang anda lakukan pada kode program, silahkan jalankan perintah berikut
1. `git add .` untuk menandai perubahan yang akan dibawa ke stagging
2. `git commit -m "{message perubahan anda}"` untuk membawa perubahan ke stagging dan memberikan informasi perubahan anda
3. `./vendor/bin/pint` untuk melakukan reformatting code agar tidak terjadi bentrok
4. Ulangi langkah 1 dan 2, untuk message di langkah kedua isi dengan reformat `git commit -m "reformat"`
5. `git pull origin develop` mengecek perubahan di branch utama `develop`
6. `git push origin {branch anda}` lakukan push ke branch anda
### Disclaimer
- Sebelum bekerja, silahkan lakukan pull terlebih dahulu ke branch `develop` guna memastikan branch anda up-to-date dengan branch develop, hal ini untuk mencegah terjadinya conflict
- Setelah bekerja, selesai ataupun tidak selesai mengerjakan task anda, lakukan point 1 - 6 pada langkah-langkah push ke repository
- Jika fitur benar-benar telah selesai, lakukan permintaan Pull Request dengan asal branch adalah `{branch anda}` dan tujuan adalah branch `develop`.
  
## Contributing
- [GanaDev Com](https://ganadev.com)
- [HMJ TI Undiksha](https://hmjti.undiksha.ac.id)

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
