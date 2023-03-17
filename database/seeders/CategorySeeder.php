<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ["cat_name" => "Category A", "parent_id" => null], // 1
            ["cat_name" => "Category B", "parent_id" => null], // 2
            ["cat_name" => "SUB Category_A 1", "parent_id" => 1],
            ["cat_name" => "SUB Category_A 2", "parent_id" => 1],
            ["cat_name" => "SUB Category_B 1", "parent_id" => 2],
            ["cat_name" => "SUB Category_B 2", "parent_id" => 2],
            ["cat_name" => "SUB SUB Category_A_1 1", "parent_id" => 3],
            ["cat_name" => "SUB SUB Category_A_1 2", "parent_id" => 3],
            ["cat_name" => "SUB SUB Category_A_2 1", "parent_id" => 4],
            ["cat_name" => "SUB SUB Category_A_2 2", "parent_id" => 4],
            ["cat_name" => "SUB SUB Category_B_1 1", "parent_id" => 5],
            ["cat_name" => "SUB SUB Category_B_1 2", "parent_id" => 5],
            ["cat_name" => "SUB SUB Category_B_2 1", "parent_id" => 6],
            ["cat_name" => "SUB SUB Category_B_2 2", "parent_id" => 6],
        ]);
    }
}
