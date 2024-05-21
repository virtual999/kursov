<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="css/reg.css">
</head>
<body>
    <div class="site-name"><h1>Вход</h1></div>
    <div class="containers">
        <div class="form">
            <form action="php/vhod.php" method="post">
            <input type="text" name = "Name" placeholder="Имя">
            <input type="password" name = "password" placeholder="Пароль">
            <button type="submit">Вход</button>
            <a href="index.php"><button type="button" class="back-button">Назад</button></a>
            <a href="reg.php"><button type="button" class="back-button">Регистрация</button></a>
        </div>
    </div>
</body>
</html>