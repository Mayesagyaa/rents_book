<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = 
        [ 
            'comic', 'novel', 'fiction', 'romance', 'history', 'action',
            'horror', 'science', 'encylocpedia', 'science fiction', 'comedy',
            'non-fictions'
        ];
    foreach($data as $value)
    {
        Category::insert([
            'name'=> $value
        ]);
        
    }
 }
}
