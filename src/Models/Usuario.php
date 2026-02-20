<?php

class Usuario{
    private $conn;
    private $table = "usuarios";


    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function buscarTodos(){
        $query = "SELECT id, nome, email, FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        
    }
}

?>