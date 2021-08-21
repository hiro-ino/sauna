<?php

namespace Database\Factories;

use App\Facility;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacilityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Facility::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'picture' => $this->faker->url,
            'name' => $this->faker->company,
            'address' => $this->faker->address,
            'tel' => $this->faker->phoneNumber,
            'url' => $this->faker->url,
            'day_off' => "水曜日",
            'business_hour' => "7時~25時"
        ];
    }
}