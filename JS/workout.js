$(document).ready(function(){

    $('.workout-day-title').click(function(){
        $(this).next().slideToggle('fast');
        $(this).parent().toggleClass("selected-day");
    })

})