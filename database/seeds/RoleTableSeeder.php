<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//DB::table('roles')->delete();
        DB::table('roles')->insert([
        [
            'role_name' => 'Admin',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        [
            'role_name' => 'ICCD',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        [
            'role_name' => 'Branch',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ]

    	]);
    }
}
