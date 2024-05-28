<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

        // Listing::create([
        //     "title" => "Lorem Ipsum Dolor",
        //     "tags" => "lorem, ipsum, dolor",
        //     "location" => "New York",
        //     "email" => "example@example.com",
        //     "website" => "http://example.com",
        //     "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
        // ]);

        // Listing::create([
        //     "title" => "Eiusmod Tempor Incididunt",
        //     "tags" => "eiusmod, tempor, incididunt",
        //     "location" => "San Francisco",
        //     "email" => "info@company.com",
        //     "website" => "http://company.com",
        //     "description" => "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
