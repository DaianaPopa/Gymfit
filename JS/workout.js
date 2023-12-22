$(document).ready(function(){

    $('.workout-day-title').click(function(){
        $(this).next().slideToggle();
        $(this).parent().toggleClass("selected-day");
    })

})