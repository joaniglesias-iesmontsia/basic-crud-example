<?php
require_once 'controllers/PersonController.php';

$controller = new PersonController();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'create':
            $controller->create();
            break;
        case 'update':
            $controller->update($_GET['id']);
            break;
        case 'delete':
            $controller->delete($_GET['id']);
            break;
        default:
            $controller->index();
    }
} else {
    $controller->index();
}
?>
