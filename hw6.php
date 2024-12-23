<form action='' method='POST'>
<input type='text' name='path' placeholder='укажите путь'>
<input type='submit'>
</form>

<?php
if(!empty($_POST["path"])){

	$path = $_POST["path"];
    $files = array_diff(scandir($path), array('.', '..'));
    $count = count($files);
    for($i=2; $i<$count+2; $i++){
	echo $files[$i]."<br>";
    }
    echo "<button class='button1'>изменить</button><br>";
    echo "<form action='' method='POST'>";
    echo "<input type='text' name='rename1' placeholder='старое имя' value='$path/'>";
    echo "<input type='text' name='rename2' placeholder='новое имя' value='$path/'>";
    echo "<input type='submit' name='change' id='submit' value='переименовать'>";
    echo "</form>";
    echo "<form action='' method='POST'>";
    echo "<input type='text' name='delete1' id='del1' placeholder='имя для удаления' value='$path/'>";
    echo "<input type='submit' id='delete' name='del' value='удалить'>";
    echo "</form>";

echo "<form enctype='multipart/form-data' method='POST' action=''>";
echo "<p><input type='file' name='upload'>";
echo "<input type='submit' name='ok' value='Отправить'></p>";
echo "</form>";

if(isset($_POST['ok'])){
    move_uploaded_file($_POST['upload'], $path.'/');
    }
}
    
    if(isset($_POST['change'])){
        $old_name = $_POST["rename1"];
        $new_name = $_POST["rename2"];
        rename($old_name, $new_name);
    }

    if(isset($_POST['del'])){
        $file_del=$_POST['delete1'];
        unlink($file_del);
    }
?>