<?php

$mysqli = new mysqli('localhost', 'root', '', 'zaharchyk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$user_id = $_POST['user_id']; $load_date = $_POST['load_date']; $likes = $_POST['likes']; $photo_id = $_POST['photo_id'];

$sql = "UPDATE photo SET user_id='$user_id', load_date='$load_date', likes='$likes' WHERE photo_id = '$photo_id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showPhoto.php")
?>
