$(document).ready(function(){

    $("#edit-programme-btn").click(function(){
        $('#programme-display').hide();
        $("#programme-edit").slideDown('fast');
        $('#cancel-programme-edit').show();
        $(this).hide();
    })

    $('#cancel-programme-edit').click(function(){
        $("#programme-edit").hide();
        $('#programme-display').slideDown('fast');
        $("#edit-programme-btn").show();
        $(this).hide();
    })
})