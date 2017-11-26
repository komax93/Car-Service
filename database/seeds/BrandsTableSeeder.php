<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('brands')->delete();

        \DB::table('brands')->insert([
            0 => [
                'name' => 'Mercedes',
            ],
            1 => [
                'name' => 'BMW',
            ],
            2 => [
                'name' => 'Bentley',
            ],
        ]);
    }
}
