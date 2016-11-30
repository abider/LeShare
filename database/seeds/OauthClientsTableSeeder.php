<?php

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_clients')->delete();
        
        \DB::table('oauth_clients')->insert(array (
            0 => 
            array (
                'id' => 'f3d259ddd3ed8ff3843839b',
                'secret' => '4c7f6f8fa93d59c45502c0ae8c4a95b',
                'name' => 'api',
                'created_at' => '2016-09-01 10:00:00',
                'updated_at' => '2016-09-01 10:00:00',
            ),
        ));
        
        
    }
}
