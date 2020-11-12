<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Boys Over Flower',
            'description' => 'Film Korea kalo ga salah tentang sekumpulan anak laki dewasa yang sudah besar, dan berpetualang di korea',
            'rating' => 3,
            'img_path' => '/storage/images/series-02.jpg',
        ]);
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Desendants Of The Sun',
            'description' => 'Film Korea kalo ga salah tentang sekumpulan anak laki dewasa yang sudah besar, dan berpetualang di korea',
            'rating' => 2,
            'img_path' => '/storage/images/series-01.jpg',
        ]);
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Jurassic Park',
            'description' => 'Dunia yang penuh hewan hewan langka, dihidupkan, tapi juga mematikan',
            'rating' => 5,
            'img_path' => '/storage/images/jurassicPark.jpg',
        ]);
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Iron Man',
            'description' => 'Perjuangan seorang jenius yang ingin menyelamatkan dunia, dengan bantuan teknologi',
            'rating' => 2,
            'img_path' => '/storage/images/ironMan.jpg',
        ]);
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Game Of Thrones',
            'description' => 'Series terbaik ini mahh, kacau parahhh gokill, banyak perangnyaa, character develpment nya memukaii, tapi season 8 kacau',
            'rating' => 4,
            'img_path' => '/storage/images/gameOfThrones.jpg',
        ]);
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Chernobyl',
            'description' => 'Series documentary mengenai pasca kejadian chernobyl, yakni kebocoran radiasi nuklir pada sebuah lembaga pusat pemberdayaan energi nuklir, sangat kontroversial',
            'rating' => 5,
            'img_path' => '/storage/images/chernobyl.jpg',
        ]);
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Knives Out',
            'description' => 'Harlan Thrombey (Christopher Plummer) adalah penulis novel misteri yang kaya raya. Di ulang tahunnya yang ke-85 ia tewas secara misterius. Keluarga Harlan yang datang berkumpul kini menjadi tersangka.',
            'rating' => 4,
            'img_path' => '/storage/images/knivesout.jpg',
        ]);
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Start-Up',
            'description' => 'Start-Up adalah seri televisi Korea Selatan tahun 2020 yang dibintangi oleh Bae Suzy, Nam Joo-hyuk, Kim Seon-ho, dan Kang Han-na.',
            'rating' => 3,
            'img_path' => '/storage/images/startup.jpg',
        ]);
    }
}
