<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Player::create([
            'name' => 'Tony Krogh',
            'ign' => 'VVVTony',
            'photo' => 'link_photo_tony',
            'instagram' => 'https://instagram.com/tony',
            'facebook' => 'https://facebook.com/tony',
            'team_id' => 1, // Sesuaikan dengan ID tim Veni Vidi Vici
        ]);

        Player::create([
            'name' => 'Stig Olsen',
            'ign' => 'VVVStig',
            'photo' => 'link_photo_stig',
            'instagram' => 'https://instagram.com/stig',
            'facebook' => 'https://facebook.com/stig',
            'team_id' => 1, // Sesuaikan dengan ID tim Veni Vidi Vici
        ]);

        Player::create([
            'name' => 'Jannik Abildgaard',
            'ign' => 'VVVJannik',
            'photo' => 'link_photo_jannik',
            'instagram' => 'https://instagram.com/jannik',
            'facebook' => 'https://facebook.com/jannik',
            'team_id' => 1, // Sesuaikan dengan ID tim Veni Vidi Vici
        ]);

        Player::create([
            'name' => 'Steffen Wulff',
            'ign' => 'VVVSteffen',
            'photo' => 'link_photo_steffen',
            'instagram' => 'https://instagram.com/steffen',
            'facebook' => 'https://facebook.com/steffen',
            'team_id' => 1, // Sesuaikan dengan ID tim Veni Vidi Vici
        ]);

        Player::create([
            'name' => 'Storm Mork',
            'ign' => 'VVVStorm',
            'photo' => 'link_photo_storm',
            'instagram' => 'https://instagram.com/storm',
            'facebook' => 'https://facebook.com/storm',
            'team_id' => 1, // Sesuaikan dengan ID tim Veni Vidi Vici
        ]);

    }
}
