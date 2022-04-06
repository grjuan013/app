<?php

namespace Database\Seeders;

use DB;

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
        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'User1',
            'email' => 'user1@email.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@email.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Juan Carlos Diaz',
            'email' => 'juanca2@gmail.com',
            'password' => bcrypt('juan12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Ivan Lopez',
            'email' => 'ivanlo@gmail.com',
            'password' => bcrypt('ivan12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Felipe Gomez',
            'email' => 'felipego@gmail.com',
            'password' => bcrypt('felipe12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Juan Pablo Grijalba Lopez',
            'email' => 'grjuan013@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        DB::table('users')->insert([
            'name' => 'Joseph Saul Burbano Villota',
            'email' => 'joseph22@gmail.com',
            'password' => bcrypt('joseph12345'),
        ]);
    }
}
