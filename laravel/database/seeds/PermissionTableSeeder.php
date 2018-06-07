<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	foreach ($this->getPermissionsData() as $key => $value) {
             $permission = new Permission();
             $permission->name = $value['name'];
             $permission->display_name = $value['display_name'];
             $permission->description = $value['description'];
             $permission->type = $value['type'];
             $permissionExist = Permission::where('name',$value['name'])->first();
             if (!$permissionExist) {
                echo '添加新的一条新权限'.'....................'.$value['display_name'].PHP_EOL;
                $permission->save();
             }else{
                echo $value['display_name'].'....................该权限已经存在'.PHP_EOL;
             }
             
    	}
      
    }

    protected function getPermissionsData()
    {
    	$data = [
            // 默认模块
            [ 'name' => 'IndexController' , 'display_name' => '后台首页管理', 'type' => '默认模块','description' => '可以对后台首页管理管理操作' ],

            //用户模块
    		[ 'name' => 'UserController' , 'display_name' => '后台用户管理', 'type' => '用户模块','description' => '可以对后台用户管理管理操作' ],
            [ 'name' => 'RoleController' , 'display_name' => '后台角色管理', 'type' => '用户模块','description' => '可以对后台角色管理管理操作' ],

            //系统配置模块
            [ 'name' => 'OperationLogController' , 'display_name' => '操作日志', 'type' => '系统配置模块','description' => '可以对操作日志管理操作' ],
            [ 'name' => 'SystemController' , 'display_name' => '系统配置信息', 'type' => '系统配置模块','description' => '可以对系统配置信息管理操作' ],
    	];

        return $data;
    }
}