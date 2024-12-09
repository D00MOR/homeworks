<?php
if(!empty($_POST["date"]) && !empty($_POST["date2"])){
    $date=$_POST["date"];
    $date2=$_POST["date2"];
}else{

        echo "заполните форму";
    }
?>

<form action="" method="POST">
    <input type="date" name="date" value="<?php echo $date?>">
    <hr>
    <input type="date" name="date2" value="<?php echo $date2?>"><br>
    <input type="submit">
</form>

<?php
$first = strtotime($date);
$second = strtotime($date2);
$difference = ($second-$first)/60/60/24;
echo "разница в днях: ".$difference."<br>";
echo "разница в минутах: ".$difference*24*60;
?>
