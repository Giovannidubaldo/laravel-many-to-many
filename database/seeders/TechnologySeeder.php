<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            'HTML',
            'CSS',
            'Javascript',
            'VueJs',
            'PHP',
            'Laravel'
        ];

        foreach ($array as $item) {
            $technology = new Technology();

            $technology->name = $item;
            $technology->slug = Str::slug($item, '-');

            $technology->save();
        }
    }
}
