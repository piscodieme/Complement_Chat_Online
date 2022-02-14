/* debut du script */

$(function() {
    $("input").on("change",function(){
        /* login */
    var pass = $("#phone_number").val();
    var phone = $("#password").val();
        /* register */
    var password = $("#passwordRegister");
    var phoneNum = $("#phone");
    var email = $("#email");
    var name = $("#fullname");
    
    if(password && phoneNum && email && name){
        $("#button_id_register").attr("disabled",false);
    }else{
       
    }
    if(pass && phone){
        $("#button_id").attr("disabled",false);
    }else{
       
    }
})
})
    
