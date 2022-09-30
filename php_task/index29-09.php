<?php
echo "Слайд 19, Задание 1".'<br>';
$fact="fact";
echo str_replace('f','F',$fact);

echo '<br>';
echo '<br>';
echo "Слайд 19, Задание 2".'<br>';

$fio = "Sergeev Vladimir Alekseevich";
$ar=explode(' ',$fio);
$i=0;
echo $ar[1].' ';
echo $ar[0];

echo '<br>';
echo '<br>';
echo "Задание 3".'<br>';

$mir="Привет, мир!";
str_replace('и','и',$mir,$count);
echo $count;

echo '<br>';
echo '<br>';
echo "Слайд 19, Задание 4".'<br>';

$stroka = "html css php";
$ar=explode(' ',$stroka);
echo $ar[0].'<br>'.$ar[1].'<br>'.$ar[2].'<br>';

echo '<br>';
echo '<br>';
echo "Слайд 19, Задание 5".'<br>';

$stroka = 'link.php';
if(mb_substr($stroka,-4,4)=='.php'){
    echo 'Да';
}else{
    echo 'Нет';
};

echo '<br>';
echo '<br>';
echo "Слайд 20, Задание 1".'<br>';

$stroka = "privet mir";
if(strlen($stroka)<5){
    echo $stroka;
}else{
    echo mb_substr($stroka,0,5)."...";
}

echo '<br>';
echo '<br>';
echo "Слайд 20, Задание 2".'<br>';


$stroka="Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.";
$stroka = str_replace('а','1',$stroka);
$stroka = str_replace('б','2',$stroka);
$stroka = str_replace('в','3',$stroka);
echo $stroka;

echo '<br>';
echo '<br>';
echo "Слайд 20, Задание 3".'<br>';

$stroka="abc abc abc";
echo strripos($stroka,'b');

echo '<br>';
echo '<br>';
echo "Слайд 20, Задание 4".'<br>';

$stroka = "html css php";
$ar=explode(' ',$stroka);
print_r($ar);


echo '<br>';
echo '<br>';
echo "Слайд 20, Задание 5".'<br>';

$date1 = strtotime("31-01-2016");
$date2 = strtotime("01-02-2015");
$days = ($date1 - $date2) / (60 * 60 * 24);
echo ($days);



?>