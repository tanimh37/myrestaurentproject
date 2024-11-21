<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\SpecialOffer::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // \App\Models\Customer::create([
        //     'name' => 'Tanim Hossain',
        //     'email' => 'tanimh39@gmail.com',
        //     'password' => Hash::make('admin123')
        // ]);

        // \App\Models\Admin::create([
        //     'name' => 'Abdullah',
        //     'email' => 'tanimh33@gmail.com',
        //     'password' => Hash::make('admin123')
        // ]);
    }
}
