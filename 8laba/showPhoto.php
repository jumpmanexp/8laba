<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Photo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Photo</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'zaharchyk');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM photo')) {

        printf("Список фото: <br><br>");
        printf("<table><th>ID</th><th>ID користувача</th><th>Дата завантаження</th><th>Кількість лайків</th></tr>"); 
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['photo_id'], $row['user_id'], $row['load_date'], $row['likes']); 
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="insertPhotoForm.php">Вставити рядок</a><br></li>
		<li><a href="updatePhotoForm.php">Редагувати рядок</a><br></li>
        <li><a href="deletePhotoForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
