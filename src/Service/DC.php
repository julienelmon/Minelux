<?php

namespace App\Service ;

    class DC{

        private function getConnection(){
            try{
                $con = new \PDO('mysql:dbname=minelux;host=127.0.0.1', 'root', '' );
                $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                return $con;
            }  
            catch(\PDOException $e) {
                return null;
            }
        }

        public function getTablesName(){
            $query = "SHOW TABLES";
            $statement = $this->getConnection()->prepare($query);
            $statement->execute();
            
            $array = json_decode(json_encode($statement->fetchAll(\PDO::FETCH_OBJ)), true);

            return $array;
        }


        public function getInventory($player,$line){
            $query = "SELECT * FROM user WHERE pseudo = :pseudo";

            $statement = $this->getConnection()->prepare($query);
            $statement->bindParam(':pseudo', $player);
            $statement->execute();
            return $statement->fetch(\PDO::FETCH_OBJ)->$line;
        }
    }
?>