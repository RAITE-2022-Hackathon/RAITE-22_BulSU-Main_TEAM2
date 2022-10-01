$(document).ready(function(){
    function loadReplies(){
        $.ajax({
            url:"../api/thread/getPosts.php",
            data:"userID="+$("#userID").val(),
            type:"GET",
            success:(e)=>{
                $("#replycontainer").html("")
                let r = JSON.parse(e)
                $(r).each(function(i,v){
                    $("#replycontainer").append('')
                    <div class="bg-white flex gap-4 mx-4 mt-8">
                        <img class="w-auto h-12 rounded-full" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="Rounded avatar">
                        <div class="grid">
                            <h6 class="font-bold mb-1"></h6>
                            <p>Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar.</p>
                            <div class="grid grid-cols-4 mt-2">
                                <a href="like" class="inline-flex gap-1"><img src="./../resources/icon_like.svg" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"></img><span class="gap-2">123</span></a>
                            </div>
                        </div>
                    </div>
                })
            }
        })
    }
})