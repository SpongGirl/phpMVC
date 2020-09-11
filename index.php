<?php
// 应用目录为当前目录
define('APP_PATH', __DIR__ . '/');

// 开启调试模式
define('APP_DEBUG', true);

// 加载框架文件
require(APP_PATH . 'fastphp/Fastphp.php');

// 加载配置文件
$config = require(APP_PATH . 'config/config.php');

// 实例化框架类
(new fastphp\Fastphp($config))->run();

//很大程度放置了末尾没有添加php结束符号：对于只有php代码的文件，最好不要添加结束标志，php本身并不需要结束符号
//不加结束符号让程序更加安全，很大程度防止了末尾被注入额外的内容。