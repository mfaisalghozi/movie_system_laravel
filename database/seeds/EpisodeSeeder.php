<?php

use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        for($i=1;$i<=20;$i++){
            DB::table('episodes')->insert([
                'movie_id' =>  1,
                'episode' => $i,
                'title' => 'boys over flowers eps ' . strval($i),
            ]);
        }
        for($i=1;$i<=20;$i++){
            DB::table('episodes')->insert([
                'movie_id' =>  2,
                'episode' => $i,
                'title' => 'Descendant of the sun eps ' . strval($i),
            ]);
        }
        for($i=1;$i<=20;$i++){
            DB::table('episodes')->insert([
                'movie_id' =>  3,
                'episode' => $i,
                'title' => 'Jurassic Park eps ' . strval($i),
            ]);
        }
        for($i=1;$i<=20;$i++){
            DB::table('episodes')->insert([
                'movie_id' =>  4,
                'episode' => $i,
                'title' => 'iron man eps ' . strval($i),
            ]);
        }
        for($i=1;$i<=20;$i++){
            DB::table('episodes')->insert([
                'movie_id' =>  5,
                'episode' => $i,
                'title' => 'Game Of Thrones eps ' . strval($i),
            ]);
        }
        for($i=1;$i<=20;$i++){
            DB::table('episodes')->insert([
                'movie_id' =>  6,
                'episode' => $i,
                'title' => 'Chernobyl ' . strval($i),
            ]);
        }
        for($i=1;$i<=15;$i++){
                DB::table('episodes')->insert([
                    'movie_id' =>  7,
                    'episode' => $i,
                    'title' => 'Knives Out Episode ' . strval($i),
                ]);
        }
        for($i=1;$i<=20;$i++){
            DB::table('episodes')->insert([
                'movie_id' =>  8,
                'episode' => $i,
                'title' => 'Start Up Episode ' . strval($i),
            ]);
    }
    }
}
