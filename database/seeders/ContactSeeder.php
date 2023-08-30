<?php

namespace Database\Seeders;

use App\Models\Contact; 
use Illuminate\Database\Seeder;



class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::create([
            'alamat' => 'jl. denki ',
            'email' => 'KecamatanRegol54@gmail.com',
            'telepon' => '08978679879',
            'maps_embed' => 'maps.com',
        ]);
    }
}

