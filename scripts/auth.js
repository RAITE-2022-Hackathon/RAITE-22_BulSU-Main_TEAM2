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
    let canSend=true
    $("#auth-btn-verifyRegister").on('click',function(e){
        if(!canSend)
            return null
        //canSend=false
        let btn = $(this)
        btn.html("Sent")
        console.log($("#auth-register-email").val())
        $.ajax({
            url: "../api/mailer.php",
            type:"POST",
            data:"Send2FA="+encodeURIComponent($("#auth-register-email").val()),
            success:(e)=>{
                console.log(e)
                btn.html("Re-send Code")
            }
        })
    })
    $("#auth-register-email").on('input',function(){
        $("#auth-register-code").val("")
    })
    $("#register").on('submit', function(e){
        e.preventDefault()
        let form = new FormData(this)
        $.ajax({
            url:"../api/user/createUser.php",
            type:"POST",
            data:form,
            processData:false,
            contentType:false,
            cache:false,
            statusCode:{
                200:(e)=>{
                    window.location.href="../dashboard"
                },
                400:(e)=>{
                    $("#usernameInput").text("Username Taken!")
                },
                401:(e)=>{
                    $("#passwordInput").text("Passwords do not match!")
                },
                402:(e)=>{
                    $("#passwordInput").text("Please input passwords")
                },
                402:(e)=>{
                    $("#passwordInput").text("Please input passwords")
                },
                403:(e)=>{
                    $("#emailInput").text("Email is already taken!")
                },
                404:(e)=>{
                    $("#2faInput").text("Wrong 2FA Input!")
                },
            }
        })
    })
})