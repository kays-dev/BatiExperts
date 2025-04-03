<?php

require_once __DIR__ . "/../Client.php";

class ClientRepository
{

    public DatabaseConnection $connection;

    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    public function addClient(Client $client): bool
    {

        $statement = $this->connection
            ->getConnected()
            ->prepare("INSERT INTO clients (nom, email, telephone) VALUES (:nom, :email, :telephone); ");

        return $statement->execute([
            'nom' => $client->getNom(),
            'email' => $client->getEmail(),
            'telephone' => $client->getTelephone(),
        ]);

    }

    public function viewClients(): array
    {

        $statement = $this->connection
            ->getConnected()
            ->prepare('SELECT * FROM clients;');
        $statement->execute();
        $results = $statement->fetchAll();

        $clients = [];
        foreach ($results as $row) {
            $client = new Client();
            $client->setId($row['id']);
            $client->setNom($row['name']);
            $client->setEmail($row['email']);
            $client->setTelephone($row['telephone']);

            $clients[] = $client;
        }
        // var_dump($clients);
        return $clients;
    }

    public function viewClient(int $id): ?Client
    {

        $statement = $this->connection
            ->getConnected()
            ->prepare("SELECT * FROM clients WHERE id = $id");
        $statement->execute();
        $result = $statement->fetch();

        if (!$result) {
            return null;
        }

        $client = new Client();
        $client->setId($result['id']);
        $client->setNom($result['name']);
        $client->setEmail($result['email']);
        $client->setTelephone($result['telephone']);

        return $client;
    }

    public function updateClient(Client $client): bool
    {

        $statement = $this->connection
            ->getConnected()
            ->prepare("UPDATE clients SET name = :nom, email = :email, telephone = :telephone WHERE id = :id");

        return $statement->execute([
            'nom' => $client->getNom(),
            'email' => $client->getEmail(),
            'telephone' => $client->getTelephone(),
        ]);
    }

    public function deleteClient(int $id): bool
    {

        $statement = $this->connection
            ->getConnected()
            ->prepare("DELETE FROM clients WHERE id=$id");

        return $statement->execute([
            'id' => $id
        ]);
    }
}