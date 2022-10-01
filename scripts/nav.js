$(document).ready(function(){
    let profile_dropdown = $("#profile-dropdown");

    $("body").on('click', "#btn-dropdown",function (e) {
        e.preventDefault()
        $(profile_dropdown).removeClass("hidden");
        console.log(1);
    })
})