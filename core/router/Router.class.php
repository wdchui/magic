<?php
/**
 * 路由处理类
 */
namespace magic

Class Router
{
	public static function dispatch()
	{
		$router = $_GET['r'];
		list($controller, $method) = explode('/', $router);
		$controllerName = ucfirst($controller) . 'Controller';
		call_user_func(array(__NAMESPACE__ . '\$controllerName', $method));
	}	
}