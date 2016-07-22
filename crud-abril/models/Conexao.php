<?php

class conexao{

    protected $db;

    public function conn(){

        $conn = NULL;

        try{
            $conn = new PDO("mysql:host=localhost;dbname=crud_abril", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
    }

    public function getConnection(){
        return $this->db;
    }
}

?>
