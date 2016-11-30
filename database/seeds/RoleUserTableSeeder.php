<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        // \DB::table('role_user')->delete();

        \DB::table('role_user')->insert(array (
            0 =>
            array (
                'id' => 1,
                'role_id' => 1,
                'user_id' => 1,
                'created_at' => '2016-11-12 06:32:44',
                'updated_at' => '2016-11-12 06:32:44',
            ),
            1 =>
            array (
                'id' => 2,
                'role_id' => 2,
                'user_id' => 2,
                'created_at' => '2016-11-14 11:50:06',
                'updated_at' => '2016-11-14 11:50:06',
            ),
        ));


    }
}
