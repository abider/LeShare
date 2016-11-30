<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'pid' => 0,
                'name' => '控制台',
                'language' => 'zh',
                'icon' => 'fa fa-dashboard',
                'slug' => 'admin.systems.index',
                'url' => 'admin',
                'description' => '后台首页',
                'sort' => 0,
                'status' => 1,
                'created_at' => '2016-11-14 07:46:48',
                'updated_at' => '2016-11-14 07:46:48',
            ),
            1 => 
            array (
                'id' => 2,
                'pid' => 0,
                'name' => '博客管理',
                'language' => 'zh',
                'icon' => 'fa fa-diamond',
                'slug' => 'admin.systems.blog',
                'url' => 'admin/cate*,admin/article*,admin/tag*',
                'description' => '博客管理',
                'sort' => 0,
                'status' => 1,
                'created_at' => '2016-11-14 07:46:48',
                'updated_at' => '2016-11-14 07:46:48',
            ),
            2 => 
            array (
                'id' => 3,
                'pid' => 2,
                'name' => '分类管理',
                'language' => 'zh',
                'icon' => 'fa fa-cloud',
                'slug' => 'admin.categories.list',
                'url' => 'admin/cate',
                'description' => '分类管理',
                'sort' => 0,
                'status' => 1,
                'created_at' => '2016-11-14 07:46:48',
                'updated_at' => '2016-11-14 07:46:48',
            ),
            3 => 
            array (
                'id' => 4,
                'pid' => 2,
                'name' => '文章管理',
                'language' => 'zh',
                'icon' => 'fa fa-file-text',
                'slug' => 'admin.articles.list',
                'url' => 'admin/article',
                'description' => '文章管理',
                'sort' => 0,
                'status' => 1,
                'created_at' => '2016-11-14 07:46:48',
                'updated_at' => '2016-11-14 07:46:48',
            ),
            4 => 
            array (
                'id' => 5,
                'pid' => 2,
                'name' => '标签管理',
                'language' => 'zh',
                'icon' => 'fa fa-tags',
                'slug' => 'admin.tags.list',
                'url' => 'admin/tag',
                'description' => '标签管理',
                'sort' => 0,
                'status' => 1,
                'created_at' => '2016-11-14 07:46:48',
                'updated_at' => '2016-11-14 07:46:48',
            ),
            5 => 
            array (
                'id' => 6,
                'pid' => 0,
                'name' => '系统管理',
                'language' => 'zh',
                'icon' => 'fa fa-cog',
                'slug' => 'admin.systems.manage',
                'url' => 'admin/role*,admin/permission*,admin/user*,admin/menu*,admin/log-viewer*',
                'description' => '系统功能管理',
                'sort' => 0,
                'status' => 1,
                'created_at' => '2016-11-14 07:46:48',
                'updated_at' => '2016-11-14 07:46:48',
            ),
            6 => 
            array (
                'id' => 7,
                'pid' => 6,
                'name' => '用户管理',
                'language' => 'zh',
                'icon' => 'fa fa-users',
                'slug' => 'admin.users.list',
                'url' => 'admin/user',
                'description' => '显示用户管理',
                'sort' => 0,
                'status' => 1,
                'created_at' => '2016-11-14 07:46:48',
                'updated_at' => '2016-11-14 07:46:48',
            ),
            7 => 
            array (
                'id' => 8,
                'pid' => 6,
                'name' => '角色管理',
                'language' => 'zh',
                'icon' => 'fa fa-male',
                'slug' => 'admin.roles.list',
                'url' => 'admin/role',
                'description' => '显示角色管理',
                'sort' => 0,
                'status' => 1,
                'created_at' => '2016-11-14 07:46:48',
                'updated_at' => '2016-11-14 07:46:48',
            ),
            8 => 
            array (
                'id' => 9,
                'pid' => 6,
                'name' => '权限管理',
                'language' => 'zh',
                'icon' => 'fa fa-paper-plane',
                'slug' => 'admin.permissions.list',
                'url' => 'admin/permission',
                'description' => '显示权限管理',
                'sort' => 0,
                'status' => 1,
                'created_at' => '2016-11-14 07:46:48',
                'updated_at' => '2016-11-14 07:46:48',
            ),
            9 => 
            array (
                'id' => 10,
                'pid' => 6,
                'name' => '系统日志',
                'language' => 'zh',
                'icon' => 'fa fa-file-text-o',
                'slug' => 'admin.logs.all',
                'url' => 'admin/log-viewer',
                'description' => '显示系统日志',
                'sort' => 0,
                'status' => 1,
                'created_at' => '2016-11-14 07:46:48',
                'updated_at' => '2016-11-14 07:46:48',
            ),
            10 => 
            array (
                'id' => 11,
                'pid' => 6,
                'name' => '菜单管理',
                'language' => 'zh',
                'icon' => 'fa fa-navicon',
                'slug' => 'admin.menus.list',
                'url' => 'admin/menu',
                'description' => '显示菜单管理',
                'sort' => 0,
                'status' => 1,
                'created_at' => '2016-11-14 07:46:48',
                'updated_at' => '2016-11-14 07:46:48',
            ),
        ));
        
        
    }
}
