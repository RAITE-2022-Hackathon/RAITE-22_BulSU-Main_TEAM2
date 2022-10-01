<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="./../styles/app.css">
    <script
    src="https://code.jquery.com/jquery-3.6.1.js"
    integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="./../scripts/auth.js"></script>
    <title>Document</title>
</head>

<body class="h-full">
    <div class="min-h-full flex">
        <!-- LOGIN FORM -->
        <div id="auth-view-gotoLogin" class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <img class="h-12 w-auto" src="" alt="">
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Welcome back</h2>
                    <p class="mt-2 text-sm text-gray-600">
                        Don't have an account yet?
                        <a href="#" id="auth-gotoRegister" class="font-medium text-purple-600 hover:text-purple-500">Create an account</a>
                    </p>
                </div>
            </div>
            <!-- LOGIN INPUT -->
            <div class="mt-6">
                <form id="login" method="POST" class="space-y-6">
                    <!-- USERNAME INPUT -->
                    <div>
                        <label for="auth-login-username" class="block text-sm font-medium text-gray-700"> Email address </label>
                        <div class="mt-1">
                            <input id="auth-login-username" name="auth-login-username" type="email" autocomplete="off" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                        </div>
                    </div>
                    <!-- PASSWORD INPUT -->
                    <div class="space-y-1">
                        <div class="flex justify-between">
                            <label for="auth-login-password" class="block text-sm font-medium text-gray-700"> Password </label>
                            <div class="text-sm">
                                <a href="#" class="font-medium text-purple-600 hover:text-purple-500"> Forgot your password? </a>
                            </div>
                            </div>  
                        <div class="mt-1">
                            <input id="auth-login-password" name="auth-login-password" type="password" autocomplete="off" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                        </div>
                    </div>
                    <!-- LOGIN BUTTON -->
                    <div>
                        <button id="auth-btn-login" type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- REGISTER FORM -->
        <div id="auth-view-gotoRegister" class="hidden flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <img class="h-12 w-auto" src="" alt="">
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Create an account</h2>
                    <p class="mt-2 text-sm text-gray-600">
                        Already have an account?
                        <a href="#" id="auth-gotoLogin" class="font-medium text-purple-600 hover:text-purple-500">Sign in</a>
                    </p>
                </div>
            </div>
            <!-- REGISTRATION INPUT -->
            <div class="mt-6">
                <form id="register" method="POST" class="space-y-6">
                    <!-- EMAIL INPUT -->
                    <div>
                        <label for="auth-register-email" class="block text-sm font-medium text-gray-700"> Email address </label>
                        <div class="mt-1">
                            <input id="auth-register-email" name="auth-register-email" type="email" autocomplete="off" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                        </div>
                    </div>
                    <!-- USERNAME INPUT -->
                    <div>
                        <label for="auth-register-username" class="block text-sm font-medium text-gray-700"> Email address </label>
                        <div class="mt-1">
                            <input id="auth-register-username" name="auth-register-username" type="text" autocomplete="off" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                        </div>
                    </div>
                    <!-- PASSWORD INPUT -->
                    <div class="space-y-1">
                            <label for="auth-register-password" class="block text-sm font-medium text-gray-700"> Password </label>
                        <div class="mt-1">
                            <input id="auth-register-password" name="auth-register-password" type="password" autocomplete="off" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                        </div>
                    </div>
                    <!-- CONFIRM PASSWORD INPUT -->
                    <div class="space-y-1">
                            <label for="auth-register-confirmPassword" class="block text-sm font-medium text-gray-700"> Confirm Password </label>
                        <div class="mt-1">
                            <input id="auth-register-confirmPassword" name="auth-register-password" type="password" autocomplete="off" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                        </div>
                    </div>
                    <!-- RESGISTER BUTTON -->
                    <div>
                        <button id="auth-btn-register" type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
        aaaaa
    </div>
</body>



</html>