<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class workSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('work')->insert([
            [
                'project'           => 'Laravel Inventory',
                'instansi'          => 'Course-net',
                'tanggal_deploy'    => date('y-m-d H:i:s'),
                'view'              => 'link web',
            ],
            [
                'project'           => 'Portofolio',
                'instansi'          => 'Personal',
                'tanggal_deploy'    => date('y-m-d H:i:s'),
                'view'              => 'link web',
            ],
        ]);
    }
}
