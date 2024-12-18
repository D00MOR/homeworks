<html lang='ru'>
    <head>
        <title>Форма публикации</title>
        <meta name="description" content="Форма для заявки о публикации книги">
        <meta name="keywords" content="публикация, книги, печать, издательство книг">
        <meta name="viewport" content="width=976, maximum-scale=4, user-scalable=yes">
        <link rel="stylesheet" href="style1.css">
        <meta charset="utf-8">
    </head>
<body>
<div class='header'>
        <div class='logo'>
</div>
</div>
<div class='selector'>
    <a href='index.php' name='index'>ГЛАВНАЯ</a>
    <a href='published.php' name='published'>НАШИ КНИГИ</a>
    <a href='rules.php' name='rules'>ПРАВИЛА ПРИЕМА КНИГ</a>
    <a href='prices.php' name='prices'>ЦЕНЫ</a>
    <a href='contacts.php' name='contacts'>КОНТАКТЫ</a>
    <a href='admin.php' name='admin'>ВХОД</a>
</div>
<?php
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';
    $db_name = 'publish';
    $conn = mysqli_connect($host, $user, $pass, $db_name);

    if (!$conn) {
      echo 'error';
      exit;
    }

    if(!empty($_POST["name"]) && !empty($_POST["secondname"]) && !empty($_POST["login"]) && !empty($_POST["text"])){
        $name = $_POST['name'];
        $secondname = $_POST['secondname'];
        $login = $_POST['login'];
        $text = $_POST['text'];

        $sql = "INSERT INTO `publishers`(`name`, `secondname`, `login`, `text`) VALUES ('$name','$secondname','$login','$text')";
        $result = mysqli_query($conn, $sql);
    }
?>
<div class='background6'>
<div class='content_p'>
    <div class='form'>
<form method = 'post' action = ''>
<input type = 'text' placeholder = 'Имя' name = 'name'><br>
<input type = 'text' placeholder = 'Фамилия' name = 'secondname'><br>
<input type = 'text' placeholder = 'Email' name = 'login'><br>
<input type = 'text' placeholder = 'Синопсис произведения' name = 'text'><br>
<input type = 'submit' value = 'подтвердить'></form>
</div>
</div>
<div class='footer'>
</div>
</body>
</html>