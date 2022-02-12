/* debut du script */

$(document).ready(function (){
    var pass = $("phone_number").val();
    var phone = $("#password").val();
    if(pass !== '' && phone !== ''){
        $("#button_id").attr("disabled",false);
    }
})