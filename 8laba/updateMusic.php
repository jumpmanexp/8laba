<?php

$mysqli = new mysqli('localhost', 'root', '', 'zaharchyk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$user_id = $_POST['user_id']; $author = $_POST['author']; $music_name = $_POST['music_name']; $music_id = $_POST['music_id'];

$sql = "UPDATE music SET user_id='$user_id', author='$author', music_name='$music_name' WHERE music_id='$music_id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showMusic.php")
?>
