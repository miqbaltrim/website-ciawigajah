<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ciawi Gajah</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <!-- Tailwind -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

        <!-- Icon Favicon -->
        
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<body>
    @include('header')
    
    <!-- Header Start -->
    <header class="w-full container mx-auto h-85 bg-no-repeat">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="flex items-center justify-center h-85">
                        <img class="relative z-40 object-cover w-full h-95 rounded-3xl" src="/images/ciawigajah1.jpg" alt="Nama Gambar" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex items-center justify-center h-85">
                        <img class="relative z-40 object-cover w-full h-95 rounded-3xl" src="/images/ciawigajah2.jpg" alt="Nama Gambar" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex items-center justify-center h-85">
                        <img class="relative z-40 object-cover w-full h-95 rounded-3xl" src="/images/ciawigajah3.jpg" alt="Nama Gambar" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex items-center justify-center h-85">
                        <img class="relative z-40 object-cover w-full h-95 rounded-3xl" src="/images/ciawigajah4.jpg" alt="Nama Gambar" />
                    </div>
                </div>
                <!-- Tambahkan lebih banyak gambar di sini -->
            </div>
            {{-- <div class="swiper-pagination"></div> --}}
        </div>
    </header>
    <!-- Header End -->

    <!-- Teks Start -->
    <div class="max-w-5xl mx-auto mt-12 px-4 text-center">
        <div class="w-full max-w-3xl mx-auto">
            <h1 class="text-4xl font-bold mt-2 mb-6">Kenalan yuk dengan<br>Desa Ciawi Gajah, Beber</h1>
            <p class="px-4 leading-relaxed">Desa Ciawi Gajah berada di Kecamatan Beber, Kabupaten Cirebon, Jawa Barat. Desa Ciawi Gajah memiliki banyak potensi wisata alam dan budaya yang menarik untuk dikembangkan. Bank Sampah, sebuah usaha warga untuk mengelola sampah dengan cara yang ramah lingkungan, adalah salah satu kemungkinan. Sangat penting untuk membuat masyarakat di luar desa tahu tentang kawasan eduwisata Bank Sampah. Oleh karena itu, proposal ini berfokus pada penggunaan blog sebagai alat untuk menyebarkan informasi tentang Kawasan Eduwisata Bank Sampah di Desa Ciawi Gajah.
            </p>
        </div>
    </div>
    <!-- Teks End -->

    <!-- Konten Sarongge Start -->
    <section class="sm:mt-6 lg:mt-8 mt-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
            class="my-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28 flex gap-3 lg:flex-justify lg:flex flex-col lg:flex-row">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-800 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline">Galery</span>
                    <span class="block text-indigo-600 xl:inline">Taman Sarongge</span>
                </h1>
                <p
                    class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet
                    fugiat veniam occaecat fugiat aliqua.
                </p>
                <!-- Button Section -->
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="#"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-600 md:py-4 md:text-lg md:px-10">
                            Lihat Selengkapnya
                        </a>
                    </div>
                </div>
                <!-- End of Button Section -->
            </div>
    
            <!--   Image Section     -->
            <div class="lg:inset-y-0 lg:right-0 lg:w-1/2 my-4">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="/images/ciawigajah2.jpg" alt="">
            </div>
            <!--   End of Image Section     -->
        </div>
    </section>
    <!-- Konten Sarongge End -->

    <!-- Konten Sampah Start -->
    <section class="sm:mt-6 lg:mt-8 mt-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="my-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28 flex gap-3 lg:flex-justify lg:flex flex-col-reverse lg:flex-row">
            <!--   Image Section     -->
            <div class="lg:inset-y-0 lg:left-0 lg:w-1/2 my-4">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="/images/tamansarongge.jpg" alt="">
            </div>
            <!--   End of Image Section     -->
    
            <div class="sm:text-center lg:text-right lg:ml-auto">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-800 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline">Gallery</span>
                    <span class="block text-indigo-600 xl:inline">Bank Sampah</span>
                </h1>
                <p class="mt-6 text-base text-gray-500 sm:mt-5 sm:text-lg-right sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
                </p>
                <!-- Button Section -->
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-end">
                    <div class="rounded-md shadow">
                        <a href="#"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-600 md:py-4 md:text-lg md:px-10">
                            Lihat Selengkapnya
                        </a>
                    </div>
                </div>
                <!-- End of Button Section -->
            </div>
        </div>
    </section>
    <!-- Konten Sampah End -->

    <!-- Artikel Start -->
    <div class="w-full max-w-3xl mx-auto text-center mt-6">
        <h1 class="text-4xl font-bold mt-2 mb-6">Artikel Desa</h1>
    </div>
    <div class="max-w-7xl mx-auto px-4">
        <!-- Konten Berita -->
        <div class="grid w-full grid-cols-1 gap-6 mx-auto lg:grid-cols-3">
            @foreach($post as $item)
            <div class="p-6 hover:bg-gray-100 rounded-xl transition duration-300 ease-in-out">
                <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl" src="{{asset('cover/'.$item->cover)}}" alt="blog">
                <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl">{{ Str::limit($item->title, 20) }}</h1>
                <p class="mx-auto text-base leading-relaxed text-gray-500">
                    {{ Str::limit($item->body, 250) }} <a href="{{'/blog/'.$item->id}}" class="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-neutral-600" title="read more"> Read More » </a>
                </p>                
            </div>
            @endforeach
        </div>
    
        <!-- Pagination -->
        <div class="flex justify-end mt-8 text-xl font-bold tracking-wide text-gray-800">
            <p>Cari Berita Lainnya</p>
        </div>
            
        <div >
            {{ $post->onEachSide(1)->links('pagination::tailwind') }}
        </div>
        <!-- Pagination -->
    </div>
    <!-- Artikel End -->
    
    <!-- Support Start -->
    <div class="flex max-w-md lg:max-w-3xl w-auto mx-auto flex-wrap items-center justify-center lg:justify-between px-5 mt-8 ">
        <div class="w-full max-w-3xl mx-auto text-center">
            <h1 class="text-4xl font-bold mt-2 mb-6">Support By</h1>
        </div>
        <div class="m-4 lg:mx-0 w-28 flex items-center justify-center">
            <img src="/images/umc1.png" alt="UMC" width="81" height="25">
        </div>
        <div class="m-4 lg:mx-0 w-28 flex items-center justify-center">
            <img src="/images/kampusmerdeka.png" alt="Kampus Merdeka" width="97" height="32">
        </div>
        <div class="m-4 lg:mx-0 w-28 flex items-center justify-center">
            <img src="/images/kelompok27.png" alt="Kelompok 27" width="81" height="25">
        </div>
    </div>
    <!-- Support End -->
    
    <!-- Footer Start -->
    @include('footer')
    <!-- Footer End -->
    

    
    
    
    

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 3000, // Waktu delay dalam milidetik (3 detik)
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>

</html>