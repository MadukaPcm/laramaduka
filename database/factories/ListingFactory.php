<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $allTags = ['laravel', 'api', 'backend', 'frontend', 'devops', 'database', 'testing', 'php', 'javascript'];
        $randomTags = $this->faker->randomElements($allTags, 3); // Select exactly 3 random tags

        return [
            'title' => $this->faker->sentence(),
            'tags' => implode(', ', $randomTags),
            'location' => $this->faker->city(),
            'company' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
