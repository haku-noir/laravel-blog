<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('posts')->insert([
            'author' => 1,
            'title' => "$i 番⽬の投稿",
            'content' => "こんにちは。これはサンプルの投稿です。",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ]);
            sleep(1);
        }
    }
}
