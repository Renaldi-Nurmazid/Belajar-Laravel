<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ClassD extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class')->insert([
            "namakelas" => "10 PPLG 1",
            "namajurusan" =>"Pengembang Perangkat Lunak dan Gim",
            "created_at" => date ("Y-m-d H:i:s"),

        ]);
        DB::table('class')->insert([
            "namakelas" => "10 PPLG 2",
            "namajurusan" =>"Pengembang Perangkat Lunak dan Gim",
            "created_at" => date ("Y-m-d H:i:s"),

        ]);
        DB::table('class')->insert([
            "namakelas" => "11 RPL 1",
            "namajurusan" =>"Rekayasa Perangkat Lunak",
            "created_at" => date ("Y-m-d H:i:s"),

        ]);DB::table('class')->insert([
            "namakelas" => "11 RPL 2",
            "namajurusan" =>"Rekayasa Perangkat Lunak",
            "created_at" => date ("Y-m-d H:i:s"),

        ]);
    }
}
