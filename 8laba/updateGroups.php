<?php

$mysqli = new mysqli('localhost', 'root', '', 'zaharchyk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$group_id = $_POST['group_id']; $user_id = $_POST['user_id']; $group_name = $_POST['group_name']; $group_type = $_POST['group_type']; 

$sql = "UPDATE groups SET user_id='$user_id', group_name='$group_name', group_type='$group_type' WHERE group_id='$group_id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showGroups.php")
?>
