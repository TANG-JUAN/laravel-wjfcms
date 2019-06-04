<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'url' => '/admin/index',
                'name' => '后台管理',
                'guard_name'=>'admin',
                'display_menu' => 1,
                'parent_id' => 0,
                'level' => 0,
                'sort_order' => 0,
                'icon' => 'layui-icon-app',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '2',
                'url' => '/admin/system',
                'name' => '系统管理',
                'guard_name'=>'admin',
                'display_menu' => 1,
                'parent_id' => 0,
                'level' => 0,
                'sort_order' => 0,
                'icon' => 'layui-icon-set',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '3',
                'url' => '/admin/index/main',
                'name' => '控制台',
                'guard_name'=>'admin',
                'display_menu' => 1,
                'parent_id' => 1,
                'level' => 1,
                'sort_order' => 0,
                'icon' => 'layui-icon-home',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '4',
                'url' => '/admin/role',
                'name' => '角色管理',
                'guard_name'=>'admin',
                'display_menu' => 1,
                'parent_id' => 2,
                'level' => 1,
                'sort_order' => 0,
                'icon' => 'layui-icon-user',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '5',
                'url' => '/admin/permission',
                'name' => '权限管理',
                'guard_name'=>'admin',
                'display_menu' => 1,
                'parent_id' => 2,
                'level' => 1,
                'sort_order' => 0,
                'icon' => 'layui-icon-spread-left',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '6',
                'url' => '/admin/admin',
                'name' => '用户管理',
                'guard_name'=>'admin',
                'display_menu' => 1,
                'parent_id' => 2,
                'level' => 1,
                'sort_order' => 0,
                'icon' => 'layui-icon-friends',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '7',
                'url' => '/admin/role/index',
                'name' => '角色列表',
                'guard_name'=>'admin',
                'display_menu' => 1,
                'parent_id' => 4,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '8',
                'url' => '/admin/role/show',
                'name' => '查看角色',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 4,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '9',
                'url' => '/admin/role/create',
                'name' => '创建角色',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 4,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '10',
                'url' => '/admin/role/store',
                'name' => '保存角色',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 4,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '11',
                'url' => '/admin/role/edit',
                'name' => '编辑角色',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 4,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '12',
                'url' => '/admin/role/update',
                'name' => '修改角色',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 4,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '13',
                'url' => '/admin/role/destroy',
                'name' => '删除角色',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 4,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '14',
                'url' => '/admin/permission/index',
                'name' => '权限列表',
                'guard_name'=>'admin',
                'display_menu' => 1,
                'parent_id' => 5,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '15',
                'url' => '/admin/permission/show',
                'name' => '查看权限',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 5,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '16',
                'url' => '/admin/permission/create',
                'name' => '创建权限',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 5,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '17',
                'url' => '/admin/permission/store',
                'name' => '保存权限',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 5,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '18',
                'url' => '/admin/permission/edit',
                'name' => '编辑权限',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 5,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '19',
                'url' => '/admin/permission/update',
                'name' => '修改权限',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 5,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '20',
                'url' => '/admin/permission/destroy',
                'name' => '删除权限',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 5,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '21',
                'url' => '/admin/admin/index',
                'name' => '管理员列表',
                'guard_name'=>'admin',
                'display_menu' => 1,
                'parent_id' => 6,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '22',
                'url' => '/admin/admin/show',
                'name' => '查看管理员',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 6,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '23',
                'url' => '/admin/admin/create',
                'name' => '创建管理员',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 6,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '24',
                'url' => '/admin/admin/store',
                'name' => '保存管理员',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 6,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '25',
                'url' => '/admin/admin/edit',
                'name' => '编辑管理员',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 6,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '26',
                'url' => '/admin/admin/update',
                'name' => '修改管理员',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 6,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '27',
                'url' => '/admin/admin/destroy',
                'name' => '删除管理员',
                'guard_name'=>'admin',
                'display_menu' => 0,
                'parent_id' => 6,
                'level' => 2,
                'sort_order' => 0,
                'icon' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        DB::table('permissions')->insert($data);
    }
}
