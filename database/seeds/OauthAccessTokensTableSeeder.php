<?php

use Illuminate\Database\Seeder;

class OauthAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_access_tokens')->delete();
        
        \DB::table('oauth_access_tokens')->insert(array (
            0 => 
            array (
                'id' => 'hlrwnUCDQ4lgxOPPlEqLgw2lF2HViqOCy5i0zQUr',
                'session_id' => 1,
                'expire_time' => 1481711070,
                'created_at' => '2016-11-14 10:24:30',
                'updated_at' => '2016-11-14 10:24:30',
            ),
            1 => 
            array (
                'id' => 'dwU8TciAd3p504WYioYjIfqbpSArHXnSVSA1XhT2',
                'session_id' => 2,
                'expire_time' => 1481870323,
                'created_at' => '2016-11-16 06:38:43',
                'updated_at' => '2016-11-16 06:38:43',
            ),
            2 => 
            array (
                'id' => 'uPQM7SqkAwNKGDUD6EkEiHuRBMZFjqI95YgUH5dL',
                'session_id' => 3,
                'expire_time' => 1482145381,
                'created_at' => '2016-11-19 11:03:01',
                'updated_at' => '2016-11-19 11:03:01',
            ),
            3 => 
            array (
                'id' => 'LXNEn1vEM4ZLnAxekfEVuaBPMux6zQHgLRAnXzzB',
                'session_id' => 4,
                'expire_time' => 1482607726,
                'created_at' => '2016-11-24 19:28:46',
                'updated_at' => '2016-11-24 19:28:46',
            ),
        ));
        
        
    }
}
