<form action ="" method="POST">
    <input type="text" placeholder="Имя" name="name">
    <input type="text" placeholder="Почта" name="email">
    <input type="textarea" placeholder="Введите сообщение" name="text">
    <input type="submit" value="отправить">
</form>

<?php
if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["text"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $text=$_POST["text"];
    $date=date("Y.m.d H:i:s");
    $file = "data.txt";

    if(file_exists($file)){
    $f = fopen("data.txt","a");
    $string = "Имя пользователя: ".$name." | Почта: ".$email." | Сообщение: ".$text." | Время: ".$date."\n";
    fwrite($f, $string);
    fclose($f);
}else { 
    $f = fopen("data.txt","a");
    $string = "Имя пользователя: ".$name." | Почта: ".$email." | Сообщение: ".$text." | Время: ".$date."\n";
    fwrite($f, $string);
    fclose($f);
}
}

$file = "data.txt";
if(file_exists($file)){
$f = fopen($file, "r");
$data = "";
while(!feof($f)){
$data.=fread($f, 1024);
}
fclose($f);

$filearray = file("data.txt");
$array_count=count($filearray);
for($i=$array_count-1;$i>=0;$i--){
    echo $filearray[$i];
    echo "<br>";
}
}else{
    echo "файла $file не существует";
}
?>