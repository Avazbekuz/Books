<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use function Monolog\Formatter\format;
use function Ramsey\Uuid\Generator\increment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(3),
            'category_id' => rand(1,3),
            'author_id' => rand(1,3),
            'genres_id' => rand(1,1),
            'text' => fake()->sentence(10),
            'photo' => 'rasm.jpg',
            'book_pdf' => 'book.pdf',
            'show_count'=>rand(1,15),
            'download_count'=>rand(1,15),
            'year' => fake()->date('Y-m-d'),
        ];
    }
}
