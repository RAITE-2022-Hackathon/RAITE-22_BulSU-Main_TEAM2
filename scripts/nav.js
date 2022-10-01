$(document).ready(function(){
    let profile_dropdown = $("profile-dropdown");

    $("#btn-dropdown").on('click',function (e) {
        e.preventDefault()
        $(profile_dropdown).removeClass("hidden");
        
    })
})