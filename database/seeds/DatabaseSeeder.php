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
        // All seeders
        $this->call(
          [
            HotelsTableSeeder::class,
            PricelistrowsTableSeeder::class,
          ]);
    }
}
