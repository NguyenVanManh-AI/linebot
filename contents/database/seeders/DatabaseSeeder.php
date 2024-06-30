<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            AdminsSeeder::class,
            UsersSeeder::class,
            StatisticalChannelSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
