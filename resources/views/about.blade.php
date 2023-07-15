<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <!-- Icon Favicon -->
    <link rel="icon" type="image/svg+xml" href="/images/Ried-favicon.svg">
    
</head>

<section class="items-center py-2 bg-gray-100 font-poppins dark:bg-gray-800">
        <div class="justify-center flex-1 max-w-6xl py-4 mx-auto lg:py-6 md:px-6">
            <!-- Image Logo -->
        <img class="w-2/3 md:w-80 z-50 mx-auto mb-8" src="{{ asset('images/Ried.svg') }}" alt="Logo Gambar"/>
            <div class="flex flex-wrap ">
                <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0">
                    <!-- Image Header -->
                    <img src="{{ asset('images/rangga.jpg') }}" alt=""
                        class="relative z-40 object-cover w-full h-96 rounded-3xl">
                </div>
                <!-- Teks Header -->
                <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0 ">
                    <h2 class="text-5xl font-bold tracking-wide text-blue-500 dark:text-gray-300">
                        About Aplikasi
                    </h2>
                    <p class="mb-10 text-base leading-7 text-gray-500 dark:text-gray-400">
                    Website ini adalah bagian dari tugas praktek Mata Kuliah Pemprograman 
                    Web Lanjut & Pemprograman Visual  untuk memenuhi syarat nilai Ujian Akhir Semester 6
                    </p>
                </div>
            </div>
        </div>


        <!-- Komponen Aplikasi -->
        <div class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
            <div class="max-w-xl mx-auto mb-8">
                <div class="text-center ">
                <h1 class="ml-2 text-5xl font-bold tracking-wide mb-8 text-blue-500"> Komponen Aplikasi</h1>
                    <div class="relative flex flex-col-3 items-center justify-center">
                        
                        <div class="bg-blue-600 rounded-full p-4 drop-shadow-xl mr-4 mb-8">
                            <p class="text-white font-bold dark:text-gray-500 ">
                                PHP & Laravel
                            </p>
                        </div>
                        <div class="bg-blue-600 rounded-full p-4 drop-shadow-xl mr-4 mb-8">
                            <p class="text-white font-bold dark:text-gray-500 ">
                                Tailwind
                            </p>
                        </div>
                        <div class="bg-blue-600 rounded-full p-4 drop-shadow-xl mr-4 mb-8">
                            <p class="text-white font-bold dark:text-gray-500 ">
                                MySql
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Dokumentasi -->
            <div class="w-full mx-auto lg:max-w-3xl ">
            <h1 class="ml-2 text-5xl font-bold tracking-wide mb-8 text-blue-500 text-center"> Dokumentasi</h1>
                <div class="relative flex justify-between">
                    <div class="flex flex-col items-center w-10 mr-4 md:w-24">
                        <div>
                            <div
                                class="flex items-center justify-center w-8 h-8 bg-blue-200 rounded-full dark:bg-gray-600">
                                <div class="w-4 h-4 bg-blue-600 rounded-full dark:bg-blue-400"></div>
                            </div>
                        </div>
                        <div class="w-px h-full bg-blue-300 dark:bg-gray-600"></div>
                    </div>
                    <div>
                        <h2
                            class="inline-block px-4 py-2 mb-4 text-xs font-medium text-gray-100 bg-gradient-to-r from-blue-500 to-blue-900 dark:from-blue-400 dark:to-blue-500 rounded-3xl dark:text-gray-100">
                            Before</h2>
                        <div
                            class="relative flex-1 mb-10 bg-white border-b-4 border-blue-200 shadow dark:border-gray-700 rounded-3xl dark:bg-gray-900">
                            <div class="relative z-20 p-6">
                                <p class="mb-2 text-xl font-bold text-gray-600 dark:text-gray-400">Tampilan Beranda</p>
                                <img src="{{ asset('images/test1.png') }}" alt="Launch Project" class="mb-2 w-full rounded-lg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative flex justify-between">
                    <div class="flex flex-col items-center w-10 mr-4 md:w-24">
                        <div>
                            <div
                                class="flex items-center justify-center w-8 h-8 bg-blue-200 rounded-full dark:bg-gray-600">
                                <div class="w-4 h-4 bg-blue-600 rounded-full dark:bg-blue-400"></div>
                            </div>
                        </div>
                        <div class="w-px h-full bg-blue-300 dark:bg-gray-600"></div>
                    </div>
                    <div>
                        <h2
                            class="inline-block px-4 py-2 mb-4 text-xs font-medium text-gray-100 bg-gradient-to-r from-blue-500 to-blue-900 dark:from-blue-400 dark:to-blue-500 rounded-3xl dark:text-gray-100">
                            After</h2>
                        <div
                            class="relative flex-1 mb-10 bg-white border-b-4 border-blue-200 shadow dark:border-gray-700 rounded-3xl dark:bg-gray-900">
                            <div class="relative z-20 p-6">
                                <p class="mb-2 text-xl font-bold text-gray-600 dark:text-gray-400">Diskusi Discord</p>
                                <img src="{{ asset('images/test1.png') }}" alt="Launch Project" class="mb-2 w-full rounded-lg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative flex justify-between">
                    <div class="flex flex-col items-center w-10 mr-4 md:w-24">
                        <div>
                            <div
                                class="flex items-center justify-center w-8 h-8 bg-blue-200 rounded-full dark:bg-gray-600">
                                <div class="w-4 h-4 bg-blue-600 rounded-full dark:bg-blue-400"></div>
                            </div>
                        </div>
                        <div class="w-px h-full bg-blue-300 dark:bg-gray-600"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

</body>

</html>
