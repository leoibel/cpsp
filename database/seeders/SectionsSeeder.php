<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Section::create([
            'name' => 'gallery',
        ]);
        Section::create([
            'name' => 'logo',
        ]);
        Section::create([
            'name' => 'header',
        ]);
    }
}
