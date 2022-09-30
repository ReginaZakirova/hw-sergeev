<?php
include('header.php');
?>
    <div class="anketa">
        Форма рабочая формирует сообщение и выводит на экране отправленное сообщение.
        Скрипты и стили сделал в одном файле чтобы было меньше не нужных файлов.
    </div>
    <div class="successmsg" id="success"></div>
    <div class="form_container">
        <form name="add_message" action="form.php" method="get">

            <div class="field">
                <div class="label" >Имя пользователя</div>
                <input type="text" name="name" required text="" placeholder="Введите свое имя">
            </div>

            <div class="field">
                <div class="label">E-mail</div>
                <input type="email" name="email" text="">
            </div>

            <div class="field">
                <div class="label">Что выбираешь?</div>
                <select name="select" id="lang">
                    <option value="html">HTML</option>
                    <option value="php">PHP</option>
                    <option value="js">JS</option>
                    <option value="bitrix">BITRIX</option>
                </select>
            </div>

            <div class="field">
                <fieldset>
                    <legend>Хочу быть...</legend>
                    <input name="radio_1" value='jun' type="radio"> Junior PHP developer<br>
                    <input name="radio_1" value='midl'  type="radio"> Middle PHP developer<br>
                    <input name="radio_1" value='front'  type="radio"> Front-end разработчик
                </fieldset>
            </div>

            <div class="field">
                <fieldset>
                    <legend>Мои навыки - </legend>
                    <input name='check' value="god" type="checkbox">Бог программирования<br>
                    <input name='check' value="guru" type="checkbox">Гуру программирования<br>
                    <input name='check' value="teach" type="checkbox"> Я еще учусь
                </fieldset>
            </div>

            <div class="field timechange">
                <div class="label">Во сколько мне удобно приходить на занятия</div>
                <select name="selecthour" id="hour">
                </select>часов
                <select name="selectmin" id="min">
                </select>минут
                <select name="selectsec" id="sec">
                </select>секунд

            </div>
            <div class="field">
                <div class="label">Мои пожелания и комментарии по курсам</div>
                <textarea name="" id="" cols="40" rows="5"></textarea>
            </div>
            <div class="field"><input class="subform" type="submit"></div>
        </form>
    </div>
    <br>
    <a class="home" href="index.php">Назад на главную</a>
</div>
</body>
</html>
<script charset="utf-8">
    function $_GET(key) {
        var get = decodeURI(window.location.search);
        get = get.match(new RegExp(key + '=([^&=]+)'));
        return get ? get[1] : false;
    }

    window.addEventListener("load", function(event) {

        var message='';
        if($_GET('name')){
            message+='Привет, меня зовут '+$_GET('name')+'. ';
        }
        if($_GET('name')){
            message+='Моя электронная почта - '+$_GET('email')+'. ';
        }
        if($_GET('select')){
            var msg=$_GET('select');
            message+='Я выбираю - '+msg+'. ';
        }
        if($_GET('radio_1')){
            var msg='';
            if($_GET('radio_1')=='jun'){
                msg='Junior PHP developer. ';
            }else if($_GET('radio_1')=='midl'){
                msg='Middle PHP developer. ';
            }else{
                msg='Front-end разработчик. ';
            }
            message+='Хочу быть - '+msg;
        }
        if($_GET('check')){
            var msg='';
            if($_GET('check')=='god'){
                msg='Бог программирования. ';
            }else if($_GET('check')=='guru'){
                msg='Гуру программирования. ';

            }else if($_GET('check')=='teach'){
                msg='еще учусь. ';

            }
            message+='Мои навыки в программировании - '+msg;
        }

        //Добавление сообщения
        if(message){
            console.log(message);
            var html='<div class="anketa">'+message+'</div>'
            success.insertAdjacentHTML('afterbegin', html);
        }
        for(var i=1;i<=24;i++){
            hours='<option value="html">'+i+'</option>';
            hour.insertAdjacentHTML('afterbegin', hours);
        }
        for(var i=1;i<=60;i++){
            if(i%5==0){
                hours='<option value="html">'+i+'</option>';
                min.insertAdjacentHTML('afterbegin', hours);
            }
        }
        for(var i=1;i<=60;i++){
            if(i%5==0) {
                hours = '<option value="html">' + i + '</option>';
                sec.insertAdjacentHTML('afterbegin', hours);
            }
        }
    });
</script>
<style>
    body{
        padding: 0px;
        margin: 0px;
    }
    .subform{
        padding: 7px;
        border: 1px solid #0ac1ff;
        background-color: antiquewhite;
        border-radius: 5px;
        width: 220px;
        cursor: pointer;
        box-shadow: 0px 0px 5px;
    }
    .label{
        width: 150px;
        display: inline-block;
        vertical-align: middle;

    }
    .field{
        margin-bottom: 10px;
    }
    select{
        vertical-align: top;
    }
    fieldset,textarea{
        width: 100%;
        box-sizing: border-box;
    }
    .form_container{
        max-width: 500px;
        background-color: antiquewhite;
        padding: 15px;
        margin: 0 auto;
        border-radius: 10px;
    }
    input[type=text],input[type=email]{
        padding: 7px;
        border: 1px solid #0ac1ff;
        border-radius: 5px;
        width: 320px;

    }
    .timechange select, .timechange option{
        width: 40px;
        padding: 0px;
        border: none;
        border-radius: 5px;
        background-color: #faebd7;
        vertical-align: middle;

    }
    #lang{
        padding: 7px;
        border: 1px solid #0ac1ff;
        border-radius: 5px;
        width: 100px;
    }
    .anketa{
        background-color: #fff419;
        font-size: 20px;
        max-width: 500px;
        margin: 0 auto;
        padding: 15px;
        margin: 0 auto;
        border-radius: 10px;
        margin-bottom: 10px;
    }
</style>