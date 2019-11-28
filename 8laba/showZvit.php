<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Звіт</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Звіт</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'zaharchyk');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT a.login, a.password, u.firstname, u.lastname, u.birthday, u.age, m.author, m.music_name, g.group_name, g.group_type FROM account AS a INNER JOIN user AS u ON (a.id=u.id) INNER JOIN music AS m ON (u.id=m.user_id) INNER JOIN groups AS g ON (u.id=g.user_id)')) {

        printf("Список: <br><br>");
        printf("<table><th>Логін</th><th>Пароль</th><th>Ім'я</th><th>Прізвище</th><th>День народження</th><th>Вік</th><th>Автор пісні</th><th>Назва пісні</th><th>Назва групи</th><th>Тип групи</th></tr>"); 
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['login'], $row['password'], $row['firstname'], $row['lastname'], $row['birthday'], $row['age'], $row['author'], $row['music_name'], $row['group_name'], $row['group_type']); 
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
