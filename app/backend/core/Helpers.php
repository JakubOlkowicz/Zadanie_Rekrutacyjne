<?php 

function autoload($class_name)
{
    if (is_file('app/backend/core/' . $class_name . '.php'))
    {
        require_once 'app/backend/core/' . $class_name . '.php';
    }
    else if
    (is_file('app/backend/classes/' . $class_name . '.php'))
    {
        require_once 'app/backend/classes/' . $class_name . '.php';
    }
    
}


function appName()
{
    echo Config::get('app/name');
}

function render($filename) {
    ob_start();
    include $filename;
    return ob_get_clean();
  }



