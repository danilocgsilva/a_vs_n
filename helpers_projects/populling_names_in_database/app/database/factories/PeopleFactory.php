<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Person;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PeopleFactory extends Factory
{
    protected $model = Person::class;
    
    /**
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}
