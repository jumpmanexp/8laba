<?php

$mysqli = new mysqli('localhost', 'root', '', 'zaharchyk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['music_id'];


$sql = "DELETE FROM music WHERE music_id='$id'";


if($mysqli->query($sql)){
    echo "Рядок видалено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showMusic.php")
?>
