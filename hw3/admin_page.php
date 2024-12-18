<!DOCTYPE html>
<html lang='ru'>
    <head>
        <title>Страница администратора</title>
        <meta name="description" content="Сайт печатного издательства">
        <meta name="keywords" content="типография, книги, печать, издательство книг">
        <meta name="viewport" content="width=976, maximum-scale=4, user-scalable=yes">
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
    </head>
<body>
<div class = 'container'>
<div class = 'content'>
<?php
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';
    $db_name = 'publish';
    $conn = mysqli_connect($host, $user, $pass, $db_name);

    $sql = "SELECT * FROM `publishers`";
    $result = mysqli_query($conn, $sql);
    while($array = mysqli_fetch_array($result)){
        echo "Имя: ".$array['name']." | Фамилия: ".$array['secondname']." | Почта: ".$array['login']."<br>"."Текст: ".$array['text']."<hr>";
    }
?>
    <div class='header'>
        <div class='logo'>
</div>
</div>
<div class='content'>
</div>
<div class='footer'>
</div>
</body>
</html>