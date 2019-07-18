<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categories = [
        [
          'name' => 'Sport',
          'slug'  => 'sport'
        ],
        [
          'name' => 'Informatica',
          'slug'=> 'informatica',
        ],
        [
          'name' => 'Storia',
          'slug'=> 'storia'
        ],
        [
          'name' => 'Arte',
          'slug' => 'arte'
        ]
      ];

      foreach ($categories as $category) {
        $new_category = new Category();
        $new_category->fill($category);
        $new_category->save();
      }
    }
}
