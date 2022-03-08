<?php

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
        $this->call(adminTableSeeder::class);
        $this->call(kamarTableSeeder::class);
        $this->call(pemesananTableSeeder::class);
        $this->call(fasilitasKamarTableSeeder::class);
    }
}
