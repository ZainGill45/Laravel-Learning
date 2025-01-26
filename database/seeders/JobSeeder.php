<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class jobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory(200)->create();
    }
}
