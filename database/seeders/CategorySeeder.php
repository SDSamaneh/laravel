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
            'فرم ها' => [
                'slug' => 'forms',
                'icon' => 'fa fa-futbol-o'
            ],
            'روش های اجرایی' => [
                'slug' => 'methods',
                'icon' => 'fa fa-futbol-o'
            ],
            'دستورالعمل' => [
                'slug' => 'structions',
                'icon' => 'fa fa-futbol-o'
            ],
            'فلوچارت' => [
                'slug' => 'flowchart',
                'icon' => 'fa fa-futbol-o'
            ],
            'سایر' => [
                'slug' => 'others',
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
