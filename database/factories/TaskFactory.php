<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(15),
            'salary' => rand(0,1000000),
            'pic' => $this->faker->imageUrl($width = 640, $height = 480),
            'desc' => $this->faker->realText,
            'enabled' => $this->faker->randomElement(array(true,false))
        ];
    }
}
