<?php
if(!empty($_POST["date"]) && !empty($_POST["date2"])){
    $date=$_POST["date"];
    $date2=$_POST["date2"];
}else{
    $date="";
    $date2="";
        echo "заполните форму";
    }
?>

<form action="" method="POST">
    <input type="date" name="date" value="">
    <hr>
    <input type="date" name="date2" value=""><br>
    <input type="submit">
</form>

<?php
$first = strtotime($date);
$second = strtotime($date2);
$difference = ($second-$first)/60/60/24;
echo "разница в днях: ".$difference."<br>";
echo "разница в минутах: ".$difference*24*60;
?>
