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
        // turn off foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Reset Users Table
        DB::table('users')->truncate();

        // Insert 3 Dummy Users
        DB::table('users')->insert([
            [
                'name' => 'Budi',
                'email' => 'chandika7d@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'John Doe',
                'email' => 'johndoe@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Andi',
                'email' => 'andi@gmail.com',
                'password' => bcrypt('123456'),
            ],
        ]);
    }
}
