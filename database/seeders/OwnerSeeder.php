<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create( [
            'name' => 'Owner',
            'email' => 'owner@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('owner'),
        ]);
        $user->assignRole('user', 'owner');
    }
}
