<?php
require_once 'controllers/UserController.php';
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
$controller = new UserController();

if (isset($_POST['action'])) {
    $action = $_POST['action'];
//    echo $action;

    switch ($action) {
        case 'create':
            $controller->create($_POST);
            break;
        case 'edit':
            $controller->edit($_POST);
            break;
        case 'delete':
            $controller->delete($_POST['delete']);
            break;
        case 'view':
            $controller->view($_POST['view']);
            break;
        default:
            $controller->index();
            break;
    }
} else {
    $controller->index();
}
