<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'name' => 'Veni Vidi Vici',
            'logo' => 'link_logo',
            'description' => 'Paragraf lorem ipsum...',
            'achievement' => 'List lorem ipsum...',
        ]);

    }
}
