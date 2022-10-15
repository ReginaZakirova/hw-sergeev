<?php

function password($a=1){
    if($a=0){
        return 0;
    }
    $users = array(
        'admin'=>base64_encode('admin'),
        'vasia'=>base64_encode('vasia'),
        'dima'=>base64_encode('dima')
    );
    if($_POST && ($_POST['password']=='' || $_POST['name']=='')){
        return 3;
    }
    if($_POST['password']!='' && $_POST['FORM_LOGIN']=='load'){
        $password=base64_encode($_POST['password']);
        if($password==$users[$_POST['name']]){
            $_SESSION['USER_LOGIN']=$_POST['name'];
            return 1;
        }else{
            return 0;
        }
    }else{
        return 2;
    }
}

function daysAll(){
    $date1 = strtotime(date('d-m-Y'));
    $date2 = strtotime("29-06-1993");
    return $days = floor(($date1 - $date2) / (60 * 60 * 24));
}
function perekras($stroka){
    $arr = explode(' ',$stroka);
    $i=0;
    foreach ($arr as $value){
        if($i%2==0){
            $str = $str."<span class='green'>".$arr[$i]."</span> ";
        }else{
            $str = $str."<span class='red'>".$arr[$i]."</span> ";
        }
        $i++;
    }
    return $str;
}

function select_color($id){
    if($id==1){
        echo "#3f79db54";
    }elseif($id==2){
        echo  "#00800042";
    }elseif($id==3){
        echo  "#ffff0069";
    }
}
if($_GET['color']){
    $_SESSION['ID_COLOR'] = $_GET['color'];
}
if($_GET['destroy']==1){
    session_start();
    password(0);
    session_destroy();
    header('Location: ../index.php');
}

?>