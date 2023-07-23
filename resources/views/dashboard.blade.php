<link rel="icon" type="image/svg+xml" href="/images/Ried-favicon.svg">

<title>Baca RIED</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Konten Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto mt-8">
                    <div class="flex justify-center mb-4">
                        <p class="text-center dark:text-white text-black"></p>
                    </div>

                    <a href="/create" class="bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-4 rounded">Add New Post</a>

                    <table class="table-auto min-w-full border divide-y divide-gray-200 mt-4">
                        <thead>
                            <tr>
                                <th scope="col" class="px-4 py-2 bg-gray-200">Nomor</th>
                                <th scope="col" class="px-4 py-2 bg-gray-200">Title</th>
                                <th scope="col" class="px-4 py-2 bg-gray-200">Author</th>
                                <th scope="col" class="px-4 py-2 bg-gray-200">Content</th>
                                <th scope="col" class="px-4 py-2 bg-gray-200">Cover</th>
                                <th scope="col" class="px-4 py-2 bg-gray-200">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $index = ($posts->currentPage() - 1) * $posts->perPage() + 1;
                            @endphp
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="px-4 py-2 dark:text-white text-black">{{ $index }}</td>
                                    <td class="px-4 py-2 dark:text-white text-black">{{ $post->title }}</td>
                                    <td class="px-4 py-2 dark:text-white text-black">{{ $post->author }}</td>
                                    <td class="px-4 py-2 dark:text-white text-black">{{ Str::limit($post->body, 100) }}</td>
                                    <td class="px-4 py-2 dark:text-white text-black"><img src="cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                                    <td class="px-4 py-2 dark:text-white text-black">
                                        <a href="/edit/{{ $post->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</a>
                                        <form action="/delete/{{ $post->id }}" method="post" onsubmit="confirmDelete(event)">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-5 rounded mt-2">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @php
                                    $index++;
                                @endphp
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
                <div class=" flex justify-center">
                    {{ $posts->onEachSide(1)->links('pagination::bootstrap-4')->withClass('pagination-lg') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<!-- Script SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(event) {
        event.preventDefault(); // Prevent form submission

        Swal.fire({
            title: 'Yakin nggak nich mau dihapus?',
            showDenyButton: true,
            confirmButtonText: 'Hapus',
            denyButtonText: "Jangan!",
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit(); // Submit the form
            } else if (result.isDenied) {
                Swal.fire('Nahkan ngga jadi!');
            }
        });
    }
</script>

