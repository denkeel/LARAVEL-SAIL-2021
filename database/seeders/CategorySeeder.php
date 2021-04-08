<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('categories')->insert($this->getData());
    }

    
    protected function getData(): array {
        $faker = Factory::create();
        $data = [];

        for ($i=0; $i < 3; $i++) { 
            $data[] = [
                'name' => 'Ca' . $faker->word(1),
            ];
        }

        //dd($data);
        return $data;
    }
}
