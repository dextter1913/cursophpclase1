<?php 
require_once 'app\controllers\controller.php';

$controller = $_GET['controller'];

if (isset($controller)) {
    switch ($_GET['controller']) {
        case $controller:
            controller::$controller();
            break;
    }
}else {
    header('Location:Inicio');
}
