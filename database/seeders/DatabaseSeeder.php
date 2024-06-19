<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\Counter::factory(1)->create();

        // \App\Models\Product::factory(5)->create();
        \App\Models\Invoice::factory(10)->create();
        
    //    \App\Models\InvoiceItems::factory(5)->create();
    }
}
