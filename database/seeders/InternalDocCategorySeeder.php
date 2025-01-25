<?php

namespace Database\Seeders;

use App\Models\InternalDocCategory;
use Illuminate\Database\Seeder;

class InternalDocCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $internaldoc = [
            'فرم ها' => [
                'slug' => 'forms',
                'icon' => 'fa fa-futbol-o'
            ],
            'روش های اجرایی' => [
                'slug' => 'implementmethods',
                'icon' => 'fa fa-futbol-o'
            ],
            'دستورالعمل ها' => [
                'slug' => 'instructions',
                'icon' => 'fa fa-futbol-o'
            ],
            ' فلوچارت ها' => [
                'slug' => 'flowchart',
                'icon' => 'fa fa-futbol-o'
            ],
            'سایر' => [
                'slug' => 'other',
                'icon' => 'fa fa-futbol-o'
            ]
        ];
        foreach ($internaldoc as $internaldocName => $details) {
            InternalDocCategory::create([
                'name' => $internaldocName,
                'slug' => $details['slug'],
                'icon' => $details['icon']
            ]);
        }
    }
}
