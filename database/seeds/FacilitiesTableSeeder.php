<?php

use Illuminate\Database\Seeder;
use App\Facility;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Facility::factory()->count(5)->create();
    }
}
