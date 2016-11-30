<?php

use Illuminate\Database\Seeder;

class OauthClientGrantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_client_grants')->delete();
        
        
        
    }
}
