<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name' => 'Your name or name of your company',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna orci, convallis non malesuada eget, finibus quis quam. Suspendisse metus justo, pulvinar eget tincidunt at, bibendum sit amet elit. Aliquam tincidunt luctus venenatis.',
        ]);
    }
}
