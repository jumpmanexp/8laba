<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showUser.php")    
    ?>

<form action="updateUser.php" method="post">
        <label>ID користувача, який змінюємо</label><input name="id" type="text"><br>
        <label>Ім'я</label><input name="firstname" type="text"><br>
        <label>Фамілія</label><input name="lastname" type="text"><br>
        <label>Дата народження</label><input name="birthday" type="text"><br>
        <label>Вік</label><input name="age" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>