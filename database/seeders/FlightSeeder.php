<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Flights;
use App\Models\Post;

class FlightSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // Flights::factory()->count(10)->create();
    // $this->call(FlightSeeder::class);
    Flights::factory()
      ->count(10)
      ->create()
      ->each(function ($flight) {
        Post::factory()
          ->count(2)
          ->create([
            'flights_id' => $flight->id,
          ]);
      });
  }
}
