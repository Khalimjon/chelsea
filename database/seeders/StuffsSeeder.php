<?php

namespace Database\Seeders;

use App\Models\Stuff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StuffsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stuff::factory()->count(4)->create();
    }
}
