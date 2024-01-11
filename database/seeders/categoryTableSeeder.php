<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $categoryRecords = [
           [ 'id'=>1,'parent_id'=>0,'section_id'=>1,'category_name'=>'T-shirts','category_image'=>'','category_discount'=>0,'description'=>'','url'=>'t-shirts',
            'meta_title'=>'','meta_description'=>'','meta_keywords'=>'','status'=>1 ],

           [ 'id'=>2,'parent_id'=>1,'section_id'=>1,'category_name'=>'Causal T-shirts','category_image'=>'','category_discount'=>0,'description'=>'',
           'url'=>'casual-t-shirts','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','status'=>1 ],
       ];

       category::insert($categoryRecords);
    }
}
