<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/reg.css">
</head>
<body>
    <div class="site-name"><h1>Регистрация</h1></div>
    <div class="containers">
        <div class="form">
            <form action="php/function.php" method="post">
            <input type="text" name = "Name" placeholder="Имя">
            <input type="number" name = "number" placeholder="Номер телефона">
            <input type="password" name = "password" placeholder="Пароль">
            <button type="submit">Зарегистрироваться</button>
            <a href="index.php"><button type="button" class="back-button">Назад</button></a>
            <a href="vhod.php"><button type="button" class="back-button">Войти</button></a>
        </div>
    </div>
</body>
</html>