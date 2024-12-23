<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'messages');

echo "<form method='POST' action=''>";
echo "<input type='text' minlength='10' placeholder='Имя' name='name'>";
echo "<input type='email' placeholder='Почта' name='mail'>";
echo "<input type='text' minlength='10' placeholder='Сообщение' name='text'>";
echo "<input type='submit' name='button' value='подтвердить'>";
echo "</form>";

    if(!empty($_POST["name"]) && !empty($_POST["mail"]) && !empty($_POST["text"])){
        $name=$_POST["name"];
        $mail=$_POST["mail"];
        $text=$_POST["text"];
        $browser=$_SERVER["HTTP_USER_AGENT"];
        $ip=$_SERVER["REMOTE_ADDR"];

        $result1 = mysqli_query($conn, "INSERT INTO `message`(`name`, `mail`, `text`, `ip`, `browser`) VALUES ('$name', '$mail', '$text', '$ip', '$browser')");
    }
        $result2 = mysqli_query($conn, "SELECT `name`, `mail`, `text` FROM `message`");
while($row = mysqli_fetch_array($result2)){
    echo $row["name"]." | ".$row["mail"]." | ".$row["text"]."<br>";
    }
?>