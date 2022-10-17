<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            'T-Shirt',
            'Jackets',
            'Coats',
            'Suites',
        ];

        collect($data)->each(fn ($item) => Category::factory()->create(['name' => $item]));
    }
}
