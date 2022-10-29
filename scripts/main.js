 window.addEventListener("load", function(event) {
     document.querySelector("#open_container").onclick = function(){
         if(document.getElementsByClassName('open')[0].style.display=='none'){
             document.getElementsByClassName('open')[0].style.display = "block";
         }
         else
             document.getElementsByClassName('open')[0].style.display = "none";

     }

 });

$(document).ready(function() {

    //Открыть закрыть попап
    $('.popup').css('display','none');
    $("#login").on("click", function() {
        $('.popup').css('display','block');
    });
    $(".popup_vid").on("click", function() {
        $('.popup').css('display','none');
    });

    //Авторизация
    $("#login_form").on("submit", function() {
        var login = $('#login_form #login').val();
        var password = $('#login_form #password').val();
        $.ajax({
            url: '../include/login.php',
            contentType: "application/json;charset=UTF-8",
            method: 'get',
            dataType: 'json',
            data: ({login: login, password: password}),
            success: function (data) {
                //alert(data);
                console.log(data);
                if(data['error'] != undefined){
                    $('.error_box').empty();
                    $(data['error'].forEach((el)=>{
                        $('.error_box').css('display','block');
                        $('.error_box').append(el+'<br>');
                        console.log(el);
                    }));
                }else if(data['OK'] == 1){
                    $('#login_form').empty();
                    $('#login').empty();
                    $('#login_form').append('<span style="color: #000">Привет, '+data['LOGIN']+'</span><br>');
                    $('#login_form').append('<a href="include/login.php?logout=1">Выйти</a>');
                    $('#login').append('<span>'+data['LOGIN']+'</span>');
                }
            },
            error: function (){
                alert('Что то пошло не так... Перезагрузите страницу');
            }
        });
        return false;
    });

    //регистрация
    $("#reg").on("click", function() {
        $('#login_form').remove();
        $('#reg_form').css('display','block');
    });
    $("#reg_form").on("submit", function() {
        var login = $('#reg_form #loginReg').val();
        var password = $('#reg_form #passwordReg').val();
        $.ajax({
            url: '../include/registration.php',
            contentType: "application/json;charset=UTF-8",
            method: 'get',
            dataType: 'json',
            data: ({login: login, password: password}),
            success: function (data) {
                //alert(data);
                console.log(data);
                if(data['error'] != undefined){
                    $('.error_box').empty();
                    $(data['error'].forEach((el)=>{
                        $('.error_box').css('display','block');
                        $('.error_box').append(el+'<br>');
                    }));
                }else if(data['OK'] == 1){
                    $('#reg_form').empty();
                    $('#login').empty();
                    $('#reg_form').append('<span style="color: #000">Привет, '+data['LOGIN']+'</span><br>');
                    $('#reg_form').append('<a href="include/login.php?logout=1">Выйти</a>');
                    $('#login').append('<span>'+data['LOGIN']+'</span>');
                }
            },
            error: function (){
                alert('Что то пошло не так... Перезагрузите страницу');
            }
        });
        return false;
    });


});