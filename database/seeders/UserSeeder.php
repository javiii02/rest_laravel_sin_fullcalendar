<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        $user = new User();
        $user->name="Javi";
        $user->email="javi@gmail.com";
        $user->email_verified_at = now();
        $user->password = '$2a$12$nmwJNQ5ys1.ESiIZs7mPi.Tb7xiGp2S5J5hMod/04HBgtJ41cjb3a';
        $user->phone = '123456789';
        $user->save();
        
    }
}
