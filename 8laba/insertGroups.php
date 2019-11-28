<?php

$mysqli = new mysqli('localhost', 'root', '', 'zaharchyk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$user_id = $_POST['user_id']; $group_name = $_POST['group_name']; $group_type = $_POST['group_type']; 

$sql = "INSERT INTO groups (group_id, user_id, group_name, group_type) VALUES ('', '$user_id', '$group_name', '$group_type')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showGroups.php")
?>
