<?php

namespace Database\Factories;

use App\Models\User;
use App\Enums\AnimalSize;
use App\Enums\AnimalGender;
use App\Enums\AnimalStatus;
use App\Enums\ApprovalState;
use App\Enums\AnimalLocation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $published_state = fake()->randomElement(['Draft', 'Published']);

        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Smknstd\FakerPicsumImages\FakerPicsumImagesProvider($faker));

        // return a string that contains a url like 'https://picsum.photos/800/600/'

        $type = fake()->randomElement(['Dog', 'Cat', 'Other']);

        return [
            'name'  => $type . '-' . fake()->numberBetween(1, 50),
            'slug'  => fake()->slug(3),
            'featured' => fake()->boolean(10),
            'published_state' => $published_state,
            'approval_state' => fake()->randomElement(ApprovalState::cases()),
            'published_at' => $published_state == 'Published' ? fake()->dateTimeBetween('-1 Week', '-1 Day') :  null,
            'published' => $published_state == 'Published' ? True :  False,
            'user_id' => User::query()->inRandomOrder()->first()?->id ?? User::factory(),
            'animal_type' => $type,
            'location' => fake()->randomElement(AnimalLocation::cases()),
            'age' => '1-2 years',
            'gender' => fake()->randomElement(AnimalGender::cases()),
            'status' => fake()->randomElement(AnimalStatus::cases()),
            'size' => fake()->randomElement(AnimalSize::cases()),
            'description' => fake()->paragraphs(fake()->numberBetween(4, 8), true),
            'breed' => fake()->words(2, asText: true),
            'reason_adoption' => fake()->words(2, asText: true),
            'sterilized' => fake()->boolean(),
            'chipped' => fake()->boolean(),
            'passport'  => fake()->boolean(),
            'vaccinated' => fake()->boolean(),
            'rabies' => fake()->boolean(),
            'medicins' => fake()->boolean(),
            'special_food' => fake()->boolean(),
            'behavioural_problem' => fake()->boolean(),
            'kids_friendly_6y' => fake()->boolean(),
            'kids_friendly_14y' => fake()->boolean(),
            'cats_friendly' => fake()->boolean(),
            'dogs_friendly' => fake()->boolean(),
            'environment' => fake()->paragraphs(fake()->numberBetween(4, 8), true),
            'well_behaved' => fake()->boolean(),
            'playful' => fake()->boolean(),
            'everybody_friendly' => fake()->boolean(),
            'affectionate' => fake()->randomElement([true, false]),
            'needs_garden' => fake()->boolean(),
            'potty_trained' => fake()->boolean(),
            'car_friendly' => fake()->boolean(),
            'home_alone' => fake()->boolean(),
            'knows_commands' => fake()->boolean(),
            'experience_required' => fake()->boolean(),
            'photo_featured' => $faker->imageUrl(width: 800, height: 600, randomize: false, id: fake()->numberBetween(1, 100)),
            'photos_additional' => [
                $faker->imageUrl(width: 800, height: 600, randomize: false, id: fake()->numberBetween(1, 100)), $faker->imageUrl(width: 800, height: 600, randomize: false, id: fake()->numberBetween(1, 100)), $faker->imageUrl(width: 800, height: 600, randomize: false, id: fake()->numberBetween(1, 100))
            ],
        ];
    }
}
