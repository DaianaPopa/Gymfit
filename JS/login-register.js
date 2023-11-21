$(document).ready(function(){
    
    //Register/Login Menu Popup

    $(".menu-link").click(function(){
        $("#hidemenu").fadeOut();
    })

    $(".return-btn").click(function(){
        $("#hidemenu").fadeIn();
    })

    //Register Member & Trainer Toggle
    $("#member").click(function(){
        if ($('#member').is(':checked')){
            $('#member').parent().css("opacity", 1);
            $('#trainer').parent().css("opacity", 0.4);
            $('#trainer').is(':checked') == false;
        }
    })

    $("#trainer").click(function(){
        if ($('#trainer').is(':checked')){
            $('#trainer').parent().css("opacity", 1);
            $('#member').parent().css("opacity", 0.4);
            $('#member').is(':checked') == false;
        }
    })
})