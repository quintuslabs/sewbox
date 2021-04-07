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
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('password'),
            
        ]);

       DB::table('users')->insert([
            'name' => 'Test User',
            'email' => 'testuser@email.com',
            'password' => bcrypt('password'),
            
        ]);
    }
}
