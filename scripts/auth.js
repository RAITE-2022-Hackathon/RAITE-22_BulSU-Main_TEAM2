$(document).ready(function(){
    let auth_gotoLogin = $("#auth-view-gotoLogin");
    let auth_gotoRegister = $("#auth-view-gotoRegister");

    $("#auth-gotoRegister").on('click',function (e) {
        e.preventDefault()
        $(auth_gotoRegister).removeClass("hidden");
        $(auth_gotoLogin).addClass("hidden");
    })

    $("#auth-gotoLogin").on('click',function (e) {
        e.preventDefault()
        $(auth_gotoRegister).addClass("hidden");
        $(auth_gotoLogin).removeClass("hidden");
    })
})