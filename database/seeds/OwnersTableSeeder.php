<?php

use Illuminate\Database\Seeder;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS=0');

      DB::table('owners')->truncate();

      DB::table('owners')->insert(
        [
          ['name' => 'Dimas Jaya'],
          ['name' => 'Safinah Laras Persada'],
          ['name' => 'Varia']
        ]
      );
    }
}
