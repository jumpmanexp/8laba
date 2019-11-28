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
        include("showGroups.php")    
    ?>

<form action="updateGroups.php" method="post">
        <label>ID групи, яку змінюємо</label><input name="group_id" type="text"><br>
        <label>Нова назва</label><input name="group_name" type="text"><br>
        <label>Нове ID користувача</label><input name="user_id" type="text"><br>
        <label>Новий тип</label><input name="group_type" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>