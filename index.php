<?php
#Комментарии
#в инструментах разработчика гугла не виден php код
#т.е., получается, что php дает возможность использования переменных при верстке
#будь то ссылки на сайты, ресурсы и пр. Это интересно
#Присвоение переменной значения
#Знак $передИменемПеременной = значениеПеременной;
$nickname = "Shagone";
$balance = 0;
$addBalance = 10;
$addBalance1 = 34;
$balance = $addBalance + $addBalance1;
#echo это вывод, типо CWL 
echo $balance;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <meta name = "discription" content="Cinema site - портал вашего досуга">
    <meta name = "keywords" content="фильмы, сериалы, онлайн портал">
    <link rel = "stylesheet" href ="assets/css/style.css">
</head>
<body>
<!--В разметке html свой способ комментирования-->
<!--ниже 1 способ вывода фрагмента php кода в блоке html-->
<div>Привет, <?php echo $nickname;?></div>

<?php
#но в блоке php работает решетка
#тут второй способ вывода фрагмента php в блоке html
#echo "<div>".$balance."</dib>"
?>
<form method = "post" action="#" id = "search_form">
                    <input type = "search" name = "search_field" placeholder="Ваш запрос..."/>
                    <input type = "submit" class = "btn" value = "Найти"/>
                </form>
</body>
</html>

<?php
#Const
#define(name, value);
#define("DBNAME", "CinemaSite");
#Простое использование констант
#echo DBNAME;
$svetofor = "green";
$boolTr = true;
$boolFls = false;
if($svetofor == "green"){
    $boolTr;
}elseif($svetofor == "red"){
    $boolTr = false;
}else{
    $boolTr = false;
}
if($boolTr){
    echo "Перехожу"."<br>";
}else{
    echo "Ждем зеленый"."<br>";
}

?>

<?php
switch($svetofor){
    case 'green':
        echo $svetofor."<br>";
        break;
    case 'yellow':
        echo $svetofor."<br>";
        break;
    case 'red':
        echo $svetofor."<br>";
        break;   
    default:
        echo "error"."<br>";
        break;     
    }
    
   $item = 0;
    while($item <= 5){
    $item++;
    echo $item."<br>";
    
}
?>
<?php 
$item = 0;
do {
echo $item."<br>";
$item++;
}while($item <=10);

$item = 0;

$arr = array(1,2,3,4,5);
foreach($arr as $value){
    echo $value."<br>";
}
for($i=0; $i<count($arr);$i++){
    echo $arr[$i]."<br>";
}

$arrayTwo = array(1,2,3,4,5,6,7,8,9);
unset($arrayTwo[4]);
array_push($arrayTwo, "apple", "apple");
$arrayTwo = array_unique($arrayTwo);

foreach($arrayTwo as $value){
    echo $value."<br>";
}

?>

