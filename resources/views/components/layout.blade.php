<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Institute Management</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://kit.fontawesome.com/47cb46ef94.js" crossorigin="anonymous"></script>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>

    <body>
        <div class="flex">
            <x-sidebar></x-sidebar>
            <div class="py-8 px-16 flex flex-col flex-grow">
                <x-navbar />
                {{ $slot }}
            </div>
        </div>
    </body>

</html>
