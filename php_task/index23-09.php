<?php

echo 'Слайд 19, Задание 2<br>';
$i=1;
for($i==1;$i<=50;$i++){

    if($i % 3 == 0 && $i % 5 == 0){
        echo "<div class='element50 kursiv'><b>".$i." номер элемента</b></div>";
    }elseif($i % 3 == 0){
        echo "<div class='element50 kursiv'>".$i." номер элемента</div>";
    }else
    {
        echo "<div class='element50'>".$i." номер элемента</div>";
    }
}

echo '<br>Слайд 19, Задание 3<br>';
$a=3;
$b=5;
$pi=1;
$rez=0;
$rez = 1 - 1 / $a + 1 / $b;
$slagaemie=3;
do{
    $slagaemie+=2;
    $a = $a + 4;
    $b = $b + 4;
    $rez = $rez - 1 / $a + 1 / $b;
    //echo round(4*$rez, 2) . ' PI<br>';
}while(3.14!=round(4*$rez,2));
echo "Всего слагаемых для получения числа Pi с точность 0.01: ".$slagaemie;

echo '<br><br>Слайд 19, Задание 4<br>';
$sum=0;
$a=1;
$b=1;
$count=0;
while ($sum<=10){
    $sum=$sum+$b/$a;
    $a++;
    $b=$b+3;
    $count++;
}
echo 'Минимальное количество элементов: '.$count.'<br>';

echo '<br>Слайд 20, Задание 1<br>';
$K=246826621;
echo "Входное число K -".$K;
$sum = 0;
while ($K > 0) {
    $cif = $K % 10;
    if($cif%2==0){
        $sum = $sum+$cif;
    }
    $K = floor($K / 10);
}
echo "<br>Сумма всех четных цифр числа К - ".$sum.'<br>';

echo '<br>Слайд 20, Задание 2,3<br>';

$K=2468621;
$arr = array();
while ($K > 0) {
    $arr[] = $K % 10;
    $K = floor($K / 10);
}
sort($arr);
echo "<br>В порядке неубывания -";
foreach ($arr as $num){
    echo $num;
}
rsort($arr);
echo "<br>В порядке невозрастания -";
foreach ($arr as $num){
    echo $num;
}


echo '<br><br>Слайд 21, Задание 1<br>';
for($i=5; $i <=13; $i++){
        echo $i, '<br>';
}

echo '<br>Слайд 21, Задание 2<br>';
$ost=0;
$num = 1000;
$i=0;
while ($num>50){
    $i++;
    $num=$num/2;
}
echo 'Минимальное количество делений: '.$i.'<br>Итоговое число:'.$num;

echo '<br><br>Слайд 21, Задание 3<br>';
$peremen=1;
$leng=10-$peremen;
    for($i=0; $i <=$leng; $i++){
        if($leng!=$i){
            echo $i.',';
        }else{
            echo $i;
        }
    }
?>
<style>
    .element50{
        background-color: #1486ff;
        padding: 10px;
        margin: 5px;
        display: inline-block;
    }
    .kursiv{
        font-style: italic;
    }
</style>
