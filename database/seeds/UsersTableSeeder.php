<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user',
            'mobile' => '18924298576',
            'password' => bcrypt('18924298576'),
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'mobile' => '13710203151',
            'password' => bcrypt('13710203151'),
        ]);
    }
}
