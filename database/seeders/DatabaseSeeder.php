<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'id' => 1,
            "name" => "Yann August",
            "email" => "yann@august.me"],
            [
                "password" => Hash::make("123123123"),
            ]);

        Setting::updateOrCreate([
            'id' => 1,
            "name" => "PVN",
        ],
            [
                "tagline" => "Point de Vue Nature",
                "email_1" => "contact@pvnrdc.org",
            ]);
    }
}
