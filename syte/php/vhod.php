<?php
// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST["Name"];
    $password = $_POST["password"];

// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Подключение к базе данных
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mojaya";

    try {
        $dbh = new PDO($dsn, $username_db, $password_db);
        
        // Подготавливаем запрос для выборки пользователя по имени
        $stmt = $dbh->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // Верные учетные данные
            echo "Добро пожаловать, $username!";
        } else {
            // Неверные учетные данные
            echo "Неверное имя пользователя или пароль.";
        }
    } catch (PDOException $e) {
        echo "Ошибка подключения к базе данных: " . $e->getMessage();
    }
}


    // Здесь можно реализовать проверку имени пользователя и пароля
    // Например, можно сравнивать введенные данные с данными в базе

    // Предположим, что мы проверяем просто для примера грубо, без базы данных
    if ($name === "user" && $password === "password") {
        // Верные учетные данные
        echo "Добро пожаловать, $name!";
    } else {
        // Неверные учетные данные
        echo "Неверное имя пользователя или пароль.";
    }
}
?>
