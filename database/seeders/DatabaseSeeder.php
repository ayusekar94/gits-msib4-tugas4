<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'Nim' => '2041720140',
            'Nama' => 'Ananda Ayu Sekar',
            'kelas' => 'TI-3A',
            'jurusan' => 'Teknologi Informasi',
        ]);
    }
}
