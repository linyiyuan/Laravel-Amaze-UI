<?php

namespace App\Http\Middleware;

use Closure;
use Route,URL,Auth,Request;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //获取当前路由
        $route_name = Route::currentRouteName();
        $route_name = substr($route_name,0,strpos($route_name, '.'));


        //获取当前用户信息
        $user = $request->user();

        //判断是否是超级管理员
        if ($user->hasRole('super_admin')) {
             return $next($request);
        }

        //判断是否有权限
        if ($user->can($route_name)) {
            return $next($request);
        }

        // 没有权限则返回到403页面
        return response()->view('admin.error.403');
        // return $next($request);
    }
}
