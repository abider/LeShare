<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('CategoriesTableSeeder');
        // $this->call('CommentsTableSeeder');
        // $this->call('LaravelSmsTableSeeder');
        // $this->call('MenusTableSeeder');
        // $this->call('MigrationsTableSeeder');
        // $this->call('OauthAccessTokenScopesTableSeeder');
        // $this->call('OauthAuthCodeScopesTableSeeder');
        // $this->call('OauthAuthCodesTableSeeder');
        // $this->call('OauthClientEndpointsTableSeeder');
        // $this->call('OauthClientGrantsTableSeeder');
        // $this->call('OauthClientScopesTableSeeder');
        // $this->call('OauthClientsTableSeeder');
        // $this->call('OauthGrantScopesTableSeeder');
        // $this->call('OauthGrantsTableSeeder');
        // $this->call('OauthScopesTableSeeder');
        // $this->call('OauthSessionScopesTableSeeder');
        // $this->call('OauthSessionsTableSeeder');
        // $this->call('PasswordResetsTableSeeder');
        // $this->call('PermissionUserTableSeeder');
        // $this->call('PermissionsTableSeeder');
        // $this->call('RolesTableSeeder');
        // $this->call('TopicsTableSeeder');
        // $this->call('UsersTableSeeder');
        // $this->call('OauthAccessTokensTableSeeder');
        // $this->call('OauthRefreshTokensTableSeeder');
        // $this->call('PermissionRoleTableSeeder');
        // $this->call('RoleUserTableSeeder');

        // factory(App\User::class, 30)->create();
        // factory(App\Category::class, 10)->create();
        // \DB::table('topics')->delete();
        // factory(App\Topic::class, 50)->create();
        \DB::table('comments')->delete();
        factory(App\Comment::class, 500)->create();
    }
}
