<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\OwnerSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {             
        //$this->call(AdminSeeder::class);
        $this->call(OwnerSeeder::class);
        //$this->call(RoleSeeder::class);
    }       

}
