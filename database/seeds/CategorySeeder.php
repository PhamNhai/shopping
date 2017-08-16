<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'beauty',
        ]);

        DB::table('categories')->insert([
            'name' => 'food',
        ]);

        DB::table('categories')->insert([
            'name' => 'fashion',
        ]);

        DB::table('categories')->insert([
            'name' => 'electronic',
        ]);

        DB::table('categories')->insert([
            'name' => 'home',
        ]);

        DB::table('categories')->insert([
            'name' => 'hobby',
        ]);
    }
}

