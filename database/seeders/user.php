<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsUser::create([
        'name'=>'rangga',
        'email'=>'rangga@gmail.com',
        'email_verified_at'=>now(),
        'password'=>bcrypt('12345678'), 
        ]);
        ModelsUser::create([
        'name'=>'iqbal',
        'email'=>'iqbal@gmail.com',
        'email_verified_at'=>now(),
        'password'=>bcrypt('12345678'), 
        ]);
        
    }
}
