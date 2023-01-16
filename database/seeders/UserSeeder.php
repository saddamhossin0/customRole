<?php

namespace Database\Seeders;

use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::create([
            'first_name'        => 'Super',
            'last_name'         => 'Admin',
            'email'             => 'admin@test.net',
            'password'          => bcrypt(123456),
            'user_type'         => 'admin'
        ]);

        $activation = Activation::create($superAdmin);
        Activation::complete($superAdmin, $activation->code);
    }
}
