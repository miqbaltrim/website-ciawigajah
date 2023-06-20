<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel CRUD With Multiple Image Upload</title>

        <!-- Tailwind CSS -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body class="bg-gray-800">

        <div class="container mx-auto mt-10">
            <div class="bg-fixed ..." style="background-image: url(...)"></div>
            <div class="flex justify-center">
                <div class="w-2/3">

                    <h3 class="text-center text-red-500 font-bold text-lg mb-4">Add New Post</h3>
                    <div class="bg-white shadow rounded p-4">
                        <form action="/post" method="post" enctype="multipart/form-data" class="flex flex-col">
                            @csrf
                            <input type="text" name="title" class="form-control mb-2 p-2 border border-gray-300 rounded w-full" placeholder="Title">
                            <input type="text" name="author" class="form-control mb-2 p-2 border border-gray-300 rounded w-full" placeholder="Author">
                            <textarea name="body" cols="20" rows="4" class="form-control mb-2 p-2 border border-gray-300 rounded w-full" placeholder="Body"></textarea>
                            <label class="mb-2">Cover Image</label>
                            <input type="file" id="input-file-now-custom-3" class="form-control mb-2 p-2 border border-gray-300 rounded" name="cover">
                            <label class="mb-2">Images</label>
                            <input type="file" id="input-file-now-custom-3" class="form-control mb-2 p-2 border border-gray-300 rounded" name="images[]" multiple>
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
