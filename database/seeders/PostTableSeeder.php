<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,3) as $index)
        {
            DB::table('posts')->insert([
                'name' => $faker->sentence(5),
                'desc' => $faker->paragraph(2)
            ]);
        }
    }
}
