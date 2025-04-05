<?php

require_once __DIR__ . '/controllers/ClientController.php';
require_once __DIR__ . '/controllers/OrderController.php';

$clientControl = new ClientController();
$orderControl = new OrderController();


$action = $_GET['action'] ?? 'home';
$id = $_GET['id'] ?? null;

switch ($action){
    case 'home':
        $clientControl->home();
        break;
    case 'client-view':
        $clientControl->show($id);
        break;
    case 'order-view':
        $orderControl->orderListOne($id);
        break;
    case 'client-create':
        $clientControl->create();
        break;
    case 'order-create':
        $orderControl->create();
        break;
    case 'client-index':
        $clientControl->clientList();
        break;
    case 'order-index':
        $orderControl->orderListAll();
        break;
    case 'client-store':
        $clientControl->store();
        break;
    case 'order-store':
        $orderControl->store();
        break;
    case 'client-edit':
        $clientControl->edit($id);
        break;
    case 'order-edit':
        $orderControl->edit($id);
        break;
    case 'client-update':
        $clientControl->update();
        break;
    case 'order-update':
        $clientControl->update();
        break;
    case 'client-delete':
        $clientControl->delete($id);
        break;
    case 'order-delete':
        $clientControl->delete($id);
        break;
    default:
        $clientControl->forbidden();
        break;
}



