<?php

$mysqli = new mysqli('localhost', 'root', '', 'zaharchyk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$firstname = $_POST['firstname']; $lastname = $_POST['lastname']; $birthday = $_POST['birthday']; $age = $_POST['age']; $id = $_POST['id'];

$sql = "INSERT INTO user (id, firstname, lastname, birthday, age) VALUES ('$id', '$firstname', '$lastname', '$birthday', '$age')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showUser.php")
?>
