$('#drawer_trigger').on("click",function(){
    $('input[type="checkbox"]').prop('checked', true);
});

$('.close_drawer').on("click",function(){
    $('input[type="checkbox"]').prop('checked', false);
});
