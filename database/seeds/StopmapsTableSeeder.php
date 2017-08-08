<?php

use Illuminate\Database\Seeder;

class StopmapsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS=0');

      DB::table('stopmaps')->truncate();

      DB::table('stopmaps')->insert(
        [
          ['name' => 'Merah'],
          ['name' => 'Kuning'],
          ['name' => 'Hijau'],
          ['name' => 'Biru']
        ]
      );
    }
}
