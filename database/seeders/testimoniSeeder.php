<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class testimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimoni_pengunjung')->insert([
            [
                'nama'       => 'dani dani',
                'umur'       => 12,
                'saran'       => 'tingkatkan coy',
              
            ],
            [
                'nama'       => 'kinan',
                'umur'       => 90,
                'saran'       => 'mantap bro',
              
            ],
            ]);
    }
}
