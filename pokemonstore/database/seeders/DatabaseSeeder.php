<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Pokemon::factory(8)->create();
        
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@test.com';
        $user->password = '1234';
        $user->role = 'admin';

        $user->save();
    }
}
