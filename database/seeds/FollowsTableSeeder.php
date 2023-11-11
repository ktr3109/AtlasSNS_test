<?php

use Illuminate\Database\Seeder;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('follows')->insert(['following_id' => '2','followed_id' => '1']);
        DB::table('follows')->insert(['following_id' => '3','followed_id' => '1']);
        DB::table('follows')->insert(['following_id' => '4','followed_id' => '1']);
        DB::table('follows')->insert(['following_id' => '1','followed_id' => '2']);
        DB::table('follows')->insert(['following_id' => '3','followed_id' => '2']);
        DB::table('follows')->insert(['following_id' => '4','followed_id' => '3']);
        DB::table('follows')->insert(['following_id' => '1','followed_id' => '4']);
        DB::table('follows')->insert(['following_id' => '1','followed_id' => '5']);
        DB::table('follows')->insert(['following_id' => '4','followed_id' => '5']);
        DB::table('follows')->insert(['following_id' => '7','followed_id' => '6']);
        DB::table('follows')->insert(['following_id' => '1','followed_id' => '7']);
        DB::table('follows')->insert(['following_id' => '5','followed_id' => '1']);
        DB::table('follows')->insert(['following_id' => '6','followed_id' => '1']);
    }
}
