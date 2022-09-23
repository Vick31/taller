<?php

namespace Database\Seeders;

use App\Models\invoice_detail;
use Faker\Provider\ar_EG\Company;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            CompaniesSeeder::class,
            UserSeeder::class,
            ArticleSeeder::class,
            ClientSeeder::class,
            IngredienteSeeder::class,
            InvoiceSeeder::class,
            InvoiceDetailSeeder::class,
            OptionSeeder::class,
        ]);
    }
}
