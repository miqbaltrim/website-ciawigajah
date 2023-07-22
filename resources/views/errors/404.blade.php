<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <!-- Icon Favicon -->
    <link rel="icon" type="image/svg+xml" href="/images/Ried-favicon.svg">
    <title>404 Page Not Found</title>
</head>
<body class="flex flex-col h-screen justify-center items-center bg-white">
    <div class="flex flex-col items-center">
        <!-- Animasi GIF -->
        <img src="{{ asset('images/404-2.gif') }}" alt="404 Animation" class="w-100 h-80 mb-6">

        <!-- Teks 404 -->
        <h1 class="text-[120px] font-extrabold text-gray-700">404 Bro!!!</h1>
        <p class="text-2xl font-medium text-gray-600 mb-6">Balik Lagi Broo</p>
        <a href="/"
            class="px-4 py-2 font-medium text-white bg-indigo-500 rounded-md hover:bg-indigo-600 transition-all duration-200 ease-in-out">
            Go Home
        </a>
    </div>
</body>
</html>
