<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Admin::create([
            'name'     => $faker->name,
            'email'    => 'admin@admin.com',
            'mobile'   => '9130257752',
            'password' => bcrypt('password'),
        ]);
    }
}
