<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Dosen extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        $faker = Faker::create('id_ID');
        $data =[
            ['id'=>1,'nim_dosen'=>'D2022240029','nama_dosen'=>$faker->name()],
            ['id'=>2,'nim_dosen'=>'D2022240030','nama_dosen'=>$faker->name()],
            ['id'=>3,'nim_dosen'=>'D2022240031','nama_dosen'=>$faker->name()],
        ];
        DB::table('dosen')->insert($data);
    }
}
