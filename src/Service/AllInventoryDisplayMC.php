<?php

namespace App\Service;

use App\Service\DC;
    ////////////////////////////////////////////
    //     MineluxInventoryWebController      //
    //                                        //
    //                 Author:                //
    //          Darren Rapetti-Mauss          //
    ////////////////////////////////////////////


    class AllInventoryDisplayMC {
        public function __construct($player, $type){
            $this->player = $player;
            $this->type = $type;
        }
        public function getInventoryPlace($id){
            if($this->type == "inventory"){
                $con = new DC;
                for($i = 1; $i <= 36; $i++){
                    if($id == $i){
                        $place = $con->getInventory($this->player, 'inventory_' . $i);
                    }
                }
                if(empty($place)){
                    $path = 'http://localhost:8000/css/minecraft/block/air.png';
                } else {
                    $path = 'http://localhost:8000/css/minecraft/block/' . $place . '.png';
                }
                return $path;
            }
            if($this->type == "armor"){
                $con = new DC;
                for($i = 1; $i <= 4; $i++){
                    if($id == $i){
                        $place = $con->getInventory($this->player, 'armor_' . $i);
                    }
                }
                if(empty($place)){
                    $path = 'http://localhost:8000/css/minecraft/block/air.png';
                } else {
                    $path = 'http://localhost:8000/css/minecraft/block/' . $place . '.png';
                }
                return $path;
            }
            if($this->type == "special"){
                $con = new DC;
                $place = $con->getInventory($this->player, 'inventory_special');
                if(empty($place)){
                    $path = 'http://localhost:8000/css/minecraft/block/air.png';
                } else {
                    $path = 'http://localhost:8000/css/minecraft/block/' . $place . '.png';
                }
                return $path;
            }
        }
        public function getInventoryCount($id){
            $con = new DC;
            $data = $con->getInventory($this->player, 'inventory_' . $id . '_count');
            if($data <= 1){
                return "";
            } else {
                return $data;
            }
            
        }
        public function getSkin(){
            $link = 'https://minecraft-api.com/api/skins/{' . $this->player . '}/{body}/{10.5}/{10}/{10.25}/{25.12}/{12}';
            return $link;
        }

        public function getExperience(){
            $con = new DC;
            return $con->getInventory($this->player, $this->type); //ça renvoi le nom du joueur et exp dans la BDD
        }
        public function getHealth(){
            $con = new DC;
            return $con->getInventory($this->player, $this->type);
        }
        public function getFeed(){
            $con = new DC;
            return $con->getInventory($this->player, $this->type);
        }

        public static function getDatabaseTablesName(){
            $con = new DC;
            $response = $con->getTablesName();
            if(!empty($response)){
                return $response;
            } else {
                return null;
            }
        }
    }
