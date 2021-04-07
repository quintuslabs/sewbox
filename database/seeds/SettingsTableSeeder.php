<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'title' => 'Title',
            'logo' => 'images/settings/logo.png',
            'mini_logo' => 'images/settings/mini-logo.png',
            'fav_icon' => 'images/settings/fav_icon.ico',
            ]);
    }
}