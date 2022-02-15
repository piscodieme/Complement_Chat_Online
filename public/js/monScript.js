/* debut du script */

$(function() {
    $("input").on("input",function(){
        /* login */
    var pass = $("#phone_number").val();
    var phone = $("#password").val();
        /* register */
    var password = $("#passwordRegister").val();
    var phoneNum = $("#phone").val();
    var email = $("#email").val();
    var name = $("#fullname").val();
    
    if(password && phoneNum && email && name){
        $("#button_id_register").attr("disabled",false);
    }else{
       
    }
    if(pass && phone){
        $("#button_id").attr("disabled",false);
    }else{
       
    }
})
$("#input-send").on("input",()=>{
    var input_value = $("#input-send").val();
    if(input_value){
        $("#btn-send").attr("disabled",false);
    }
})
})
    
