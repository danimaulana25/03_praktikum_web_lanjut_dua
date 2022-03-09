<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'gambar'=>'gambar1.jpg',
                'nama'=>'Gunung bromo',
                'keterangan'=>'Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.',
                'lokasi'=>'Gunung Bromo berlokasi dan terletak di empat kabupaten pemerintahan Provinsi Jawa Timur. Yaitu di antara Kaputen Malang , Kabupaten Pasuruan, Kabupaten Probolinggo dan Kapupaten Lumajang.'
            ],
            [
                'gambar'=>'gambar2.jpg',
                'nama'=>'Danau Ranu',
                'keterangan'=>'Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.',
                'lokasi'=>'danau kecil yang terletak di diantara 3 desa di Kecamatan Grati, yaitu Desa Sumberdawesari, Desa Ranuklindungan, dan Desa Gratitunon, Pasuruan, Jawa Timur.'
            ],
            [
                'gambar'=>'gambar3.jpeg',
                'nama'=>'Gunung arjuno',
                'keterangan'=>'Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.',
                'lokasi'=>'di perbatasan Kota Batu, Kabupaten Malang, dan Kabupaten Pasuruan dan berada di bawah pengelolaan Taman Hutan Raya Raden Soerjo. '
            ],
            [
                'gambar'=>'gambar4.jpg',
                'nama'=>'Candi borobudur',
                'keterangan'=>'Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.',
                'lokasi'=>'Jl. Badrawati, Kw. Candi Borobudur, Borobudur, Kec. Borobudur, Kabupaten Magelang, Jawa Tengah'
            ]
            ]);
    }
}
