<?php
require_once __DIR__ . '/../app/controllers/DictionaryController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = new DictionaryController();

switch ($action) {
    case 'showDefinition':
        $controller->showDefinition();
        break;
    default:
        $controller->index();
        break;
}
