<?php
    class db_biblioteca{
        private $host= "localhost";
        private $dbname="biblioteca";
        private $user="root";
        private $password="";
        public function conection_db(){
            try{
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                return $PDO;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }

?>  