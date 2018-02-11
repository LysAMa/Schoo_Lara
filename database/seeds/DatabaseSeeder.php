<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        User::create([
        	'name' => 'user',
        	'email' => 'user@schoda.com',
        	'password' => bcrypt('root'),
        	'langue' => 'En'
        	]);
    }
}

