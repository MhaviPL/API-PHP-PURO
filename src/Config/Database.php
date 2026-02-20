<?php
    namespace Config;

    use PDO;
    use PDOException;

    class Database {

        private $host = "localhost";
        private $dbName = "seu_nome";
        private $username = "root";
        private $pass = "";
        public $conn;

        public function getConnection(){
            $this->conn = null;
            $dsn = "mysql:host=$this->host;dbname=$this->dbName";

            try{
                $this->conn = new PDO($dsn, $this->username, $this->pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conn->exec("set names utf8");
       
            } catch(PDOException $e){
                echo "Erro na conexão: " . $e->getMessage();

            }
        }
    }
?>