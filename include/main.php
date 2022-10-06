<?php

function password(){
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
            return 1;
        }else{
            return 0;
        }
    }else{
        return 2;
    }

}
?>