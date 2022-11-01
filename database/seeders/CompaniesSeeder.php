<?php

namespace Database\Seeders;

use App\Models\companies;
use App\Models\company;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        companies::factory(6)->create();
    }
}
