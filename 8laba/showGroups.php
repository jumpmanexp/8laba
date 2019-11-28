<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Groups</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Groups</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'zaharchyk');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM groups')) { 

        printf("Список груп: <br><br>");
        printf("<table><tr><th>ID групи</th><th>ID користувача</th><th>Назва групи</th><th>Тип групи</th></tr>");
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['group_id'], $row['user_id'], $row['group_name'], $row['group_type']);
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="insertGroupsForm.php">Вставити рядок</a><br></li>
		<li><a href="updateGroupsForm.php">Редагувати рядок</a><br></li>
        <li><a href="deleteGroupsForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
