<?php

spl_autoload_register('magicLoad');
set_error_handler('magic\Exception::dealError');
set_exception_handler('magic\Exception::dealException');
register_shutdown_function('magic\Exception::dealShutdown');

function magicLoad($class)
{
	
}