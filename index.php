<?php

require_once __DIR__ . '/controllers/ClientController.php';

$clientControl = new ClientController();
// $orderRepo = new OrderRepository();

$action = $_GET['action'] ?? 'client-index';
$id = $_GET['id'] ?? null;

switch ($action){
    case 'client-view':
        $clientControl->show($id);
        break;
    case 'client-create':
        $clientControl->create();
        break;
    case 'client-index':
        $clientControl->clientList();
        break;
    case 'client-store':
        $clientControl->store();
        break;
    case 'client-edit':
        $clientControl->edit($id);
        break;
    case 'client-update':
        $clientControl->update();
        break;
    case 'client-delete':
        $clientControl->delete($id);
        break;
    default:
        $clientControl->forbidden();
        break;
}



