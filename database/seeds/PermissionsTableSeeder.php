<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'systems manage',
                'slug' => 'admin.systems.manage',
                'description' => '系统管理',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'login backend',
                'slug' => 'admin.systems.login',
                'description' => '登录后台权限',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'backend index',
                'slug' => 'admin.systems.index',
                'description' => '后台首页',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Show Log All',
                'slug' => 'admin.logs.all',
                'description' => '显示日志总览',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Show Log List',
                'slug' => 'admin.logs.list',
                'description' => '显示日志列表',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Show Menus list',
                'slug' => 'admin.menus.list',
                'description' => '显示菜单列表',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Menus create',
                'slug' => 'admin.menus.create',
                'description' => '创建菜单',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Menus delete',
                'slug' => 'admin.menus.delete',
                'description' => '删除菜单',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Menus edit',
                'slug' => 'admin.menus.edit',
                'description' => '修改菜单',
                'model' => '',
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 11:31:24',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Show roles list',
                'slug' => 'admin.roles.list',
                'description' => '显示角色列表',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'roles create',
                'slug' => 'admin.roles.create',
                'description' => '创建角色',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'roles delete',
                'slug' => 'admin.roles.delete',
                'description' => '删除角色',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'roles edit',
                'slug' => 'admin.roles.edit',
                'description' => '修改角色',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'roles audit',
                'slug' => 'admin.roles.audit',
                'description' => '通过角色',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'roles trash',
                'slug' => 'admin.roles.trash',
                'description' => '禁用角色',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'roles.undo',
                'slug' => 'admin.roles.undo',
                'description' => '恢复角色',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'roles.show',
                'slug' => 'admin.roles.show',
                'description' => '查看角色权限',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Show permissions list',
                'slug' => 'admin.permissions.list',
                'description' => '显示权限列表',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'permissions create',
                'slug' => 'admin.permissions.create',
                'description' => '创建权限',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'permissions delete',
                'slug' => 'admin.permissions.delete',
                'description' => '删除权限',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'permissions edit',
                'slug' => 'admin.permissions.edit',
                'description' => '修改权限',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'permissions trash',
                'slug' => 'admin.permissions.trash',
                'description' => '禁用权限',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'permissions undo',
                'slug' => 'admin.permissions.undo',
                'description' => '恢复权限',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'permissions audit',
                'slug' => 'admin.permissions.audit',
                'description' => '通过权限',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Show users list',
                'slug' => 'admin.users.list',
                'description' => '显示用户列表',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'users create',
                'slug' => 'admin.users.create',
                'description' => '创建用户',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'users delete',
                'slug' => 'admin.users.delete',
                'description' => '删除用户',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'users edit',
                'slug' => 'admin.users.edit',
                'description' => '修改用户',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'users audit',
                'slug' => 'admin.users.audit',
                'description' => '通过用户',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'users trash',
                'slug' => 'admin.users.trash',
                'description' => '禁用用户',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'users undo',
                'slug' => 'admin.users.undo',
                'description' => '恢复用户',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'users show',
                'slug' => 'admin.users.show',
                'description' => '查看用户信息',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'users reset',
                'slug' => 'admin.users.reset',
                'description' => '修改用户密码',
                'model' => NULL,
                'status' => 1,
                'created_at' => '2016-11-14 07:43:16',
                'updated_at' => '2016-11-14 07:43:16',
            ),
        ));
        
        
    }
}
