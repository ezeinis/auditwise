var is_career_open=0;
var is_search_open=0;

//set who we are label over main home banner
$(document).ready(function(){
    $('input[type="checkbox"]').prop('checked', false);
});

//open main menu
$('#drawer_trigger>span').on("click",function(){
    $('input[type="checkbox"]').prop('checked', true);
});

$('#drawer_trigger>img').on("click",function(){
    $('input[type="checkbox"]').prop('checked', true);
});

//close main menu
$('.close_drawer').on("click",function(){
    if(is_career_open){
        $('#career_drawer').css('right', '-'+percentage+'%');
        setTimeout(function(){$('input[type="checkbox"]').prop('checked', false);},250);
        is_career_open=0;
        $('.career_menu_link').removeClass('active');
    }else{
        $('input[type="checkbox"]').prop('checked', false);
    }
});

// js for career drawer
$('.career_menu_link').on("click",function(){
    var width = $( window ).width();
    percentage = 0;
    if(width>=992){
        percentage = 25;
    }else if(width<992 && width>=550){
        percentage = 35;
    }else{
        percentage = 45;
    }

    if(is_career_open==0){
        $('.career_menu_link').addClass('active');
        $('#career_drawer').css('right', percentage+'%');
        is_career_open=1;
    }else{
        $('.career_menu_link').removeClass('active');
        $('#career_drawer').css('right', '-'+percentage+'%');
        is_career_open=0;
    }
});
$(window).resize(function(){
    var width=$(window).width();
    if(width<992 && width>=550){
        $('#career_drawer').css('right', '-35%');
    }else if(width<550){
        $('#career_drawer').css('right', '-45%');
    }
    var iframe = document.getElementById('google_map');
    iframe.src = iframe.src;
});


//open search on click
$('#header_search>img').on("click",function(){
    if(is_search_open==0){
        // $('#search_input').css('visibility','visible');
        // $('#search_input').focus();
        $('#hidden_search_container').css('opacity','1');
        $('#hidden_search_container').css('max-height','300px');
        $('#hidden_search_container').css('padding-top','5px');
        $('#hidden_search_container').css('padding-bottom','5px');
        is_search_open=1;
    }else{
        // $('#search_input').css('visibility','hidden');
        $('#hidden_search_container').css('opacity','0');
        $('#hidden_search_container').css('max-height','0px');
        $('#hidden_search_container').css('padding','0px');
        is_search_open=0;
    }
});
