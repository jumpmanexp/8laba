<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Music</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Music</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'zaharchyk'); 
    $mysqli->set_charset("utf8"); 
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM music')) {   

        printf("Список музики: <br><br>");
        printf("<table><tr><th>ID</th><th>ID користувача</th><th>Автор</th><th>Назва музики</th></tr>");
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['music_id'], $row['user_id'], $row['author'], $row['music_name']); 
        };
        printf("</table>");
        
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="insertMusicForm.php">Вставити рядок</a><br></li>
		<li><a href="updateMusicForm.php">Редагувати рядок</a><br></li>
		<li><a href="deleteMusicForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
