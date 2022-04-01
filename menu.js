$(document).ready(function(){
$("#ham").on('click',function(){
    $(".ham-menu-item").show(200);
    $("#ham").hide(1);
    $("#close").show(1);
});
$("#close").on('click',function(){
    $("#close").hide(1);
    $("#ham").show(1);
    $(".ham-menu-item").hide(200);
});

$(".admin").on('click',function(){
    $(".ham-menu-item").hide(200);
    $("#student").hide(1);
    $("#admin").show(1);
});
$(".developer").on('click',function(){
    $(".ham-menu-item").hide(200);
});
$(".feedback").on('click',function(){
    $(".ham-menu-item").hide(200);
});
    
});