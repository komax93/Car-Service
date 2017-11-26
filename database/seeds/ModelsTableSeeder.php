<?php

use Illuminate\Database\Seeder;

class ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('models')->delete();

        \DB::table('models')->insert([
            0 => [
                'name' => 'C63',
                'brand_id' => '1'
            ],
            1 => [
                'name' => 'S600',
                'brand_id' => '1'
            ],
            2 => [
                'name' => 'G63',
                'brand_id' => '1'
            ],
            3 => [
                'name' => 'i3S',
                'brand_id' => '2'
            ],
            4 => [
                'name' => 'X5',
                'brand_id' => '2'
            ],
            5 => [
                'name' => 'X6',
                'brand_id' => '2'
            ],
            6 => [
                'name' => 'Continental',
                'brand_id' => '3'
            ],
            7 => [
                'name' => 'Mulsanne',
                'brand_id' => '3'
            ],
            8 => [
                'name' => 'Bentayga',
                'brand_id' => '3'
            ],
        ]);
    }
}
