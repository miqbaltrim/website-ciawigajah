<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ciawi Gajah</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Style Marque Top -->
        <style>
            
        </style>


        <!-- Styles -->
        <style>
            .glass-morphism {
                background-image: url('/path/to/your-background-image.jpg');
                background-size: cover;
                background-position: center;
                backdrop-filter: blur(10px);
                background-color: rgba(0, 0, 0, 0.5);
            }
        </style>

        <!-- Tailwind -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

        <!-- Icon Favicon -->
     
        <!-- Footer Start -->
        @include('header')
        <!-- Footer End -->

        <div class="relative bg-violet-600 " style="background-image: url('/images/ciawigajah2.jpg'); background-size: cover; background-position: center; backdrop-filter: blur(50px);">
            <div class="absolute inset-x-0 bottom-0">
                <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                    <path
                        d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z">
                    </path>
                </svg>
            </div>
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                    <h2 class="mb-6 font-sans text-3xl text-center font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                      Taman Sarongge
                    </h2>
                    <p class="mb-6 text-base text-indigo-200 md:text-lg">
                        Merupakan salah satu agrowisata yang berada di Desa Ciawigajah, Kecamatan Beber
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Quisque at orci ac velit aliquam ultrices. Vivamus tristique, risus id tempor pulvinar, ligula ex dictum tortor, nec efficitur est lorem nec libero. Praesent bibendum mi vel erat tincidunt, eu tincidunt justo venenatis. Nam fermentum, metus in vestibulum euismod, libero dui efficitur quam, id hendrerit urna lectus id nisi. Fusce vel ex in justo dignissim elementum. Donec nec augue luctus, vulputate libero eget, finibus purus. Nam in aliquet sem. Maecenas at sagittis metus, ac malesuada orci. Sed eu risus at orci posuere ullamcorper. Ut pellentesque, libero sed efficitur laoreet, purus tellus fringilla justo, nec facilisis arcu tellus eget elit. Sed nec purus nec urna dictum cursus. Sed tincidunt magna in augue eleifend, eu tincidunt elit malesuada. Vivamus dapibus neque non volutpat malesuada..
                    </p>

                    <a href="#photo" aria-label="Scroll down"
                        class="flex items-center justify-center w-10 h-10 mx-auto text-white duration-300 transform border border-gray-400 rounded-full hover:text-teal-accent-400 hover:border-teal-accent-400 hover:shadow hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                            <path
                                d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        

        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12">
                    <div class="flex items-center gap-12">
                        <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl">Gallery Taman Sarongge</h2>
                    </div>
        
                    <a href="#"
                        class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">More</a>
                </div>
        
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8" id="photo">
                    <!-- image - start -->
                    <div 
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 transform transition-transform duration-300 hover:scale-110">
                        <img src="/images/sarongge-01.jpg" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        
                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>
        
                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Kolam Ikan</span>
                    </div>
                    <!-- image - end -->
        
                    <!-- image - start -->
                    <div 
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80 transform transition-transform duration-300 hover:scale-110">
                        <img src="/images/sarongge-02.jpg" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        
                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>
        
                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Taman Bunga</span>
                    </div>
                    <!-- image - end -->
        
                    <!-- image - start -->
                    <div 
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80 transform transition-transform duration-300 hover:scale-110">
                        <img src="/images/sarongge-03.jpg" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        
                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>
        
                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Sawung Teguh</span>
                    </div>
                    <!-- image - end -->
        
                    <!-- image - start -->
                    <div 
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 transform transition-transform duration-300 hover:scale-110">
                        <img src="/images/sarongge-04.jpg" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        
                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>
        
                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Taman Bunga</span>
                    </div>
                    <!-- image - end -->

                    <!-- image - start -->
                    <div 
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 transform transition-transform duration-300 hover:scale-110">
                        <img src="/images/sarongge-05.jpg" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        
                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>
        
                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Rumah Bunga</span>
                    </div>
                    <!-- image - end -->
        
                    <!-- image - start -->
                    <div 
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80 transform transition-transform duration-300 hover:scale-110">
                        <img src="/images/sarongge-06.jpg" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        
                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>
        
                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Ayunan</span>
                    </div>
                    <!-- image - end -->
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        @include('footer')
        <!-- Footer End -->