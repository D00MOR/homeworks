<!DOCTYPE html>
<html lang='ru'>
    <head>
        <title>Книжное издательство "Печатник"</title>
        <meta name="description" content="Сайт печатного издательства">
        <meta name="keywords" content="типография, книги, печать, издательство книг">
        <meta name="viewport" content="width=976, maximum-scale=4, user-scalable=yes">
        <link rel="stylesheet" href="style2.css">
        <meta charset="utf-8">
    </head>
<body>
<div class = 'container'>
<div class = 'content'>
<?php
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';
    $db_name = 'login';
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
		header('refresh: 3; main.php');
	}
}else{
	echo "Введен неправильный логин или пароль. Попробуйте снова.";
	header('refresh: 3; login.php');
}
?>
    <div class='header'>
        <div class='logo'>
</div>
</div>
<div class='content'>
    <div class='form'>
<form method = 'post' action = ''>
<input type = 'text' placeholder = 'Имя' name = 'login'><br>
<input type = 'text' placeholder = 'Фамилия' name = 'login'><br>
<input type = 'text' placeholder = 'Email' name = 'login'><br>
<input type = 'text' placeholder = '' name = 'login'><br>
<input type = 'submit' value = 'войти'></form>
</div>
</div>
<div class='footer'>
</div>
</body>
</html>