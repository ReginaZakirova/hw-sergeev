<?php
echo "Слайд 13, Задание 1".'<br>';
function big($a,$b){
    if($a>$b){
        return $a;
    }else{
        return $b;
    }
}
echo big(10,15);

echo "<br><br>Слайд 13, Задание 2".'<br>';
function gipotenuza($a,$b){
    echo "гипотенуза = ".$c = sqrt(pow($a,2)+pow($b,2)).'<br>';;
}
gipotenuza(10,6);

echo "<br><br>Слайд 13, Задание 3".'<br>';
function x10($x = 10){
    while ($x<1000000){
        $x = $x*10;
    }
    echo $x." Вы достигли предела";
}
x10();

echo "<br><br>Слайд 14, Задание 4".'<br>';
function randomArray($size){
    $array=Array();
    for($i=1;$i<=$size;$i++){
        $array[$i] = mt_rand(0,10000);
    }
    return $array;
}
$array = randomArray(20);
print_r($array);

echo "<br><br>Слайд 14, Задание 5".'<br>';
function sredneeArray($array){
    $size = count($array);
    $sum = 0;
    echo $size;
    for($i=0;$i<=$size;$i++){
        $sum = $sum+$array[$i];
    }
    return $sum/$size;
}
echo sredneeArray($array);

echo "<br><br>Слайд 14, Задание 6".'<br>';

function countWord($stroka){
    $countWord = count(explode(" ",$stroka));
    echo "Количество слов в строке - $stroka = ".$countWord;
}
countWord("Тестовая строка для проверки функции подсчета слов в строке");

echo "<br><br>Слайд 14, Задание 7".'<br>';
function fibo($n){
    $f1=0;
    $f2=1;
    $n -=2;
    for($i=0;$i<$n;$i++){
        $fn = $f2+$f1;
        $f1 = $f2;
        $f2 = $fn;
    }
    return $fn;
}
echo fibo(17);

echo "<br><br>Слайд 15, Задание 1".'<br>';
function randNum($array){
    $count = count($array);
    for($i=0;$i<$count;$i++){
        $array[$i] = mt_rand(1000,9999);
    }
    return $array;
}
$arrNum = [[],[],[],[],[],[],[],[]];
print_r(randNum($arrNum));

echo "<br><br>Слайд 15, Задание 2".'<br>';
function countWords($stroka){
    return count(explode(', ',$stroka));
}
echo countWord('HTML, CSS, PHP, BITRIX');


echo "<br><br>Слайд 15, Задание 3".'<br>';
function expandWords($stroka){
    $count = mb_strlen($stroka);
    for ($i = $count; $i>=0; $i--){
        echo $stroka[$i];
    }
}
expandWords('HTML, CSS, PHP, BITRIX');

echo "<br><br>Слайд 15, Задание 4".'<br>';
function lengthWords($stroka){
    echo $count = mb_strlen($stroka);
}
lengthWords('HTML, CSS, PHP, BITRIX');

echo "<br><br>Слайд 15, Задание 5".'<br>';
function brWords($stroka){
    $count = mb_strlen($stroka);
    for ($i = 0; $i<$count; $i++){
        echo $stroka[$i].'<br>';
    }
}
brWords('HTML, CSS, PHP, BITRIX');

$str = htmlentities(file_get_contents("../index.php"));
echo $str;
?>