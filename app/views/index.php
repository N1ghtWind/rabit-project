<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo URLROOT . "/public/css/style.css" ?>" rel="stylesheet">
    <title><?php echo SITENAME ?></title>
</head>

<body>
    <nav class="bg-gray-800">
        <div class="mx-auto w-full px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="block">
                        <div class="flex space-x-4">
                            
                            <a href="<?php echo URLROOT; ?>" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Home</a>

                            <a href="<?php echo URLROOT . '/users'; ?>" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Users</a>

                            <a href="<?php echo URLROOT . '/advertisements'; ?>" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Advertisement</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex mx-auto w-full items-center justify-center p-4">
        <h1 class="text-2xl font-bold">Index Page</h1>
    </div>
        
</body>

</html>