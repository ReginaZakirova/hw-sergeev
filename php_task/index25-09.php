<?php
$array = [
    'fruits' => ['apple'=>'яблоко', 'pineapple' =>'ананас', 'banana' => 'банан'],
    'vagetables' => ['tomato' =>'томат', 'cucumber'=>'огурец'],
    'drinks' => ['water'=>'вода', 'tea'=>'чай', 'coffee'=>'кофе'],
];
foreach ($array as $key=>$value) {
    if($key=='fruits'){
        foreach ($value as $key=>$item){
          echo $item.' ';
        }
    }
}
//Задание 1
echo "<br>";
$array2 = [50,45,40,35,30];
$result=0;
foreach ($array2 as $item) {
    $result = $result+$item;
}
echo $result;

//Задание 2
echo "<br>";
for($i=0;$i<=10;$i++){
    $array3[] = mt_rand(0,100);
    echo $array3[$i].'<br>';
}
echo "<br>";
for($i=0;$i<=10;$i++){
    echo $array3[10-$i].'<br>';
}
echo "<br>";
echo "<br>";

//Задание 3
$array4=array();
for($i=0;$i<=10;$i++){
    $array4[] = mt_rand(0,11).'.png';
}
  echo '<img src="images/'.$array4[mt_rand(0,10)].'" alt="">';

//Задание 4
$array4=array();
echo "<br>";
echo "<br>";
$N=10;
for($i=0;$i<=$N;$i++){
    $array4[] = mt_rand(-100,100);
}
$minplus=0;
$maxminus=0;
for($i=0;$i<=$N;$i++){
    if( $minplus<$array4[$i] && $array4[$i]>0){
        $minplus=$array4[$i];
    }
    if($maxminus>$array4[$i] && $array4[$i]<0){
        $maxminus=$array4[$i];
    }
}
echo "MAX отрицательное: ".$maxminus;
echo "<br>";
echo "MIN положительное: ".$minplus;
echo "<br>";
echo "<br>";


//Задание 5
$arrayUch=['petrov'=>['matematika'=>5,'fizika'=>3,'himia'=>3,'iform'=>4],
            'sidorov'=>['matematika'=>3,'fizika'=>3,'himia'=>2,'iform'=>5],
         'ivanov'=>['matematika'=>2,'fizika'=>5,'himia'=>4,'iform'=>4]
];
foreach ($arrayUch as $key=>$item){
    foreach ($item as $item_key=>$value){
        if ($item_key=='matematika'){
            $mat = $mat+$value;
        }
        if ($item_key=='fizika'){
            $fiz = $fiz+$value;
        }
        if ($item_key=='himia'){
            $himia = $himia+$value;
        }
        if ($item_key=='iform'){
            $infor = $infor+$value;
        }
    }
}
echo "Средняя по матиматике - ".$mat/count($arrayUch).'<br>';
echo "Средняя по физике - ".$fiz/count($arrayUch).'<br>';
echo "Средняя по химии - ".$himia/count($arrayUch).'<br>';
echo "Средняя по информатике - ".$infor/count($arrayUch).'<br>';


//Задание 6

$arrayUch=['kuba'=>['june'=>35,'jule'=>23,'may'=>23,'december'=>4],
    'trindidad'=>['june'=>33,'jule'=>23,'may'=>32,'december'=>5],
    'gaity'=>['june'=>33,'jule'=>23,'may'=>32,'december'=>6],
    'yamayka'=>['june'=>32,'jule'=>25,'may'=>24,'december'=>2]
];


$text='this id "phppp" privet';
$txt=strstr($text,'"');
$txt = substr($txt, 1);
$txst=strstr($txt,'"',true);
echo $txst;

?>