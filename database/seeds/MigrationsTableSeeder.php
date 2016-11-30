<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'migration' => '2014_04_24_110151_create_oauth_scopes_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'migration' => '2014_04_24_110304_create_oauth_grants_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'migration' => '2014_04_24_110403_create_oauth_grant_scopes_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'migration' => '2014_04_24_110459_create_oauth_clients_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'migration' => '2014_04_24_110557_create_oauth_client_endpoints_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'migration' => '2014_04_24_110705_create_oauth_client_scopes_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'migration' => '2014_04_24_110817_create_oauth_client_grants_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'migration' => '2014_04_24_111002_create_oauth_sessions_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'migration' => '2014_04_24_111109_create_oauth_session_scopes_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'migration' => '2014_04_24_111254_create_oauth_auth_codes_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'migration' => '2014_04_24_111403_create_oauth_auth_code_scopes_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'migration' => '2014_04_24_111518_create_oauth_access_tokens_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'migration' => '2014_04_24_111657_create_oauth_access_token_scopes_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'migration' => '2014_04_24_111810_create_oauth_refresh_tokens_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'migration' => '2015_01_15_105324_create_roles_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'migration' => '2015_01_15_114412_create_role_user_table',
                'batch' => 1,
            ),
            18 => 
            array (
                'migration' => '2015_01_26_115212_create_permissions_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'migration' => '2015_01_26_115523_create_permission_role_table',
                'batch' => 1,
            ),
            20 => 
            array (
                'migration' => '2015_02_09_132439_create_permission_user_table',
                'batch' => 1,
            ),
            21 => 
            array (
                'migration' => '2015_12_21_111514_create_sms_table',
                'batch' => 1,
            ),
            22 => 
            array (
                'migration' => '2016_10_08_030143_create_topics_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'migration' => '2016_10_23_015611_create_comments_table',
                'batch' => 1,
            ),
            24 => 
            array (
                'migration' => '2016_11_12_135553_create_categories_table',
                'batch' => 1,
            ),
            25 => 
            array (
                'migration' => '2016_11_12_162416_create_menus_table',
                'batch' => 1,
            ),
        ));
        
        
    }
}
