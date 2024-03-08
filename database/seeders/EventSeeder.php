<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Category;
use App\Models\Organisateur;
use Faker\Factory as Faker;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Use Faker to generate fake data
        $faker = Faker::create();

        // Get category and organisateur IDs
        $categoryIds = Category::pluck('id')->toArray();
        $organisateurIds = Organisateur::pluck('id')->toArray();

        // Insert fake data
        for ($i = 0; $i < 10; $i++) { // Insert 20 fake events, adjust as needed
            Event::create([
                'category_id' => 3,
                'organisateur_id' => $faker->randomElement($organisateurIds),
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'date' => $faker->dateTimeBetween('now', '+1 year'),
                'places_available' => $faker->numberBetween(0, 100),
                'location' => $faker->address,
                'picture'=>$faker->imageUrl(640, 480),
                'type_of_reservation' => $faker->randomElement(['automatique', 'manuelle']),
            ]);
        }
    }
}
