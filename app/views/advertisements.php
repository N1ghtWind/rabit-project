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
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="<?php echo URLROOT; ?>" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Home</a>

                            <a href="<?php echo URLROOT . '/users'; ?>" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Users</a>

                            <a href="<?php echo URLROOT . '/advertisements'; ?>" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Advertisement</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="p-4">
        <div class="overflow-x-auto flex flex-col max-w-md mt-10 mx-auto w-full items-center justify-center rounded-lg shadow">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-gray-900 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Advertisement ID
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Ads title
                        </th>
                        <th scope="col" class="py-3 px-6">
                            User ID
                        </th>
                        <th scope="col" class="py-3 px-6">
                            User Name
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($advertisements as $advertisement) {
                        echo "<tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700'>
                    <th scope='row' class='py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white'>
                        " . $advertisement->ads_id . "
                    </th>
                    <td class='py-4 px-6'>
                        " . $advertisement->title . "
                    </td>
                    <td class='py-4 px-6'>
                        " . $advertisement->user_id . "
                    </td>
                    <td class='py-4 px-6'>
                        " . $advertisement->name . "
                    </td>
                </tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>