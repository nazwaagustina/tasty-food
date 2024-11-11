<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'tasty_food' => 'Ini adalah deskripsi tentang Tasty Food.',
            'visi' => 'Visi kami adalah menjadi yang terbaik.',
            'misi' => 'Misi kami adalah menyediakan makanan lezat dan berkualitas.'
        ]);
    }
}
