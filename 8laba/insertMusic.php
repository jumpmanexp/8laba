<?php

$mysqli = new mysqli('localhost', 'root', '', 'zaharchyk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$user_id = $_POST['user_id']; $author = $_POST['author']; $music_name = $_POST['music_name']; 

$sql = "INSERT INTO music (music_id, user_id, author, music_name) VALUES ('', '$user_id', '$author', '$music_name')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showMusic.php")
?>
