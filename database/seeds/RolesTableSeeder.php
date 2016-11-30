<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'slug' => 'admin',
                'description' => '超级管理员',
                'level' => 1,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:46',
                'updated_at' => '2016-11-14 07:43:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'User',
                'slug' => 'user',
                'description' => '普通用户',
                'level' => 1,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:46',
                'updated_at' => '2016-11-14 11:32:13',
            ),
        ));
        
        
    }
}
