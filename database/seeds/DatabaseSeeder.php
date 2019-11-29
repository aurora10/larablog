<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //protected $toTruncate  = ['posts'];


    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);

        /*foreach ($this->toTruncate as $table) {
            DB::table('Posts')->truncate();
        }*/

        $this->call(PostsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }
}
