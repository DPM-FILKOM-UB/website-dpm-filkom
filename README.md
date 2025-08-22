<h1 align="center">WEBSITE DPM FILKOM UB</h1>

> Proyek ini dibuat dengan menggunakan [Laravel](https://laravel.com/docs/12.x) dan [Vue 3](https://vuejs.org/guide/introduction.html)

## 🔧 Alat Pengembangan Sistem

### 🖼️ Frontend

![Vue.js](https://img.shields.io/badge/vuejs-%2335495e.svg?style=for-the-badge&logo=vuedotjs&logoColor=%234FC08D)
![TailwindCSS](https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white)

### 🛠️ Backend

![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)

### 🗄️ Database

![MySQL](https://img.shields.io/badge/mysql-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white)

## 👨‍💻 Kontribusi

Anda dapat berkontribusi pada proyek ini dengan cara *clone* atau *fork* repositori ini. Setelah itu, lakukan beberapa hal berikut:

1. Instal dependensi

   ```sh
   composer install
   npm install
   ```

2. Buat file .env dan masukkan APP_KEY

    ```.env
    APP_NAME=Laravel
    APP_ENV=local
    APP_KEY= ...
    APP_DEBUG=true
    APP_URL=http://localhost
    ```

3. Lakukan migrasi database

    ```sh
    php artisan migrate
    ```

4. Jalankan proyeknya

    ```sh
    php artisan serve
    npm run dev
    ```

    atau gunakan

    ```sh
    php -S localhost:8000 -t public
    npm run dev
    ```
