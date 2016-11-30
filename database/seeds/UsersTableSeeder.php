<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'mobile' => '13710203151',
                'password' => '$2y$10$XTu0x0T9RvT5ReXAEPhfW.glwi4D7tGpye63Hd01EZaO7vN6XWrF.',
                'login_token' => 'LXNEn1vEM4ZLnAxekfEVuaBPMux6zQHgLRAnXzzB',
                'is_locked' => 'no',
                'avatar' => NULL,
                'topic_count' => 0,
                'reply_count' => 0,
                'city' => NULL,
                'company' => NULL,
                'introduction' => NULL,
                'verified' => 0,
                'status' => 1,
                'confirm_email' => 1,
                'last_actived_at' => NULL,
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-11-14 10:24:30',
                'updated_at' => '2016-11-24 19:28:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'email' => 'user@user.com',
                'mobile' => '18924298576',
                'password' => '$2y$10$qSYDxO0qe8zDEy8rm66FNOfZARerlbs6DFJntgqG46rM/vM.ad1R.',
                'login_token' => 'dwU8TciAd3p504WYioYjIfqbpSArHXnSVSA1XhT2',
                'is_locked' => 'no',
                'avatar' => NULL,
                'topic_count' => 0,
                'reply_count' => 0,
                'city' => NULL,
                'company' => NULL,
                'introduction' => NULL,
                'verified' => 0,
                'status' => 1,
                'confirm_email' => 1,
                'last_actived_at' => NULL,
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2016-11-14 10:24:30',
                'updated_at' => '2016-11-16 06:38:43',
            ),
        ));
        
        
    }
}
