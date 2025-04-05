<?php
require_once __DIR__ . "/../lib/database.php";

class Order {
    private int $id;
    private string $status;
    private string $title;

    public function getId(){
        return $this->id;
    }

    public function getStatus(){
        return $this->status;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setId(int $id){
        $this->id=$id;
    }

    public function setStatus(string $status){
        $this->status=htmlspecialchars($status);
    }

    public function setTitle(string $title){
        $this->title=htmlspecialchars($title);
    }

}