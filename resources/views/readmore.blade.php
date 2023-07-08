<!DOCTYPE html>
<html>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
  <title>Detail Blog</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #f2f2f2;
      padding: 20px;
      text-align: center;
    }
    h1 {
      margin: 0;
    }
    .blog-image {
      display: block;
      margin: 0 auto; /* Memindahkan gambar ke tengah */
    }
    .blog-content {
      max-width: 800px;
      margin: 20px auto;
      padding: 0 20px;
      text-align: justify; /* Mengatur rata kiri dan rata kanan */
    }
  </style>
</head>
<body>
  <header>
    <h1>{{$posting->title}}</h1>
    
  </header>
  
  <img src="{{asset('cover/'.$posting->cover)}}" alt="Header Gambar" class="blog-image w-48 h-auto">
  
  <div class="blog-content">
    <h2 class="text-sm">author: {{$posting->author}}</h2>
    <p>{{$posting->body}}</p>
    <!-- Tambahkan paragraf atau konten lain sesuai kebutuhan -->
  </div>
</body>
</html>
