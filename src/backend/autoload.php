<?php

include 'src/backend/core/Helper.php';

function autoload($class_name)
{

    $array_path = array(
        'core/',
        'core/products'
    );

    foreach($array_path as $path)
    {
        $file = sprintf('src/backend/%s/%s.php', $path, $class_name);
        if(is_file($file))
        {
            include_once $file;
        }

    }
}

spl_autoload_register('autoload');