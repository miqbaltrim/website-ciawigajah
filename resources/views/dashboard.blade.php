<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white bg-blue-500 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="container" style="margin-top: 50px;">
            <div class="flex justify-center">
  <p class="text-center dark:text-white text-black">Laravel CRUD With Multiple Image Upload</p>
</div>


<a href="/create" class="bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-4 rounded">Add New Post</a>

<table class="min-w-full border divide-y divide-gray-200">
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
  @foreach ($posts as $post)
    <tr >
      <td class="px-4 py-2 dark:text-black text-black">{{ $post->id }}</td>
      <td class="px-4 py-2 dark:text-white text-black">{{ $post->title }}</td>
      <td class="px-4 py-2 dark:text-white text-black">{{ $post->author }}</td>
      <td class="px-4 py-2 dark:text-white text-black">{{ $post->body }}</td>
      <td class="px-4 py-2 dark:text-white text-black"><img src="cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
      <td class="px-4 py-2 dark:text-white text-black"><a href="/edit/{{ $post->id }}" class="btn btn-outline-primary">Update</a></td>
      <td class="px-4 py-2 dark:text-white text-black"><form action="/delete/{{ $post->id }}" method="post">
                <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                @csrf
                @method('delete')
            </form></td>
    </tr>
    @endforeach 

  </tbody>
</table>

<!-- <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Description</th>
        <th>Cover</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>


        @foreach ($posts as $post)
     <tr>
           <th scope="row">{{ $post->id }}</th>
           <td>{{ $post->title }}</td>
           <td>{{ $post->author }}</td>
           <td>{{ $post->body }}</td>
           <td><img src="cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
           <td><a href="/edit/{{ $post->id }}" class="btn btn-outline-primary">Update</a></td>
           <td>
               <form action="/delete/{{ $post->id }}" method="post">
                <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                @csrf
                @method('delete')
            </form>
           </td>

       </tr>
       @endforeach

    </tbody>
  </table> -->
</div>
<form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="text-center bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-4 rounded" :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
