/* debut du script */

$(function() {
    $("input").on("input",function(){

    var input_value = $("#input_send").val();

        /* login */
    var pass = $("#phone_number").val();
    var phone = $("#password").val();
        /* register */
    var password = $("#passwordRegister").val();
    var phoneNum = $("#phone").val();
    var email = $("#email").val();
    var name = $("#fullname").val();

    if(input_value){
        $("#btn_send").attr("disabled",false);
    }else{
        $("#btn_send").attr("disabled",true);
    }

    if(password && phoneNum && email && name){
        $("#button_id_register").attr("disabled",false);
    }else{
        $("#button_id_register").attr("disabled",true);
    }
    if(pass && phone){
        $("#button_id").attr("disabled",false);
    }else{
        $("#button_id").attr("disabled",true);
    }
})
$("#input-send").on("input",()=>{
    var input_value = $("#input-send").val();
    if(input_value){
        $("#btn-send").attr("disabled",false);
    }
})

/** hide and show div button send  */

$("#divBtn").hide();

$(".listBtn").on("click",function () {
   $("#divBtn").show();
})

})

/***logique du projet */



