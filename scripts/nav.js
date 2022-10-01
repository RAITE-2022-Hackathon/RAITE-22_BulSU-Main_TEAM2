$(document).ready(function(){
    let profile_dropdown = $("#profile-dropdown");

    $("body").on('click', "#btn-dropdown",function (e) {
        e.preventDefault()
        if($(profile_dropdown).hasClass("hidden"))
            $(profile_dropdown).removeClass("hidden");
        else
            $(profile_dropdown).addClass("hidden");
    })
})