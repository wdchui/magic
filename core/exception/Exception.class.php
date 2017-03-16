<?php
/**
 * 程序异常处理类
 */
namespace magic

Class Exception
{
	public static function dealException($ex)
	{
        echo "Uncaught exception", $ex->getMessage(), "\n";
	}

 	public static function dealError($errno, $errstr, $errfile, $errline)
	{
        echo "An error happened", $errno, $errstr, $errfile, $errline;
	}

	public static function dealShutdown()
	{
        echo "process shutdown"
	}
}
