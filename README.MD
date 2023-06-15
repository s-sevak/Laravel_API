Notebook API

API для управления записями в блокноте.

Установка и настройка:

1. Склонируйте репозиторий:

   git clone https://github.com/your/repo.git

2. Перейдите в директорию проекта:

   cd notebook-api

3. Установите зависимости:

   composer install

4. Создайте файл .env на основе примера .env.example:

   cp .env.example .env

   Измените настройки базы данных в файле .env:

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password

5. Сгенерируйте ключ приложения:

   php artisan key:generate

6. Выполните миграции базы данных:

   php artisan migrate

7. Запустите сервер разработки:

   php artisan serve

   Сервер будет запущен по адресу http://localhost:8000.

Запуск с использованием Docker:

1. Установите Docker на свою систему.

2. Соберите Docker-образ:

   docker build -t notebook-api .

3. Запустите контейнер из Docker-образа:

   docker run -p 8000:8000 -d notebook-api

   Сервер будет запущен по адресу http://localhost:8000.
