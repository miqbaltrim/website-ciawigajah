<?php

namespace Database\Seeders;

use App\Models\Post as ModelsPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class post extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsPost::create([
        'author'=>'iqbal',
        'title'=>'Berita Terhangat',
        'body'=>'Kari copy bae', 
        'cover'=>'01.jpg', 
        ]);
    }
}
