<?php

use Illuminate\Database\Seeder;

class OauthSessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_sessions')->delete();
        
        \DB::table('oauth_sessions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'client_id' => 'f3d259ddd3ed8ff3843839b',
                'owner_type' => 'user',
                'owner_id' => '1',
                'client_redirect_uri' => NULL,
                'created_at' => '2016-11-14 10:24:30',
                'updated_at' => '2016-11-14 10:24:30',
            ),
            1 => 
            array (
                'id' => 2,
                'client_id' => 'f3d259ddd3ed8ff3843839b',
                'owner_type' => 'user',
                'owner_id' => '2',
                'client_redirect_uri' => NULL,
                'created_at' => '2016-11-16 06:38:43',
                'updated_at' => '2016-11-16 06:38:43',
            ),
            2 => 
            array (
                'id' => 3,
                'client_id' => 'f3d259ddd3ed8ff3843839b',
                'owner_type' => 'user',
                'owner_id' => '1',
                'client_redirect_uri' => NULL,
                'created_at' => '2016-11-19 11:03:01',
                'updated_at' => '2016-11-19 11:03:01',
            ),
            3 => 
            array (
                'id' => 4,
                'client_id' => 'f3d259ddd3ed8ff3843839b',
                'owner_type' => 'user',
                'owner_id' => '1',
                'client_redirect_uri' => NULL,
                'created_at' => '2016-11-24 19:28:46',
                'updated_at' => '2016-11-24 19:28:46',
            ),
        ));
        
        
    }
}
