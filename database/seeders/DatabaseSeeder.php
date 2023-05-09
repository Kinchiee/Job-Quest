<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'Juan Dela Cruz',
            'email' => 'juan@asdasdasd.com'
        ]);
        Listing::factory(10)->create([
            'user_id' => $user->id
        ]);
    }
}
