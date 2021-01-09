<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NavigationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//DB::table('roles')->delete();
        DB::table('navigation')->insert([
        [
            'menu_name' => 'Profile',
            'menu_url' => '',
            'menu_icon' => '',
            'parent_menu_id' => NULL,
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        [
            'menu_name' => 'Settings',
            'menu_url' => '',
            'menu_icon' => '',
            'parent_menu_id' => NULL,
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        [
            'menu_name' => 'Catagory',
            'menu_url' => '',
            'menu_icon' => '',
            'parent_menu_id' => NULL,
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        [
            'menu_name' => 'Questions Bank',
            'menu_url' => '',
            'menu_icon' => '',
            'parent_menu_id' => NULL,
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        [
            'menu_name' => 'Compliance',
            'menu_url' => '',
            'menu_icon' => '',
            'parent_menu_id' => NULL,
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        [
            'menu_name' => 'Profile',
            'menu_url' => 'profile',
            'menu_icon' => '',
            'parent_menu_id' => '1',
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        [
            'menu_name' => 'Change Password',
            'menu_url' => 'changePassword',
            'menu_icon' => '',
            'parent_menu_id' => '1',
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],

        [
            'menu_name' => 'New User',
            'menu_url' => 'register',
            'menu_icon' => '',
            'parent_menu_id' => '2',
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        [
            'menu_name' => 'Manage User',
            'menu_url' => 'user-management',
            'menu_icon' => '',
            'parent_menu_id' => '2',
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        [
            'menu_name' => 'New User Role',
            'menu_url' => 'user-role',
            'menu_icon' => '',
            'parent_menu_id' => '2',
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        
        /*[
            'menu_name' => 'Menu Management',
            'menu_url' => 'menu-management',
            'menu_icon' => '',
            'parent_menu_id' => '2',
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],*/
        [
            'menu_name' => 'Add New Branch',
            'menu_url' => 'add-branch',
            'menu_icon' => '',
            'parent_menu_id' => '2',
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        [
            'menu_name' => 'Reset User Password',
            'menu_url' => 'reset-user-password',
            'menu_icon' => '',
            'parent_menu_id' => '2',
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        
        [
            'menu_name' => 'Add Catagory',
            'menu_url' => 'add-catagory',
            'menu_icon' => '',
            'parent_menu_id' => '3',
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        
        [
            'menu_name' => 'New Question',
            'menu_url' => 'add-question',
            'menu_icon' => '',
            'parent_menu_id' => '4',
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        /*[
            'menu_name' => 'Manage Question',
            'menu_url' => 'manage-question',
            'menu_icon' => '',
            'parent_menu_id' => '4',
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        [
            'menu_name' => 'Report Issue',
            'menu_url' => 'report-issue',
            'menu_icon' => '',
            'parent_menu_id' => '5',
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],
        [
            'menu_name' => 'View Issues',
            'menu_url' => 'view-issues',
            'menu_icon' => '',
            'parent_menu_id' => '5',
            'roleid' => '1',
            'isactive' => '1',
            'created_by' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            //timestamps(),
     
        ],*/

    	]);
    }
}
