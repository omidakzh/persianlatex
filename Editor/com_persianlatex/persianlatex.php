<?php
// no direct access
defined('_PEXEC') or die('Restricted access');

// Require the base controller
if(isset($_GET['option'])){
    require_once COMPONENTS_DIR.'Site'.DS.'com_'.$_GET['option'].DS.'controller.php';
}else{
    require_once COMPONENTS_DIR.'Site'.DS.'com_'.DEFAULT_COM_FRONT.DS.'controller.php';
}
$controller='';
//load controller 
if(isset($_GET['controller'])){
    $controller=strtolower($_GET['controller']);
    $path = COMPONENTS_DIR.'Site'.DS.'com_'.$_GET['option'].DS.'controllers'.DS.$controller.'.php';
    if (file_exists($path)) {
        require_once $path;
    } else {
        $controller = '';
    }
}   
// Create the controller
$classname    = 'persianlatexController'.$controller;
$controller   = new $classname( );

// Perform the Request task
$controller->display();

?>