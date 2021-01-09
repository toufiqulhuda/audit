<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branch')->insert([
        
        [
            'branch_code' => '1',
            'branch_name' => 'Dilkusha Branch',
            'branch_contact' => '880-2-7168729-31, 9550823-5, 9563081-5, 9550897, 9560649',
            'branch_address' => '48, Dilkusha Commercial Area, Dhaka - 1000.',
            'branch_email' => 'dilkusha@nblbd.com',
            'SWIFT' => 'NBLBBDDH',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        [
            'branch_code' => '2',
            'branch_name' => 'Khatungonj Branch',
            'branch_contact' => '031-611012-13, +8801844097392',
            'branch_address' => '34, Chand Meah Lane, Khatungonj, Chittagong',
            'branch_email' => 'khatungonj@nblbd.com',
            'SWIFT' => 'NBLBBDDH002',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        [
        	'branch_code' => '116',
            'branch_name' => 'Abdullahpur',
            'branch_contact' => '01730-329689, 01971-002297',
            'branch_address' => 'Minnat Plaza ( Ist Floor), Abdullahpur Bazar, Dhaka Maowa Road, Kalakandi, Abdullahpur Bazar',
            'branch_email' => 'abdullahpur@nblbd.com',
            'SWIFT' => 'NBLBBDDH',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        [
            'branch_code' => '4',
            'branch_name' => 'Agrabad',
            'branch_contact' => '031-718228, 725948, 716285, 01713388903',
            'branch_address' => '13/A (NEW), Sk. Mujib Road, Badamtoli Moor, Agrabad, Chittagong.',
            'branch_email' => 'agrabad@nblbd.com',
            'SWIFT' => 'NBLBBDDH004',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
		[
            'branch_code' => '157',
            'branch_name' => 'ALIPUR',
            'branch_contact' => '442856227, 01730701643, 01713378965',
            'branch_address' => 'Musulli Shopping Complex (1st Floor), Alipur Bazar, P.O. Kuakata, Union-7 No. Latachapli, P.S. Kalapara, Dis-Patuakhali.',
            'branch_email' => 'alipur@nblbd.com',
            'SWIFT' => 'NBLBBDDH',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
       

    	]);
    }
}
