<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="scripts/main.js"></script>
    <link rel="stylesheet" href="style/test.css">
    <?php include "include/main.php"?>
    <title>Домашнее задание</title>
</head>
<body>
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
                <span>Войти</span>
            </div>
            <div class="popup" style="<?if(password()==1) echo 'display: block'; else echo 'display: none';?>">
                <div class="popup_container">
                    <?php if(password()!=1){ ?>
                    <form method="POST">
                        <input type="hidden" name="FORM_LOGIN" value="load">
                        <h3>Войти(admin/admin)</h3>
                        <input type="text" name='name' placeholder="Name">
                        <input type="password" name='password' placeholder="Password"><br>
                        <input type="submit">
                    </form>
                    <?php  } ?>
                    <?php if(password()==0){?>
                        <div>Не верно введен логин</div>
                    <?php } ?>
                    <?php if(password()==3){?>
                        <div>Заполните пустые поля</div>
                    <?php } ?>

                   <?php if(password()==1){?>
                        <div>Привет, <?=$_POST['name']?></div>
                    <?php } ?>
                </div>
                <div class="popup_vid"></div>
            </div>
        </div>
    </div>
    <div class="content">