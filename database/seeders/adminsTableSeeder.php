<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            [
                'id'=>1,'name'=>'admin','type'=>'admin','mobile'=>'07039730125','email'=>'admin@admin.com','password'=>'$2y$10$2TO8X7cWKwLomnByLFioBuIUdAH5ONw9HpTJGGppp.sny0Hw1WOY6','image'=>'','status'=>1
            ],
            [
                'id'=>2,'name'=>'Reo','type'=>'subadmin','mobile'=>'08039730190','email'=>'subadmin@admin.com','password'=>'$2y$10$2TO8X7cWKwLomnByLFioBuIUdAH5ONw9HpTJGGppp.sny0Hw1WOY6','image'=>'','status'=>1
            ],
            [
                'id'=>3,'name'=>'John','type'=>'subadmin','mobile'=>'09039730144','email'=>'john@admin.com','password'=>'$2y$10$2TO8X7cWKwLomnByLFioBuIUdAH5ONw9HpTJGGppp.sny0Hw1WOY6','image'=>'','status'=>1
            ],
        ];
        DB::table('admins')->insert($adminRecords);
        // foreach($adminRecords as $key => $record){
        //     \App\Models\admin::create($record);
        // }
    }
}
