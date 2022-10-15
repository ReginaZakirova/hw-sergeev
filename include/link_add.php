<?php
session_start();
$new_url='index.php';
if($_GET['link']){
    if($_GET['link']=='fact'){
        $new_url = 'https://fact.digital/';
    }
    if($_GET['link']=='bitrix'){
        $new_url = 'https://www.1c-bitrix.ru/';
    }
}
$_SESSION['LAST_LINK']=$new_url;
header('Location: '.$new_url);
?>
