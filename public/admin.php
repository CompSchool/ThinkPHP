<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
// 加载框架引导文件
//require __DIR__ . '/../thinkphp/start.php';

//start  2017/04/06 cxh 
// 加载框架基础文件
require __DIR__ . '/../thinkphp/base.php';
//require __DIR__ . '/../thinkphp/ThinkPHP.php';
// 绑定当前入口文件到admin模块
//\think\Route::bind('test');

//绑定Web模块
define('BIND_MODULE', 'test');
//绑定Site控制器
//define('BIND_CONTROLLER', 'Index');
//绑定show动作
//define('BIND_ACTION', 'index');


// 关闭admin模块的路由
\think\App::route(false);
// 执行应用
\think\App::run()->send();
//end 测试的结果发现一个问题：即index()方法总会起作用
