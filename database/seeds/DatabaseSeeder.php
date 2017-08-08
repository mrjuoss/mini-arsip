<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DokumensTableSeeder::class);
        $this->call(OwnersTableSeeder::class);
        $this->call(StopmapsTableSeeder::class);
    }
}
