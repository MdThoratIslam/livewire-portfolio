<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $userFactory = new UserFactory();
        $data = $userFactory->definition();
        foreach ($data as $user) {
            User::create($user);
        }
        $this->call(
            [
                DivisionsSeeder::class,
                DistrictSeeder::class,
                PoliceStationSeeder::class,
            ]
        );
    }
}
