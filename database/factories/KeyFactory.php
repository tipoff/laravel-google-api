<?php

declare(strict_types=1);

namespace Tipoff\GoogleApi\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tipoff\GoogleApi\Models\Key;

class KeyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Key::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->unique()->slug,
            'value' => $this->faker->word,
        ];
    }
}
