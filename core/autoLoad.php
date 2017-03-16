<?php

define("CLASSPOSTFIX", '.class.php');
define("AUTOlOADPATH", array(
        APPPATH . DIRECTORY_SEPARATOR . "class",
        SRCPATH . DIRECTORY_SEPARATOR . "controller",
        SRCPATH . DIRECTORY_SEPARATOR . "model"
    ));
include_once APPPATH . DIRECTORY_SEPARATOR . "common" . DIRECTORY_SEPARATOR . "functions.php"
include_once COREPATH . DIRECTORY_SEPARATOR . Router.class.php

spl_autoload_register('magicLoad');
set_error_handler('magic\Exception::dealError');
set_exception_handler('magic\Exception::dealException');
register_shutdown_function('magic\Exception::dealShutdown');

Router::dispatch();

function magicLoad($class)
{
    if(strpos($class, "\\") !== false)
    {
        require __NAMESPACE__ . $class . CLASSPOSTFIX;
    }
    else
    {
        foreach(AUTOLOADPATH as $path)
        {
            $file = $path . DIRECTORY_SEPARATOR . $class . CLASSPOSTFIX;
	        if(is_file($file))
	        {
                include_once $file
                return
            }
        }
    }
    return false
}
