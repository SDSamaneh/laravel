<?php

namespace Database\Factories;

use App\Models\Video;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class VideoFactory extends Factory
{
    protected $model = Video::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        // $persianFaker = FakerFactory::create('fa_IR');

        // return [
        //     'name' => $persianFaker->name(),
        //     'url' => $this->faker->imageUrl(446, 240, 'animals', true),
        //     'length' => $this->faker->randomNumber(3),
        //     'slug' => $this->faker->slug(),
        //     'descrption' => $persianFaker->realText()
        // ];
        return [
            'name' => $this->faker->name(),
            'url' => $this->faker->imageUrl(360, 360, 'animals', true, 'cats'),
            'length' => $this->faker->randomNumber(3),
            'slug' => $this->faker->slug(),
            'descrption' => $this->faker->realText(),
            'thumbnail' => 'https://loremflickr.com/446/240/world?random=' . rand(1, 99)
        ];
    }
}
