<?php

use App\User;
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
        User::create([
            'name' => 'Omar',
            'email' => 'onicolasmartin@gmail.com',
            'password' => bcrypt('admin')
        ]);
    }
}
