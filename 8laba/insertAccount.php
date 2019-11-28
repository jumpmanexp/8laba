<?php

$mysqli = new mysqli('localhost', 'root', '', 'zaharchyk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}
error_reporting(E_ERROR|E_WARNING);

$login = $_POST["login"]; $password = $_POST['password'];

$sql = "INSERT INTO account (id, login, password) VALUES ('', '$login', '$password')";

if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



$mysqli->close();

include("showAccount.php")
?>