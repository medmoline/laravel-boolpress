<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Post;
use Illuminate\Support\Str;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $new_category_1 = new Category();
        $new_category_1->name = 'Sport';
        $new_category_1->slug = Str::slug($new_category_1->name);
        $new_category_1->save();

        $new_category_2 = new Category();
        $new_category_2->name = 'Informatica';
        $new_category_2->slug = Str::slug($new_category_2->name);
        $new_category_2->save();

        $new_category_3 = new Category();
        $new_category_3->name = 'Arte';
        $new_category_3->slug = Str::slug($new_category_3->name);
        $new_category_3->save();

    }
}
