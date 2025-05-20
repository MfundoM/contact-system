<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('contacts')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'message' => $faker->paragraph,
                'created_at' => Carbon::now()->subDays(rand(0, 30)),
            ]);
        }
    }
}
