<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\productAttribute;

class productAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productAttributesRecords = [
            ['id'=>1,'product_id'=>1,'size'=>'Small','price'=>1200,'stock'=>10,'sku'=>'BCT001-S','status'=>1],
            ['id'=>2,'product_id'=>1,'size'=>'Medium','price'=>1300,'stock'=>20,'sku'=>'BCT001-M','status'=>1],
            ['id'=>3,'product_id'=>1,'size'=>'Large','price'=>1400,'stock'=>20,'sku'=>'BCT001-L','status'=>1]
        ];

        productAttribute::insert($productAttributesRecords);
    }
}
