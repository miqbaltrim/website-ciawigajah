<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Baca RIED</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Style Marque Top -->
        <style>
            
        </style>


        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
            @keyframes marquee {
                0% {
                    transform: translateX(100%);
                }
                100% {
                    transform: translateX(-100%);
                }
            }
            /*Animasi CSS Marque*/
            .animate-marquee {
                display: inline-block;
                white-space: nowrap;
                animation: marquee 10s linear infinite;
                animation-delay: calc(0.6s * (var(--i) - 1))
            }
            
            body {
                font-family: 'Nunito', sans-serif;
            }

            @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

            .font-family-karla {
                font-family: karla;
            }        
        </style>

        <!-- Tailwind -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

        <!-- Icon Favicon -->
        <link rel="icon" type="image/svg+xml" href="/images/Ried-favicon.svg">

    <body class="antialiased">

            <!-- Start Top Bar Nav -->
            <nav class="w-full py-3 bg-blue-800 shadow fixed top-0 left-0 right-0 z-50">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between">
                    <!-- Start Code Marque -->
                    <div class="overflow-hidden font-bold text-sm text-white w-full">
                        <marquee behavior="scroll" direction="left">
                            @foreach($post as $item)
                                {{$item->title}} |
                            @endforeach
                        </marquee>
                    </div>
                    <!-- Start Code Marque -->
                </div>
            </nav>
            <!-- End Top Bar Nav -->


            <!-- Start Text Header -->
            <header class="w-full container mx-auto h-85 bg-no-repeat" style="background-image: url('/images/image-6.jpg');">
                <div class="flex-col items-center mt-12 py-0">
                    <img class="w-full md:w-1/2 z-50 mx-auto" src="{{ asset('images/image-1.png') }}" alt="Nama Gambar"/>
                </div>
            </header>
            <!-- End Text Header -->


                <!-- Start Tampilan Berita -->
                <section>
                    <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
                        <div class="flex justify-center ml-2 text-5xl font-bold tracking-wide text-gray-800">
                            <!-- Logo & Teks -->
                            <div class="text-center">
                                <img class="w-2/3 md:w-1/2 z-50 mx-auto mb-8" src="{{ asset('images/Ried.svg') }}" alt="Logo Gambar"/>
                                <p>
                                    Berita <span class="text-red-500 animate-pulse ">Terhott!!!</span>
                                </p>
                            </div>
                        </div>
                        
                        <!-- Konten Berita -->
                        <div class="grid w-full grid-cols-1 gap-6 mx-auto lg:grid-cols-3">
                            @foreach($post as $item)
                            <div class="p-6">
                                
                                <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl" src="{{asset('cover/'.$item->cover)}}" alt="blog">
                                <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl">{{$item->title}}</h1>
                                <p class="mx-auto text-base leading-relaxed text-gray-500">
                                {{ Str::limit($item->body, 250) }} <a href="{{'/blog/'.$item->id}}" class="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-neutral-600" title="read more"> Read More » </a></p>                
                            
                            </div>
                            @endforeach
                            </div>
                            

                            <!-- Pagination -->
                            <div class="flex justify-end ml-2 text-xl font-bold tracking-wide text-gray-800">
                                <p>Cari Berita Lainnya</p>
                            </div>
                            
                            <div class="mt-2">
                                {{ $post->onEachSide(1)->links('pagination::tailwind') }}
                            </div>
                            <!-- Pagination -->
                        </div>
                    </div>
                </section>

                <!-- Fitur Our Team -->
                <div class="flex justify-center ml-2 text-5xl font-bold tracking-wide text-gray-800">
                    <p>Our Team</p>
                </div>
                <!-- Konten -->
                <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
                    <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-5">
                        <!-- Muhammad Iqbal Tri Mulyono-->
                        <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center transform transition-transform duration-300 hover:scale-110"
                            style="height: 450px; background-image:url('/images/iqbal.jpg');">
                            <div class="relative w-full h-64" >
                                <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-b from-transparent to-blue-800 opacity-0 hover:opacity-100 transition-opacity duration-300">
                                    <p class="text-white text-lg font-bold text-center mt-40">Muhammad Iqbal Tri Mulyono<br>200511153</p>
                                </div>
                            </div>
                        </div>
                        <!-- Rangga Arisandi-->
                        <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center transform transition-transform duration-300 hover:scale-110"
                            style="height: 450px; background-image:url('/images/rangga.jpg');">
                            <div class="relative w-full h-64">
                                <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-b from-transparent to-blue-800 opacity-0 hover:opacity-100 transition-opacity duration-300">
                                    <p class="text-white text-lg font-bold text-center mt-40">Rangga Arisandi<br>200511150</p>
                                </div>
                            </div>
                        </div>
                        <!-- Elsa Herdiyanti-->
                        <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center transform transition-transform duration-300 hover:scale-110"
                            style="height: 450px; background-image:url('/images/elsa.jpg');">
                            <div class="relative w-full h-64">
                                <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-b from-transparent to-blue-800 opacity-0 hover:opacity-100 transition-opacity duration-300">
                                    <p class="text-white text-lg font-bold text-center mt-40">Elsa Hardiyanti<br>200511160</p>
                                </div>
                            </div>
                        </div>
                        <!--Dian Meliani-->
                        <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center transform transition-transform duration-300 hover:scale-110"
                            style="height: 450px; background-image:url('/images/dian.jpg');">
                            <div class="relative w-full h-64">
                                <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-b from-transparent to-blue-800 opacity-0 hover:opacity-100 transition-opacity duration-300">
                                    <p class="text-white text-lg font-bold text-center mt-40">Dian Meliani<br>190511150</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    <!-- Start Footer -->
    <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
        <div class="sm:col-span-2">
        <a href="/" aria-label="Go home" title="Tugas Ujian Akhir Semester" class="inline-flex items-center">
            <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Tugas Ujian Akhir Semester</span>
        </a>
        <div class="mt-6 lg:max-w-sm">
            <p class="text-sm text-gray-800">
            Website ini adalah bagian dari tugas praktek Mata Kuliah Pemprograman Web Lanjut & Pemprograman Visual  untuk memenuhi syarat nilai Ujian Akhir Semester 6 
            </p>
        </div>
        </div>
        <div class="space-y-2 text-sm">
        <p class="text-base font-bold tracking-wide text-gray-900">Contacts</p>
        <div class="flex">
            <a href="/" title="Muhammad Iqbal Tri Mulyono" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">Muhammad Iqbal Tri Mulyono - 200511153</a>
        </div>
        <div class="flex">
            <a href="/" title="Rangga Arisandi" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">Rangga Arisandi - 200511150</a>
        </div>
        <div class="flex">
            <a href="/"  title="Elsa Hardiyanti" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">Elsa  Hardiyanti - 200511160</a>
        </div>
        <div class="flex">
            <a href="/"  title="Dian Meliani" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">Dian Meliani - 190511150</a>
        </div>
        </div>
        <div>
        <span class="text-base font-bold tracking-wide text-gray-900">Our Project</span>
        <div class="flex items-center mt-1 space-x-3">
            <a href="https://github.com/rakun17/tugas-uas" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
            <!-- Github -->
                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="currentColor"
                viewBox="0 0 24 24">
                <path
                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                </svg>
            </a>
        </div>
        <p class="mt-4 text-sm text-gray-500">
            Dapatkan source code kami untuk belajar yaaaa...
        </p>
        </div>
    </div>
    <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
        <p class="text-sm text-gray-600">
        © Copyright 2023 K1 Teknik Informatika (Kelompok 4)
        </p>
        <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
        <li>
            <a href="/" class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Universitas Muhammadiyah Cirebon</a>
        </li>
        </ul>
    </div>
    </div>
    <!-- End Footer -->

    </body>
</html>