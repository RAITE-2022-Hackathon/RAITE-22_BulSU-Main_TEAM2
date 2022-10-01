$(document).ready(function(){
    let canSubmit=true
    function loadPosts(){
        //get all posts
        $.ajax({
            url:"../api/thread/getPosts.php",
            data:"userID="+$("#userID").val(),
            type:"GET",
            success:(e)=>{
                $("#postcontainer").html("")
                let r = JSON.parse(e)
                $(r).each(function(i,v){
                    $("#postcontainer").append('<div class="bg-white flex gap-4 mx-4 mt-8"><a href="../thread/index.php?id='+v[0]+'"><img class="w-auto h-12 rounded-full" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="Rounded avatar"><div class="grid"><h6 class="font-bold mb-1">'+$("#userName").val()+'</h6><p>'+v[3]+'</p><div class="grid grid-cols-4 mt-2"><a href="like" class="inline-flex gap-1"><img src="./../resources/icon_like.svg" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"></img><span class="gap-2">'+v[5]+'</span></a><a href="edit" class="inline-flex gap-1"><img src="./../resources/icon_edit.svg" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"></img></a><a href="trash" class="inline-flex gap-1"><img src="./../resources/icon_delete.svg" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"></img></a><a href="comment" class="inline-flex gap-1"><img src="./../resources/icon_comment.svg" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"></img><span class="gap-2">'+v[4]+'</span></a> </div></a></div>')
                })
            }
        })
        
    }
    loadPosts()
    $("#postThread").on('submit',function(e){
        e.preventDefault()
        if(!canSubmit)
            return null
        let btn = $("#postButton")
        let body = $("#postbody")
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
                console.log(e)
                btn.html("Post")
                canSubmit=true
                console.log("Posted")
                body.removeAttr("disabled")
                body.val("")
                loadPosts()
            }
        })
    })
})