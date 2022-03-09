<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'gambar'=>'gambar1.jpg',
                'nama'=>'Gunung bromo',
                'tanggal'=>'May 30, 2022',
                'keterangan'=>'Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.'
            ],
            [
                'gambar'=>'gambar2.jpg',
                'nama'=>'Danau Ranu',
                'tanggal'=>'Feb 25, 2022',
                'keterangan'=>'Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.'
            ],
            [
                'gambar'=>'gambar3.jpeg',
                'nama'=>'Gunung arjuno',
                'tanggal'=>'Jan 15, 2022',
                'keterangan'=>'Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.'
            ],
            [
                'gambar'=>'gambar4.jpg',
                'nama'=>'Candi borobudur',
                'tanggal'=>'april 27, 2022',
                'keterangan'=>'Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.'
            ]
            ]);
    }
}
