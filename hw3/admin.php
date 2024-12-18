<html lang='ru'>
    <head>
        <title>Вход</title>
        <meta name="description" content="Сайт печатного издательства">
        <meta name="keywords" content="типография, книги, печать, издательство книг">
        <meta name="viewport" content="width=976, maximum-scale=4, user-scalable=yes">
        <link rel="stylesheet" href="style1.css">
        <meta charset="utf-8">
    </head>
<body>
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

    $login = $_POST['login'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)){
	foreach($result as $row){
		$login = $row["login"];
		$pass = $row["pass"];
		echo "Добро пожаловать<br>";
		header('refresh: 3; admin_page.php');
	}
}
?>
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
    <a href='publishing.php' name='publishing'>ПУБЛИКАЦИЯ</a>
</div>

<div class='background6'>
<div class='content_p'>
    <div class='form'>
<form method = 'post' action = ''>
<input type = 'text' placeholder = 'Email' name = 'login'><br>
<input type = 'text' placeholder = 'Пароль' name = 'pass'><br>
<input type = 'submit' value = 'войти'></form>
</div>
</div>
</div>
<div class='footer'>
</div>
</body>
</html>