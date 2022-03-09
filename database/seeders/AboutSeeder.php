<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                'namakolom'=>'01 empat kolom pertama',
                'ketkolom'=>'Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuere.'
            ],
            [
                'namakolom'=>'02 empat kolom kedua',
                'ketkolom'=>'Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.'
            ],
            [
                'namakolom'=>'03 empat kolom ketiga',
                'ketkolom'=>'Morbi ac interdum metus. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.'
            ],
            [
                'namakolom'=>'04 empat kolom keempat',
                'ketkolom'=>'liquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.'
            ]
            ]);
    }
}
