<?php

namespace Database\Seeders;

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
        $categories = [
            'ورزشی' => [
                'slug' => 'sport',
                'icon' => 'fa fa-futbol-o'
            ],
            'طنز' => [
                'slug' => 'fun',
                'icon' => 'fa fa-futbol-o'
            ],
            'تاریخی' => [
                'slug' => 'history',
                'icon' => 'fa fa-futbol-o'
            ]
        ];
        foreach ($categories as $categoryName => $details) {
            Category::create([
                'name' => $categoryName,
                'slug' => $details['slug'],
                'icon' => $details['icon']
            ]);
        }
    }
}
