<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(),
            'content'=>$this->faker->text(),
            'image'=>$this->faker->image(storage_path('app/public/posts'),640,480, null, false)
        ];
    }
}
