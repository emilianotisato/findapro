<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Location;
use App\Models\Provider;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create(['role' => 'user']);
        User::factory()->create([
            'role' => 'admin',
            'name' => 'Admin User',
            'email' => 'admin@findapro.com',
        ]);

        Location::factory(10)->create();

        $providers = Provider::factory(10)->create();

        $providers->each(function ($provider) {
            $provider->services()->saveMany(
                $services = \App\Models\Service::factory(rand(1, 3))->make(['provider_id' => $provider->id])
            );
            foreach ($services as $service) {
                $service->locations()->attach(Location::inRandomOrder()->first());
            }
        });
    }
}
