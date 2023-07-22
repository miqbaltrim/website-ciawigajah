<!-- Tailwind -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
<!-- Icon Favicon -->
<link rel="icon" type="image/svg+xml" href="/images/Ried-favicon.svg">

<!-- Style Marque -->
<style>
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        .animate-marquee {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 10s linear infinite;
            animation-delay: calc(0.6s * (var(--i) - 1))
        }
      </style>

<title>Baca RIED</title>

<nav class="w-full py-3 bg-blue-800 shadow fixed top-0 left-0 right-0 z-50">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

            <!-- Start Code Marque -->
            <div class="overflow-hidden font-bold text-sm text-white w-full">
                <marquee behavior="scroll" direction="left">
                    @foreach($posting as $item)
                        {{$posting->title}} |
                    @endforeach
                </marquee>
            </div>
            <!-- End Code Marque -->
        </div>

    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
    <div class="max-w-3xl mx-auto">
        <!-- Button Back -->
        <div class="flex items-center py-8">
            <a href="{{ url('/') }}" class="text-gray-500 hover:text-gray-700 mr-2">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.707 3.293a1 1 0 010 1.414L7.414 9H16a1 1 0 010 2H7.414l3.293 3.293a1 1 0 01-1.414 1.414l-5-5a1 1 0 010-1.414l5-5a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                Back
            </a>
        </div>


        <!-- Blog Post Header -->
        <div class="mb-4">
            <h1 class="text-3xl font-bold mb-2">{{$posting->title}}</h1>
            <p class="text-gray-500 text-sm">Author : {{$posting->author}} </p>
        </div>

        <!-- Blog Post Image -->
        <img src="{{asset('cover/'.$posting->cover)}}" alt="Featured image" class="w-full h-auto mb-8">

        <!-- Blog Post Body -->
        <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto ">
        @foreach (explode("\n", $posting->body) as $index => $paragraph)
          <p>{{ $paragraph }}</p>
          @if ($index < count(explode("\n", $posting->body)) - 1)
              <br>
          @endif
        @endforeach
            <!-- Button Share -->
            <button class="text-blue-500 hover:text-blue-700 focus:outline-none" onclick="copyLink('{{ route('readmore', $posting->id) }}')">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mt-4">
                    <path fill-rule="evenodd" d="M15.75 4.5a3 3 0 11.825 2.066l-8.421 4.679a3.002 3.002 0 010 1.51l8.421 4.679a3 3 0 11-.729 1.31l-8.421-4.678a3 3 0 110-4.132l8.421-4.679a3 3 0 01-.096-.755z" clip-rule="evenodd" />
                </svg>
                Share
            </button>
        </div>
        
        <!-- Fitur Komentar -->
        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-4">Komentar</h2>
        </div>

        <!-- Modal Copy Link -->
        <div id="modal" class="fixed inset-0  items-center justify-center bg-gray-900 bg-opacity-75 hidden">
            <div class="bg-white rounded-lg p-6 ">
                <h2 class="text-xl font-bold mb-4">Link Sudah Tercopy!</h2>
                <p class="text-gray-700">{{ route('readmore', $posting->id) }}</p>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md" onclick="closeModal()">Close</button>
            </div>
        </div>


            <!-- Fitur Komen -->
            @foreach ($posting->comments as $comment)
                <div class="bg-gray-100 p-4 rounded-md mb-4">
                    <h4 class="font-bold">{{ $comment->name }}</h4>
                    <p>{{ $comment->body }}</p>
                </div>
            @endforeach

            <!-- Form Komentar -->
            <div class="mt-8">
                <h3 class="text-xl font-bold mb-4">Isi Komentar </h3>
                <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $posting->id }}">
                    <div class="mb-4">
                        <label for="name" class="block font-bold mb-2">Nama</label>
                        <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="body" class="block font-bold mb-2">Tulis Komentar</label>
                        <textarea name="body" id="body" rows="4" class="w-full px-4 py-2 border rounded-md" required></textarea>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Footer -->
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
      <p class="text-base font-bold tracking-wide text-gray-900">Nama Kelompok - NIM</p>
      <div class="flex">
        <a href="/"  title="Muhammad Iqbal Tri Mulyono" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">Muhammad Iqbal Tri Mulyono - 200511153</a>
      </div>
      <div class="flex">
        <a href="/" title="Rangga Arisandi" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">Rangga Arisandi - 200511150</a>
      </div>
      <div class="flex">
        <a href="/" title="Elsa Herdiyanti" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">Elsa Hardiyanti - 200511160</a>
      </div>
      <div class="flex">
        <a href="/" title="Dian Meliani" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">Dian Meliani - 190511150</a>
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

<!-- Function Javascript Untuk Copy Link -->
<!-- Function Javascript Untuk Notif Modal Copy Link -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function copyLink(link) {
        const el = document.createElement('textarea');
        el.value = link;
        document.body.appendChild(el);
        el.select();
        document.execCommand('copy');
        document.body.removeChild(el);
        
        // Show modal
        Swal.fire(
          'Link Tercopy!',
          'Klik Close!',
          'success'
        )
    }
</script>