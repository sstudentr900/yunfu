<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Flights;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class PostFactory extends Factory
{

    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'flights_id' => null, // 將在 Seeder 中動態設置
          'title' => Str::limit($this->faker->sentence(3), 20, ''), // 確保不超過 20 字符
          'content' => Str::limit($this->faker->paragraph(), 100, ''), // 確保不超過 100 字符
        ];
    }
}
