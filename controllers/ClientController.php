<?php

require_once __DIR__ . '/../models/repositories/ClientRepository.php';

class ClientController
{
    private ClientRepository $clientRepository;

    public function __construct()
    {

        $this->clientRepository = new ClientRepository();
    }

    public function home()
    {

        $client = $this->clientRepository->viewClients();

        require_once __DIR__ . '/../views/home.php';

    }

    public function clientList()
    {

        $clients = $this->clientRepository->viewClients();
        require_once __DIR__ . '/../views/client-list.php';

    }

    public function show(int $id)
    {

        $client = $this->clientRepository->viewClient($id);

        require_once __DIR__ . '/../views/client-view.php';

    }

    public function create()
    {

        require_once __DIR__ . '/../views/client-create.php';

    }

    public function store()
    {

        $client = new Client();
        $client->setNom($_POST['name']);
        $client->setEmail($_POST['email']);
        $client->setTelephone($_POST['phone']);
        $this->clientRepository->addClient($client);

        header('Location: ?');

    }

    public function edit(int $id)
    {

        $client = $this->clientRepository->viewClient($id);
        require_once __DIR__ . '/../views/client-edit.php';
        
    }

    public function update()
    {

        $client = new Client();
        $client->setId($_POST['id']);
        $client->setNom($_POST['name']);
        $client->setEmail($_POST['email']);
        $client->setTelephone($_POST['phone']);

        $this->clientRepository->updateClient($client);

        header('Location: ?');

    }

    public function delete(int $id)
    {
        $this->clientRepository->deleteClient($id);

        header('Location: ?');
    }

    public function forbidden()
    {

        require_once __DIR__ . '/../views/404.php';

        http_response_code(404);

    }
}
