<?php

    class Database{
        private $host = "localhost";
        private $db = "librarysystem";
        private $username =  "root";
        private $password = "";

        public $conn;

        public function getconnection(){
            $this->conn = null;

            try{
                $this->conn = new PDO(
                    "mysql.host= ". $this->host . "dbname" . $this->db,
                    $this->username, $this->password
                );
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            

            }catch(PDOException $exception){
                echo "Database error: ".$exception->getMessage();
            }
                
        }

    }
    

?>