<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = category::class;
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph
        ];
    }

    /**
 * Create a new factory instance for the model.
 *
 * @return \Illuminate\Database\Eloquent\Factories\Factory
 */

}
