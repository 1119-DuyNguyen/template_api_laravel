<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WasteDictionary>
 */
class WasteDictionaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> $this->faker->name(),
            'description'=> $this->faker->name(),
            'img_url'=> $this->faker->name(),
            'is_recycle'=>true,
            'how_to_recycle'=> $this->faker->text(),
        ];
    }
}
