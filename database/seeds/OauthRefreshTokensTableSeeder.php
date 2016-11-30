<?php

use Illuminate\Database\Seeder;

class OauthRefreshTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_refresh_tokens')->delete();
        
        \DB::table('oauth_refresh_tokens')->insert(array (
            0 => 
            array (
                'id' => 'hxeHdmNJ8hTImz9OSRLhdOekLhzflsWHWi8xefpy',
                'access_token_id' => 'hlrwnUCDQ4lgxOPPlEqLgw2lF2HViqOCy5i0zQUr',
                'expire_time' => 1484303070,
                'created_at' => '2016-11-14 10:24:30',
                'updated_at' => '2016-11-14 10:24:30',
            ),
            1 => 
            array (
                'id' => 'uMdPJ2gejmkiyy6uF57QbrdXX5WXRhslRtxKiyIa',
                'access_token_id' => 'dwU8TciAd3p504WYioYjIfqbpSArHXnSVSA1XhT2',
                'expire_time' => 1484462323,
                'created_at' => '2016-11-16 06:38:43',
                'updated_at' => '2016-11-16 06:38:43',
            ),
            2 => 
            array (
                'id' => 'ewUkcJA7Yzym50UK3Gk2qQgYnQBrJ3Cwga00H06i',
                'access_token_id' => 'uPQM7SqkAwNKGDUD6EkEiHuRBMZFjqI95YgUH5dL',
                'expire_time' => 1484737381,
                'created_at' => '2016-11-19 11:03:01',
                'updated_at' => '2016-11-19 11:03:01',
            ),
            3 => 
            array (
                'id' => '7KzS8MoOG7YgmN1yFaS4uSWpGfZzIZ5qtsbvqEPM',
                'access_token_id' => 'LXNEn1vEM4ZLnAxekfEVuaBPMux6zQHgLRAnXzzB',
                'expire_time' => 1485199726,
                'created_at' => '2016-11-24 19:28:46',
                'updated_at' => '2016-11-24 19:28:46',
            ),
        ));
        
        
    }
}
