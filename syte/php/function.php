<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mojaya";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Name = $_POST['Name'];
$number = $_POST['number'];
$password = $_POST['password'];

$sql = "INSERT INTO users (Name, number, password) VALUES ('$Name', '$number', '$password')";
# $sql = "INSERT INTO users (ID, Name, Surname, Secondname, login, password, surepassword) VALUES (NULL, 'свусу', 'усуусв', 'увсувсв', 'bxqkxb@gmail.com', 'wd3d3ed3ed', 'ed3de3d3ed');"
if ($conn->query($sql) === TRUE) {
    echo "Регистрация прошла успешно!";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>