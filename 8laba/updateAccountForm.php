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
        include("showAccount.php")    
    ?>

<form action="updateAccount.php" method="post">
        <label>ID рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Новий логін</label><input name="login" type="text"><br>
        <label>Новий пароль</label><input name="password" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>