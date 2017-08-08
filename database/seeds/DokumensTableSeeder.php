<?php

use Illuminate\Database\Seeder;

class DokumensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('dokumens')->truncate();

        DB::table('dokumens')->insert(
          [
            ['name' => 'Surat Izin Usaha Perdagangan (SIUP)'],
            ['name' => 'Nomor Pokok Wajib Pajak (NPWP)'],
            ['name' => 'Tanda Daftar Perusahaan (TDP)'],
            ['name' => 'Sertifikat Alat'],
            ['name' => 'Sertifikat Pegawai']
          ]
        );
    }
}
