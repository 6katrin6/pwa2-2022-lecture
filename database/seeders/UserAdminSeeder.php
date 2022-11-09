<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserAdminSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        // user seeder        
        User::create([
            'first_name'        => 'Katrin',
            'last_name'         => 'Kvasnicova',
            'email'             => 'xprokeinova@stuba.sk',
            'password'          => Hash::make('password'),           
        ]);
        
        User::factory()->count(10)->create();
    }
}
