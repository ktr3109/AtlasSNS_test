<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'あいうえお','mail' => 'a@gmail.com','password' => bcrypt('test1234')
        ]);
        DB::table('users')->insert([
            'username' => 'かきくけこ','mail' => 'ka@gmail.com','password' => bcrypt('test1234')
        ]);
        DB::table('users')->insert([
            'username' => 'さしすせそ','mail' => 'sa@gmail.com','password' => bcrypt('test1234')
        ]);
        DB::table('users')->insert([
            'username' => 'たちつてと','mail' => 'ta@gmail.com','password' => bcrypt('test1234')
        ]);
        DB::table('users')->insert([
            'username' => 'なにぬねの','mail' => 'na@gmail.com','password' => bcrypt('test1234')
        ]);
        DB::table('users')->insert([
            'username' => 'はひふへほ','mail' => 'ha@gmail.com','password' => bcrypt('test1234')
        ]);
        DB::table('users')->insert([
            'username' => 'まみむめも','mail' => 'ma@gmail.com','password' => bcrypt('test1234')
        ]);
        DB::table('users')->insert([
            'username' => 'やゐゆゑよ','mail' => 'ya@gmail.com','password' => bcrypt('test1234')
        ]);
    }
}
