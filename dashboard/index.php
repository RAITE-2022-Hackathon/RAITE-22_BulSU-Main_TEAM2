<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="./../styles/app.css">
    <title>Document</title>
</head>

<body class="h-full">
    <?php include './../ui/navbar.php' ?>
    <main>

        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">Hello, User</h3>

                <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    
                    <div class="relative bg-gray-50 pt-5 px-4 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
                        <dt>
                            <div class="absolute bg-blue-500 rounded-md p-3">
                                <img class="h-6 w-6" src="./../resources/icon_coin.svg">
                            </div>
                            <p class="ml-16 text-sm font-medium text-gray-500 truncate">A</p>
                        </dt>
                        <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
                            <p class="text-2xl font-semibold text-gray-900">B</p>
                            <p class="ml-2 flex items-baseline text-sm font-semibold text-blue-600">
                                <!-- Heroicon name: solid/arrow-sm-up -->
                                <img class="h-5 w-5" src="./../resources/icon_coin.svg">
                                123
                            </p>
                        </dd>
                    </div>

                    <div class="relative bg-gray-50 pt-5 px-4 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
                        <dt>
                            <div class="absolute bg-blue-500 rounded-md p-3">
                                <img class="h-6 w-6" src="./../resources/icon_coin.svg">
                            </div>
                            <p class="ml-16 text-sm font-medium text-gray-500 truncate">A</p>
                        </dt>
                        <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
                            <p class="text-2xl font-semibold text-gray-900">B</p>
                            <p class="ml-2 flex items-baseline text-sm font-semibold text-blue-600">
                                <!-- Heroicon name: solid/arrow-sm-up -->
                                <img class="h-5 w-5" src="./../resources/icon_coin.svg">
                                123
                            </p>
                        </dd>
                    </div>

                    <div class="relative bg-gray-50 pt-5 px-4 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
                        <dt>
                            <div class="absolute bg-blue-500 rounded-md p-3">
                                <img class="h-6 w-6" src="./../resources/icon_coin.svg">
                            </div>
                            <p class="ml-16 text-sm font-medium text-gray-500 truncate">A</p>
                        </dt>
                        <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
                            <p class="text-2xl font-semibold text-gray-900">B</p>
                            <p class="ml-2 flex items-baseline text-sm font-semibold text-blue-600">
                                <!-- Heroicon name: solid/arrow-sm-up -->
                                <img class="h-5 w-5" src="./../resources/icon_coin.svg">
                                123
                            </p>
                        </dd>
                    </div>


                </dl>
            </div>
        </div>
    </main>
</body>

</html>