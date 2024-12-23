<form action='' method='POST'>
<input type='text' name='path' placeholder='укажите путь'>
<input type='submit'>
</form>

<script src="jquery-3.7.1.min.js"></script>
<?php
if(!empty($_POST["path"])){

	$path = $_POST["path"];
    $files = array_diff(scandir($path), array('.', '..'));
    foreach($files as $row){
	echo $row."<button class='button1'>изменить</button><br>";
    echo "<div id='name_form' hidden>";
    echo "<form action='' method='POST'>";
    echo "<input type='text' name='rename1' id='rename' value='$row'>";
    echo "<input type='text' name='rename1' id='rename2' placeholder='новое имя'>";
    echo "<input type='submit' name='change' id='submit' value='переименовать'>";
    echo "<input type='text' name='delete1' id='del1' placeholder='имя для удаления'>";
    echo "<button id='delete' name='del'>удалить</button>";
    echo "</form>";
    echo "</div>";
    
    if(isset($_GET['change'])){
        $old_name = $_POST["rename"];
        $new_name = $_POST["rename2"];
        rename($old_name, $new_name);
    }

    if(isset($_GET['del'])){
        unlink($_POST['delete1']);
    }
}
?>
<form enctype="multipart/form-data" method="post">
   <p><input type="file" name="f">
   <input type="submit" value="Отправить"></p>
  </form>
<?php 
}
?>

<script>
    $(".button1").on("click", function(){
        $("#name_form").show();
    });
    </script>