let auth_gotoLogin = document.getElementById("auth-btn-gotoLogin");
let auth_gotoRegister = document.getElementById("auth-btn-gotoRegister");

auth_gotoLogin.onclick = function () {
    auth_gotoRegister.classList.add("hidden");
    auth_gotoLogin.classList.remove("hidden");
    console.log("go to login")
}

auth_gotoRegister.onclick = function () {
    auth_gotoRegister.classList.remove("hidden");
    auth_gotoLogin.classList.add("hidden");
    console.log("go to register")
}