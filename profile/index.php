<?php
    require_once "../api/database.php";
    require_once "../api/session.php";
    if(!isset($_GET["user"]))
        die("User not defined.");
    $userID = sanitize($_GET["user"]);
    if(strlen($userID)==0)
        die("User not defined.");
    $user = query("SELECT * FROM users WHERE AccountID='$userID'");
    if(numrows($user)==0)
        die("User not found.");
    $user=fetch($user);
    $followers = query("SELECT * FROM following WHERE User='$userID'");
    $following = query("SELECT * FROM following WHERE Following='$userID'");
    
    
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
    <script src="./../scripts/profileIndex.js"></script>
    <script src="./../scripts/nav.js"></script>
</head>

<body class="h-full">
    <input type="hidden" name="userID" id="userID" value="<?php echo $userID; ?>">
    <input type="hidden" name="userName" id="userName" value="<?php echo $user["Username"]; ?>">
    <div class="min-h-full">
        <div class="sticky top-0"><?php include './../ui/navbar.php' ?></div>

        <!-- SECTION HEADER -->
        <header class="bg-white py-8 border-b">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <img class="w-24 h-24 rounded-full" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="Rounded avatar">
                <div class="flex justify-between">
                    <h1 class="text-3xl font-bold leading-tight text-gray-900 mt-4"><?php echo $user["Username"]; ?></h1>
                    <?php if(strcmp($_SESSION["AccountID"],$user["AccountID"])!=0){
                        //Check if finafollow ni visitor si user
                        $q = query("SELECT * FROM following WHERE User='".$_SESSION["AccountID"]."' AND Following='".$user["AccountID"]."'");
                        if( numrows($q) == 0 )
                            echo '<button class="py-2 px-4 text-md rounded border text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-50">Follow</button>';
                        else 
                            echo '<button class="py-2 px-4 text-md rounded border text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-50">Following</button>';
                    }
                    ?>
                    
                </div>
                <p class="mt-8 w-full"><?php echo $user["Bio"]; ?></p>
                <div class="mt-4 flex gap-1">
                    <img src="./../resources/icon_calendar.svg" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"></img>
                    <p class="flex-1">Joined <?php echo (new DateTime($user["JoinDate"]))->format("M Y") ?></p>
                </div>
                <div class="mt-2 gap-4 flex">
                    <p class=""><span class="mr-1 font-semibold"><?php echo numrows($followers); ?></span>Following</p>
                    <p class=""><span class="mr-1 font-semibold"><?php echo numrows($following); ?></span>Followers</p>
                </div>
            </div>
        </header>

        <!-- CONTENT AREA -->
        <main>
            
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <?php
                    if(strcmp($_SESSION["AccountID"],$user["AccountID"])==0){
                        echo '<div class="px-4 py-4 mt-4 sm:px-0 flex-row border-b">
                        <form id="postThread" method="POST">
                            <input type="hidden" name="newThread" value="1" />
                            <div class="bg-white flex gap-4">
                                <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="Rounded avatar">
                                <textarea id="postbody" required name="postbody" class="flex-grow border-0 overflow-y-auto text-lg" placeholder="What\'s on your mind"></textarea>
                            </div>
                            <div class="flex  flex-row-reverse w-auto">
                                <button id="postButton" type="submit" class="py-2 px-4 text-md rounded text-white bg-blue-600 hover:bg-blue-700 fo cus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-50">Post</button>
                            </div>
                        </form>
                    </div>';
                    }
                ?>
                
                <!--asdasd-->
                <div id="postcontainer">
                </div>
                <!--asdasd-->
            </div>
    </div>
    </main>

    </div>

</body>

</html>