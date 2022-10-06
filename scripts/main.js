window.addEventListener("load", function(event) {
    document.querySelector("#open_container").onclick = function(){
        if(document.getElementsByClassName('open')[0].style.display=='none'){
            document.getElementsByClassName('open')[0].style.display = "block";
        }
        else
            document.getElementsByClassName('open')[0].style.display = "none";

    }
    document.querySelector("#login").onclick = function(){
        if(document.getElementsByClassName('popup')[0].style.display=='none'){
            document.getElementsByClassName('popup')[0].style.display = "block";
        }
        else
            document.getElementsByClassName('popup')[0].style.display = "none";
    }
    document.querySelector(".popup_vid").onclick = function(){
        if(document.getElementsByClassName('popup')[0].style.display=='none'){
            document.getElementsByClassName('popup')[0].style.display = "block";
        }
        else
            document.getElementsByClassName('popup')[0].style.display = "none";
    }
});
