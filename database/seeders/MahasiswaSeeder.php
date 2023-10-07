<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');
        $data =[
            ['id'=>1,'NIM'=>'2022240029','Nama'=>$faker->name(),'Prodi'=>'Sistem Informasi'],
            ['id'=>2,'NIM'=>'2022240030','Nama'=>$faker->name(),'Prodi'=>'Sistem Informasi'],
            ['id'=>3,'NIM'=>'2022240031','Nama'=>$faker->name(),'Prodi'=>'Sistem Informasi'],
        ];
        DB::table('mahasiswa')->insert($data);
    }
}
