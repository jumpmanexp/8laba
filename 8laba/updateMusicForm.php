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
        include("showMusic.php")    
    ?>

<form action="updateMusic.php" method="post">
        <label>ID музики, яку змінюємо</label><input name="music_id" type="text"><br>
        <label>ID користувача</label><input name="user_id" type="text"><br>
        <label>Автор</label><input name="author" type="text"><br>
        <label>Назва музики</label><input name="music_name" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>