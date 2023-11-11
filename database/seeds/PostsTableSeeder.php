<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(['user_id' => '1','post' => 'こんにちは']);
        DB::table('posts')->insert(['user_id' => '3','post' => 'test']);
        DB::table('posts')->insert(['user_id' => '1','post' => 'これはテストです。']);
        DB::table('posts')->insert(['user_id' => '5','post' => 'Hello']);
        DB::table('posts')->insert(['user_id' => '2','post' => 'おはよう']);
        DB::table('posts')->insert(['user_id' => '2','post' => 'じゅげむじゅげむ']);
        DB::table('posts')->insert(['user_id' => '4','post' => 'ごこうのすりきれ']);
        DB::table('posts')->insert(['user_id' => '6','post' => 'かいじゃりすいぎょの']);
        DB::table('posts')->insert(['user_id' => '3','post' => 'すいぎょうまつ']);
        DB::table('posts')->insert(['user_id' => '2','post' => '雲来松']);
        DB::table('posts')->insert(['user_id' => '5','post' => '風来松']);
    }
}
