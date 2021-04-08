<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('news')->insert($this->getData());
    }

    protected function getData(): array {
        $faker = Factory::create();
        $data = [];

        for ($i=0; $i < 3; $i++) { 
            $data[] = [
                'heading' => $faker->sentence(mt_rand(3, 10)),
                'content' => $faker->text(mt_rand(100, 300)),
                'author' => $faker->name(),
                'category' => 'Ca' . $faker->word(1),
                'date' => $faker->iso8601($min = 'now'), 
            ];
        }

        //dd($data);
        return $data;
    }
}
