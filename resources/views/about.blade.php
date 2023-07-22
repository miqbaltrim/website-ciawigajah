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
    <style>
        .paragraph {
            text-indent: 30px; /* Atur jumlah spasi ke dalam yang diinginkan di sini */
        }
    </style>
</head>

<section class="items-center py-2 bg-gray-100 font-poppins dark:bg-gray-800">
        <div class="justify-center flex-1 max-w-6xl py-4 mx-auto lg:py-6 md:px-6">
            <!-- Image Logo -->
            <a href="/documents/Ried-Logo.pdf" target="_blank"><img class="w-2/3 md:w-80 z-50 mx-auto mb-8" src="{{ asset('images/Ried.svg') }}" alt="Logo Gambar"/></a>
            <div class="flex flex-wrap ">
                <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0">
                    <!-- Image Header -->
                    <img src="{{ asset('images/riedgedung.jpg') }}" alt=""
                        class="relative z-40 object-cover w-full h-96 rounded-3xl">
                </div>
                <!-- Teks Header -->
                <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0 ">
                    <h2 class="text-5xl font-bold tracking-wide text-blue-500 dark:text-gray-300">
                        About Aplikasi
                    </h2>
                    <p class="paragraph mb-2 mt-4 text-base leading-7 text-gray-500 dark:text-gray-400">
                        Saat ini sering kali kita mendengar mengenai teknologi internet yang merupakan perkembangan terkini dari teknologi informasi. Perkembangan teknologi ini, lebih banyak berkembang kearah user friendly, yang mana berarti semakin mempermudah para pengguna dalam mengimplementasikan internet dalam berkehidupan.
                    </p>
                    <p class="paragraph mb-2 text-base leading-7 text-gray-500 dark:text-gray-400">
                        Salah satu yang bisa kita akses untuk membaca berita bisa melalui Ried. Ried adalah penyedia layanan blog gratis yang bisa diakses siapa saja. Ried ini termasuk jenis blog yang sederhana dan mudah digunakan oleh user.
                        <strong> Pada tugas akhir Mata Kuliah Pemrograman Web Lanjut dan Pemrograman Visual di semester 6 ini, kelompok kami membuat blogspot dengan nama aplikasi Ried.</strong> Aplikasi ini berita yang bertujuan untuk bisa mengakses dan mengupload berita sekaligus memberikan komentar secara langsung.
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
            <div class="min-h-screen bg-gradient-to-br ">
                <div class="mx-auto max-w-3xl px-6 py-12 text-center ">
                    <a href="/documents/Laporan-Jurnal-UAS.pdf" target="_blank" class="ml-2 text-5xl font-bold tracking-wide mb-8 text-blue-500 hover:underline">Dokumentasi</a>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-16">
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-xl font-bold text-purple-900 mb-4">Diskusi via Discord</h2>
                            <img src="{{ asset('images/discord.png') }}" alt="" class="relative z-40 object-cover w-full h-95 rounded-xl">
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-xl font-bold text-purple-900 mb-4">Diskusi via Offline</h2>
                            <img src="{{ asset('images/offline.jpg') }}" alt="" class="relative z-40 object-cover w-full h-95 rounded-xl">
                        </div>

                        <!-- Beranda -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-xl font-bold text-purple-900 mb-4">Tampilan Beranda Before</h2>
                            <img src="{{ asset('images/Beranda-1.jpg') }}" alt="" class="relative z-40 object-cover w-full h-95 rounded-xl">
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-xl font-bold text-purple-900 mb-4">Tampilan Beranda After</h2>
                            <img src="{{ asset('images/Beranda-3.jpg') }}" alt="" class="relative z-40 object-cover w-full h-95 rounded-xl">
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-xl font-bold text-purple-900 mb-4">Tampilan Beranda Before</h2>
                            <img src="{{ asset('images/Beranda-2.jpg') }}" alt="" class="relative z-40 object-cover w-full h-95 rounded-xl">
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-xl font-bold text-purple-900 mb-4">Tampilan Beranda After</h2>
                            <img src="{{ asset('images/Beranda-4.jpg') }}" alt="" class="relative z-40 object-cover w-full h-95 rounded-xl">
                        </div>
                        
                        <!-- Readmore -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-xl font-bold text-purple-900 mb-4">Tampilan Readmore Before</h2>
                            <img src="{{ asset('images/readmore-1.jpg') }}" alt="" class="relative z-40 object-cover w-full h-95 rounded-xl">
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-xl font-bold text-purple-900 mb-4">Tampilan Readmore After</h2>
                            <img src="{{ asset('images/readmore-2.jpg') }}" alt="" class="relative z-40 object-cover w-full h-95 rounded-xl">
                        </div>

                        <!-- Login -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-xl font-bold text-purple-900 mb-4">Tampilan Login Before</h2>
                            <img src="{{ asset('images/login-1.jpg') }}" alt="" class="relative z-40 object-cover w-full h-95 rounded-xl">
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-xl font-bold text-purple-900 mb-4">Tampilan Login After</h2>
                            <img src="{{ asset('images/login-2.jpg') }}" alt="" class="relative z-40 object-cover w-full h-95 rounded-xl">
                        </div>
                        
                        <!-- Dashboard -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-xl font-bold text-purple-900 mb-4">Tampilan Dashboard Before</h2>
                            <img src="{{ asset('images/dashboard-1.jpg') }}" alt="" class="relative z-40 object-cover w-full h-95 rounded-xl">
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-xl font-bold text-purple-900 mb-4">Tampilan Dashboard After</h2>
                            <img src="{{ asset('images/dashboard-2.jpg') }}" alt="" class="relative z-40 object-cover w-full h-95 rounded-xl">
                        </div>
                        
                        <!-- Database -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-xl font-bold text-purple-900 mb-4">Relasi Database</h2>
                            <img src="{{ asset('images/database-1.jpg') }}" alt="" class="relative z-40 object-cover w-full h-95 rounded-xl">
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-xl font-bold text-purple-900 mb-4">Relasi Database</h2>
                            <img src="{{ asset('images/database-2.jpg') }}" alt="" class="relative z-40 object-cover w-full h-95 rounded-xl">
                        </div>
                        
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

</body>

</html>
