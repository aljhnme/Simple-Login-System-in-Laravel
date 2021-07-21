<?php

use Illuminate\Database\Seeder;
use App\User;

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
           'name'     => 'mark stevons',
           'email'    => 'mark22@gmail.com',
           'password' => Hash::make('password'),
           'remember_token' =>Str::random(10)

        ]);
    }
}
