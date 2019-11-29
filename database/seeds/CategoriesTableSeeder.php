<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'category 1']);
        DB::table('categories')->insert(['name' => 'category 2']);
        DB::table('categories')->insert(['name' => 'category 3']);
    }
}
