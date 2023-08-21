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

@include('header')

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



@include('footer')

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