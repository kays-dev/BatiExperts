<?php

//CRUD (ajouter/voir/modifier/supprimer)

class OrderRepository
{
    public DatabaseConnection $connection;

    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    public function getOrders(): array
    {
        $statement = $this->connection->getConnected()->prepare('SELECT * FROM orders');
        $statement->execute();
        $result = $statement->fetchAll();
        $orders = [];
        foreach ($result as $row) {
            $order = new Order();
            $order->setID($row['id']);
            $order->setStatus($row['status']);
            $order->setTitle($row['title']);


            $orders[] = $order;

        }
        return $orders;
    }

    public function getOrder(int $id): ?Order
    {
        $statement = $this->connection->getConnected()->prepare('SELECT * FROM orders WHERE id=$id');
        $statement->execute();
        $result = $statement->execute()->fetch();

        if (!$result) {
            return null;
        }
        $order = new Order();
        $order->setId(['id']);
        $order->setStatus(['status']);
        $order->setTitle(['title']);

        return $order;
    }

    public function create(Order $order): bool
    {

        $statement = $this->connection->getConnected()->prepare('INSERT INTO clients (status, title) VALUES(:status, :title);');

        return $statement->execute([
            'status' => $order->getStatus(),
            'title' => $order->getTitle(),

        ]);
    }


    public function update(Order $order): bool
    {
        $statement = $this->connection->getConnected()->prepare('UPDATE clients SET status= :status, title = :title WHERE id = :id');

        return $statement->execute([
            'status' => $order->getStatus(),
            'title' => $order->getTitle(),

        ]);
    }

    public function delete(int $id): bool
    {
        $statement = $this->connection
            ->getConnected()
            ->prepare('DELETE FROM orders WHERE id=:id');
        $statement->bindParam(':id', $id);

        return $statement->execute();


    }


}
