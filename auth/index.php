<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="./../styles/app.css">
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
                        <a href="#" id="auth-gotoRegister" class="font-medium text-blue-600 hover:text-blue-500">Create an account</a>
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
                            <input id="auth-login-username" name="auth-login-username" type="email" autocomplete="off" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>
                    <!-- PASSWORD INPUT -->
                    <div class="space-y-1">
                        <div class="flex justify-between">
                            <label for="auth-login-password" class="block text-sm font-medium text-gray-700"> Password </label>
                            <div class="text-sm">
                                <a href="#" class="font-medium text-blue-600 hover:text-blue-500"> Forgot your password? </a>
                            </div>
                        </div>
                        <div class="mt-1">
                            <input id="auth-login-password" name="auth-login-password" type="password" autocomplete="off" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>
                    <!-- LOGIN BUTTON -->
                    <div>
                        <button id="auth-btn-login" type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Sign in</button>
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
                        <a href="#" id="auth-gotoLogin" class="font-medium text-blue-600 hover:text-blue-500">Sign in</a>
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
                            <input id="auth-register-email" name="auth-register-email" type="email" autocomplete="off" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <p id="emailInput" class="mt-2 text-sm text-red-600 dark:text-red-500"></p>
                    </div>
                    <!-- CODE INPUT -->
                    <div>
                        <label for="auth-register-code" class="block text-sm font-medium text-gray-700"> Verification Code </label>
                        <p id="2faInput" class="mt-2 text-sm text-red-600 dark:text-red-500"></p>
                        <div class="flex">
                            <label for="location-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Your Email</label>
                            <div class="relative w-full">
                                <input type="text" id="auth-register-code" class="block p-2.5 w-full z-20 text-sm text-gray-900 rounded-md shadow-sm  border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " required>
                                <button id="auth-btn-verifyRegister" type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Send Code
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- USERNAME INPUT -->
                    <div>
                        <label for="auth-register-username" class="block text-sm font-medium text-gray-700"> Username </label>
                        <div class="mt-1">
                            <input id="auth-register-username" name="auth-register-username" type="text" autocomplete="off" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <p id="usernameInput" class="mt-2 text-sm text-red-600 dark:text-red-500"></p>
                    </div>
                    <!-- PASSWORD INPUT -->
                    <div class="space-y-1">
                        <label for="auth-register-password" class="block text-sm font-medium text-gray-700"> Password </label>
                        <div class="mt-1">
                            <input id="auth-register-password" name="auth-register-password" type="password" autocomplete="off" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <p id="passwordInput" class="mt-2 text-sm text-red-600 dark:text-red-500"></p>
                    </div>
                    <!-- CONFIRM PASSWORD INPUT -->
                    <div class="space-y-1">
                        <label for="auth-register-confirmPassword" class="block text-sm font-medium text-gray-700"> Confirm Password </label>
                        <div class="mt-1">
                            <input id="auth-register-confirmPassword" name="auth-register-passwordc" type="password" autocomplete="off" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>
                    <!-- RESGISTER BUTTON -->
                    <div>
                        <button id="auth-btn-register" type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1 bg-blue-900">
            <div class="self-center w-auto flex h-screen">
                <img class="h-96 m-auto w-auto align-middle " src="./../resources/illustration_landing.svg">
            </div>
        </div>
    </div>
    </div>

</body>



</html>



<!-- This example requires Tailwind CSS v2.0+ -->
<div class="hidden fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
        <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
            <div>
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                    <!-- Heroicon name: outline/check -->
                    <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div class="mt-3 text-center sm:mt-5">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Payment successful</h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur amet labore.</p>
                    </div>
                </div>
            </div>
            <div class="mt-5 sm:mt-6">
                <button type="button" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">Go back to dashboard</button>
            </div>
        </div>
    </div>
</div>