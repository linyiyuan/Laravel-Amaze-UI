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
             $permissionExist = Permission::where('name',$value['name'])->first();
             if (!$permissionExist) {
                $permission->save();
             }
             
    	}
      
    }

    protected function getPermissionsData()
    {
    	$data = [
            //最强NBA社区
    		[ 'name' => '/admin/user' , 'display_name' => '后台用户管理', 'description' => '可以对后台用户管理管理操作' ],
    		[ 'name' => '/admin/role' , 'display_name' => '后台角色管理', 'description' => '可以对后台角色管理管理操作' ],
    	];

        return $data;
    }
}