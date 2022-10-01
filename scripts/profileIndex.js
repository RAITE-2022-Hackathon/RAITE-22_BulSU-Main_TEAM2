$(document).ready(function(){
    let canSubmit=true
    $("#postThread").on('submit',function(e){
        e.preventDefault()
        if(!canSubmit)
            return null
        let btn = $("#postButton")
        let body = $("#body")
        body.attr("disabled", "disabled")
        canSubmit=false
        btn.html("Posting...")
        let formData = new FormData(this)
        $.ajax({
            url:"../api/thread/create.php",
            type:"POST",
            data:formData,
            processData:false,
            contentType:false,
            cache:false,
            success:(e)=>{
                btn.html("Post")
                canSubmit=true
                console.log("Posted")
                body.removeAttr("disabled")
                body.html("")
            }
        })
    })
})