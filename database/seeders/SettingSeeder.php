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
            'name' => 'Matheus Teixeira',
            'description' => 'Sou desenvolvedor back-end e evangelista das boas práticas. Gosto de viajar e conhecer pessoas. Eu escrevo códigos, tiro fotos de coisas do dia a dia e coleciono discos de vinil.',
        ]);
    }
}
