<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Owner;
use App\Dokumen;
use App\Stopmap;

class DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->truncate();

        $details = [];
        $faker   = Faker::create();

        for($i=1; $i <= 20; $i++)
        {
          $details[] = [
            'no_dokumen' => $faker->buildingNumber."-".$faker->postcode."-200".rand(4,7),
            'tgl_dokumen' => new Datetime,
            'owner_id'  => rand(1, 3),
            'dokumen_id' => rand(1, 5),
            'stopmap_id' => rand(1, 4),
            'user_id' => rand(1, 2)
          ];
        }
        DB::table('details')->insert($details);
    }
}
