<?php
session_start();
//include 'database.php';// - создание базы данных, таблицы Users и добавление новых пользователей
include "include/main.php"; // авторизация и прочие функции
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="scripts/main.js"></script>
    <link rel="stylesheet" href="style/test.css">
    <title>Домашнее задание</title>
</head>
<body style="background-color: <?=select_color($_SESSION["ID_COLOR"])?> !important">
<div class="container">
    <div class="header">
        <div class="menu">
            <div class="punkt_menu">
                <span><a href="index.php">Главная</a></span>
            </div>
            <div class="punkt_menu">
                <span>Меню заданий</span>
                <div class="menu_container">
                    <a href="mendeleev.php">1. Таблица Менделеева</a>
                </div>
                <div class="menu_container">
                    <a href="form.php">2. Форма</a>
                </div>
                <div class="menu_container">
                    <a href="flex.php">3. Шары FLEXBOX/GRID</a>
                </div>
                <?
                $files = scandir('php_task');
                $i=0;
                foreach ($files as $item){
                if($i>1){?>
                    <div class="menu_container">
                        <a href="php_task/<?=$item?>"><?=$item?></a>
                    </div>
                <?}
                $i++;
                }
                ?>
            </div>
            <div class="punkt_menu">
                <span><a target="_blank" href="https://fact.digital/">ФАКТ</a></span>
            </div>
            <div class="punkt_menu" id="login">
                <span>
                <?php if(isset($_SESSION['LOGIN'])) echo $_SESSION['LOGIN']; else echo "Войти";?>
                </span>
            </div>
            <div class="popup">
                <div class="popup_container">
                    <form method="POST" id="login_form">
                        <input type="hidden" name="FORM_LOGIN" value="load">
                        <?php if(isset($_SESSION['LOGIN'])){?>
                            <a href="include/login.php?logout=1">Выйти</a>
                        <?php }else{?>
                            <h3>Войти(admin/admin)</h3>
                            <input type="text" name='name' id = 'login' placeholder="Name">
                            <input type="password" name='password' id = 'password' placeholder="Password"><br>
                            <input type="submit" value="Войти">
                            <input type="submit" name = 'reg' id = 'reg' value="Регистрация">
                        <?php }?>
                        <div class="error_cnt">
                            <div class="error_box"></div>
                        </div>
                    </form>
                    <form method="POST" id="reg_form">
                            <h3>Регистрация</h3>
                            <input type="text" name='name' id = 'loginReg' placeholder="Name">
                            <input type="password" name='password' id = 'passwordReg' placeholder="Password"><br>
                            <input type="submit" value="Регистрация">
                        <div class="error_cnt">
                            <div class="error_box"></div>
                        </div>
                    </form>
                </div>
                <div class="popup_vid"></div>
            </div>
        </div>
    </div>
    <div class="content">