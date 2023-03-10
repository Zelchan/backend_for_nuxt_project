<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CatFact;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        CatFact::factory(20)->create();

        \App\Models\User::factory()->create([
            'name' => 'Andrew',
            'email' => 'beal.andrew01@gmail.com',
        ]);
    }
}
