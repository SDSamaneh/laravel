<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'file' => $this->faker->file(),
            'descrption' => $this->faker->realText(),
            'internal_doc_id' => 'InternalDocCategory::first() ?? InternalDocCategory::factory()'
        ];
    }
}
