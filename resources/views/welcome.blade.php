<!DOCTYPE html>
<html>
<head>
    <title>Notebook API</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1>Notebook API</h1>
    <p class="lead">REST API для записной книжки</p>
    <h2>Методы API</h2>
    <ul class="list-group">
        <li class="list-group-item">GET /api/v1/notebook/ - Получить список записок</li>
        <li class="list-group-item">POST /api/v1/notebook/ - Создать новую записку</li>
        <li class="list-group-item">GET /api/v1/notebook/&lt;id&gt;/ - Получить информацию о записке с определенным ID</li>
        <li class="list-group-item">POST /api/v1/notebook/&lt;id&gt;/ - Обновить информацию о записке с определенным ID</li>
        <li class="list-group-item">DELETE /api/v1/notebook/&lt;id&gt;/ - Удалить записку с определенным ID</li>
    </ul>
    <h2>Поля для создания записки:</h2>
    <ul class="list-group">
        <li class="list-group-item">ФИО (обязательное)</li>
        <li class="list-group-item">Компания</li>
        <li class="list-group-item">Телефон (обязательное)</li>
        <li class="list-group-item">Email (обязательное)</li>
        <li class="list-group-item">Дата рождения</li>
        <li class="list-group-item">Фото</li>
    </ul>
    <h2>Дополнительные возможности:</h2>
    <ul>
        <li>Возможность выводить информацию в списке постранично</li>
    </ul>
    <h2>Swagger</h2>
    <p>Для отображения методов API вы можете использовать <a href="https://swagger.io/">Swagger</a>.</p>
    <h2>Тестирование</h2>
    <p>Для тестирования результатов работы вы можете использовать следующие инструменты:</p>
    <ul>
        <li>Postman: Отправляйте HTTP-запросы к API и проверяйте ответы.</li>
        <li>PHPUnit: Напишите модульные тесты для проверки функциональности API.</li>
    </ul>
    <p>Чтобы запустить приложение в Docker контейнере, выполните следующие шаги:</p>
    <ol>
        <li>Создайте Dockerfile в корневом каталоге проекта с необходимой конфигурацией.</li>
        <li>Создайте файл docker-compose.yml для настройки контейнера и его зависимостей.</li>
        <li>Соберите и запустите контейнер с помощью Docker Compose.</li>
    </ol>
    <p>Если у вас возникнут вопросы или проблемы, обратитесь к официальной документации Docker и Laravel.</p>
</div>
</body>
</html>
