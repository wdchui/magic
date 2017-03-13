<?php

define("CLASSPOSTFIX", '.class.php');
include COREPATH . DIRECTORY_SEPARATOR . Router.class.php

spl_autoload_register('magicLoad');
set_error_handler('magic\Exception::dealError');
set_exception_handler('magic\Exception::dealException');
register_shutdown_function('magic\Exception::dealShutdown');

Router::dispatch();

function magicLoad($class)
{
	$file = $class . CLASSPOSTFIX;
	if (is_file($file))
	{
		include $file
	}
	return
}

