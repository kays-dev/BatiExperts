<?php

class OrderController
{
    private OrderRepository $orderRepository;


    public function __construct()
    {
        $this->orderRepository = new OrderRepository;
    }

    public function orderListAll()
    {
        $order = $this->orderRepository->getOrders();

        require_once __DIR__ . '/../views/order-list.php';
    }

    public function orderListOne(int $id)
    {
        $order = $this->orderRepository->getOrder();

        require_once __DIR__ . '/../views/order-view.php';
    }

    public function create()
    {
        require_once __DIR__ . '/../views/order-create.php';

    }

    public function store() // utilisée pour enregistrer une nouvelle tâche dans la base de données.
    {
        $order = new Order(); //Une nouvelle instance de la classe Task est créée et cet objet va contenir les informations de la nouvelle tâche.
        $order->setStatus($_POST['status']); //  Assignation des valeurs envoyées via $_POST
        $order->setTitle($_POST['title']);
        $this->orderRepository->create($order); // on enregristre la tache

        header('Location: ?'); // fonction. Cela demande au navigateur de recharger la page actuelle après une action, ici soumission du formulaire. 
    }

    public function edit(int $id) // L'objectif → Charger la commande correspondant à cet id et afficher le formulaire d'édition.
    {
        $order = $this->orderRepository->getOrder($id);
        require_once __DIR__ . '/../views/order-edit.php';
    }

    public function update()
    {
        $order = new Order();
        $order->setId($_POST['id']);
        $order->setStatus($_POST['status']);
        $order->setTitle($_POST['title']);
        $this->orderRepository->update($order);

        header('Location: ?');
    }


    public function delete(int $id)
    {
        $this->orderRepository->delete($id);

        header('Location: ?');
    }

    public function forbidden()
    {
        require_once __DIR__ . '/../views/404.php';
        http_response_code(404);
    }






}