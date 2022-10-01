<?php
require_once "../api/database.php";
require_once "../api/session.php";
if (!isset($_GET["id"]))
    die("Thread not defined.");
$threadID = sanitize($_GET["id"]);
if (strlen($threadID) == 0)
    die("Thread not defined.");

$thread = query("SELECT * FROM posts WHERE PostID='$threadID'");
if (numrows($thread) == 0)
    die("Thread not found.");
$thread = fetch($thread);
$q = query("SELECT Username FROM users WHERE AccountID='".$thread["AccountID"]."' ");
$authorName = fetch($q)["Username"];

$q2 = query("SELECT * FROM posts WHERE ReplyingTo='".$thread["PostID"]."'");
$q3 = query("SELECT * FROM likes WHERE PostID='".$thread["PostID"]."'");



?>
<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="./../styles/app.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="./../scripts/threadIndex.js"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <div class="sticky top-0 z-50"><?php include './../ui/navbar.php' ?></div>

        <!-- SECTION HEADER -->
        <header class="bg-white py-8 border-b">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex align-middle gap-2">
                <a onclick="history.back()"><img src="./../resources/icon_back.svg" class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"></img></a>
                <h3 class="text-xl font-bold align-middle">Thread</h3>
            </div>
        </header>

        <!-- CONTENT AREA -->
        <main>

            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <!-- THREAD STARTER -->
                <div class="bg-white flex gap-4 mx-4 mt-8">
                    <a href="">
                        <img class="w-auto h-12 rounded-full" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="Rounded avatar">
                        <div class="grid">
                            <h6 class="font-bold mb-1"><?php echo $authorName; ?></h6>
                            <p><?php echo $thread["Body"]; ?></p>
                            <div class="grid grid-cols-4 mt-2">
                                <a href="" class="inline-flex gap-1"><img src="./../resources/icon_like.svg" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"></img><span class="gap-2"><?php echo numrows($q2) ;?></span></a>
                                <a href="" class="inline-flex gap-1"><img src="./../resources/icon_edit.svg" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"></img></a>
                                <a href="" class="inline-flex gap-1"><img src="./../resources/icon_delete.svg" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"></img></a>
                                <a href="" class="inline-flex gap-1"><img src="./../resources/icon_comment.svg" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"></img><span class="gap-2"><?php echo numrows($q3) ;?></span></a>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- INPUT REPLIES -->
                <div class="px-4 py-4 mt-4 sm:px-0 flex-row border-b">
                    <form id="postReply">
                        <input type="hidden" name="postReply" id="thread" value="<?php echo $threadID; ?>" />
                        <div class="bg-white flex gap-4">
                            <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="Rounded avatar">
                            <textarea id="postbody" name="postbody" class="flex-grow border-0 overflow-y-auto text-lg" placeholder="What's on your mind"></textarea>
                        </div>
                        <div class="flex  flex-row-reverse w-auto">
                            <button id="postButton" type="submit" class="py-2 px-4 text-md rounded text-white bg-purple-600 hover:bg-purple-700 fo cus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-50">Post</button>
                        </div>
                    </form>
                </div>

                <!-- REPLIES -->
                <div id="replycontainer">
                    
                </div>
            </div>
        </main>

    </div>

</body>

</html>