<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця User</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'zaharchyk');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM user')) {

        printf("Список користувачів: <br><br>");
        printf("<table><tr><th>ID</th><th>Ім'я</th><th>Фамілія</th><th>День народження</th><th>Вік</th></tr>");
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['firstname'], $row['lastname'], $row['birthday'], $row['age']); 
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="insertUserForm.php">Вставити рядок</a><br></li>
		<li><a href="updateUserForm.php">Редагувати рядок</a><br></li>
		<li><a href="deleteUserForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>