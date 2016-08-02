var is_career_open=0;

$(document).ready(function(){
    $('input[type="checkbox"]').prop('checked', false);
    var who_we_are_height=$('#who_we_are_container').height();
    console.log(who_we_are_height);
    $('#who_we_are_container').css('bottom',-(who_we_are_height/2)+'px');
});

$('#drawer_trigger').on("click",function(){
    $('input[type="checkbox"]').prop('checked', true);
});

$('.close_drawer').on("click",function(){
    if(is_career_open){
        $('#career_drawer').css('right', '-25%');
        setTimeout(function(){$('input[type="checkbox"]').prop('checked', false);},250);
        is_career_open=0;
        $('.career_menu_link').removeClass('active');
    }else{
        $('input[type="checkbox"]').prop('checked', false);
    }
});

// js for career drawer
$('.career_menu_link').on("click",function(){
    if(is_career_open==0){
        $('.career_menu_link').addClass('active');
        $('#career_drawer').css('right', '25%');
        is_career_open=1;
    }else{
        $('.career_menu_link').removeClass('active');
        $('#career_drawer').css('right', '-25%');
        is_career_open=0;
    }
});
