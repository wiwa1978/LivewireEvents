<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = User::create([
            'name' => 'Marlinda-individual',
            'email' => 'marlinda-individual@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Welcome@1234'),
            'organization' => false,
            'organization_name' => null,
            'website' => null,
        ]);

        $user2 = User::create([
            'name' => 'Wim-individual',
            'email' => 'wim-individual@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Welcome@1234'),
            'organization' => false,
            'organization_name' => null,
            'website' => 'organization' == true ? fake()->url() :  null,
        ]);


        $user3 = User::create([
            'name' => 'Marlinda-organisatie',
            'email' => 'marlinda-organisatie@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Welcome@1234'),
            'organization' => true,
            'organization_name' => fake()->company(),
            'website' => 'organization' == true ? fake()->url() :  null,
        ]);


        $user4 = User::create([
            'name' => 'Wim-organisatie',
            'email' => 'wim-organisatie@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Welcome@1234'),
            'organization' => true,
            'organization_name' => fake()->company(),
            'website' => 'organization' == true ? fake()->url() :  null,
        ]);

        User::factory()
            ->count(20)
            ->create();
    }
}
