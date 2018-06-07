<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;


class MenuListComposer
{

    /**
    * 绑定数据到视图.
    *
    * @param View $view
    * @return void
    */
    public function compose(View $view)
    {
        $menu = [
            //文章管理
            ['icon' => 'am-icon-wpforms' ,'type' => '文章管理','url' => '/admin/article','data' => [
                ['type' => '文章列表', 'url' => '/admin/article'],
                ['type' => '添加文章', 'url' => '/admin/article/create'],
            ] ],

            //相册管理
            ['icon' => 'am-icon-photo' ,'type' => '相册管理','url' => '/admin/user1','data' => [
                ['type' => '照片列表', 'url' => 'sad'],
                ['type' => '相册列表', 'url' => 'sad'],
                ['type' => '相册分类管理', 'url' => 'sad'],
            ] ],

            //留言管理
            ['icon' => 'am-icon-pencil-square-o' ,'type' => '留言管理','url' => '/admin/user2','data' => [
                ['type' => '照片列表', 'url' => 'sad'],
                ['type' => '相册列表', 'url' => 'sad'],
                ['type' => '相册分类管理', 'url' => 'sad'],
            ] ],

            //评论管理
            ['icon' => 'am-icon-pencil' ,'type' => '评论管理','url' => '/admin/user3','data' => [
                ['type' => '照片列表', 'url' => 'sad'],
                ['type' => '相册列表', 'url' => 'sad'],
                ['type' => '相册分类管理', 'url' => 'sad'],
            ] ],

            //标签管理
            ['icon' => 'am-icon-tags' ,'type' => '标签管理','url' => '/admin/user4','data' => [
                ['type' => '照片列表', 'url' => 'sad'],
                ['type' => '相册列表', 'url' => 'sad'],
                ['type' => '相册分类管理', 'url' => 'sad'],
            ] ],

            //分类管理
            ['icon' => 'am-icon-files-o' ,'type' => '分类管理','url' => '/admin/user5','data' => [
                ['type' => '照片列表', 'url' => 'sad'],
                ['type' => '相册列表', 'url' => 'sad'],
                ['type' => '相册分类管理', 'url' => 'sad'],
            ] ],

            //友情链接管理
            ['icon' => 'am-icon-link' ,'type' => '友情链接管理','url' => '/admin/user6','data' => [
                ['type' => '照片列表', 'url' => 'sad'],
                ['type' => '相册列表', 'url' => 'sad'],
                ['type' => '相册分类管理', 'url' => 'sad'],
            ] ],

            //轮播图管理
            ['icon' => 'am-icon-tasks' ,'type' => '轮播图管理','url' => '/admin/user7','data' => [
                ['type' => '照片列表', 'url' => 'sad'],
                ['type' => '相册列表', 'url' => 'sad'],
                ['type' => '相册分类管理', 'url' => 'sad'],
            ] ],

            //消息管理
            ['icon' => 'am-icon-bullhorn' ,'type' => '消息管理','url' => '/admin/user8','data' => [
                ['type' => '照片列表', 'url' => 'sad'],
                ['type' => '相册列表', 'url' => 'sad'],
                ['type' => '相册分类管理', 'url' => 'sad'],
            ] ],

            //音乐管理
            ['icon' => 'am-icon-music' ,'type' => '音乐管理','url' => '/admin/user9','data' => [
                ['type' => '照片列表', 'url' => 'sad'],
                ['type' => '相册列表', 'url' => 'sad'],
                ['type' => '相册分类管理', 'url' => 'sad'],
            ] ],

            //用户管理
            ['icon' => 'am-icon-user' ,'type' => '用户管理','url' => 'user_manage','data' => [
                ['type' => '管理员列表', 'url' => '/admin/user_manage/user'],
                ['type' => '角色管理', 'url' => '/admin/user_manage/role'],
                
            ] ],

             //系统配置
            ['icon' => 'am-icon-gear' ,'type' => '系统配置','url' => 'system_config','data' => [
                ['type' => '系统配置', 'url' => '/admin/system_config/system'],
                ['type' => '操作日志', 'url' => '/admin/system_config/operation_log'],
            ] ],
        ];

        $view->with('menu', $menu);

       
    }
}