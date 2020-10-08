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
            'id' => 1,
            'name' => "Admin",
            'email' => "admin@nuvu.com",
            'password' => \Hash::make('Nuvu12!!'),
            'api_token' => Str::random(60),
        ]);
    }
}
