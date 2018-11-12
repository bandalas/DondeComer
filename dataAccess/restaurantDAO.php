<?php
    class restaurantDAO
    {
        private $Db;

        public function __construct($DB_CON)
        {
            $this->Db = $DB_CON;
        }

        public function storeRestaurant($restaurant)
        {
            try
            {
                $statement = $this->Db->prepare('INSERT INTO `restaurante`(`nombre`, `image`, `colonia`, 
                                                `direccion`, `precio`, `menu`, `comida_dia`, `comida_corrida`, 
                                                `americana`, `mexicana`, `asiatica`) 
                                                VALUES (:nam, :img, :sub, :dir, :pric, :menu, :fod, 
                                                :hmde, :amer, :mex, :asi)');
                $statement->bindparam(":nam", $restaurant->getName());
                $statement->bindparam(":img",$restaurant->getImage());
                $statement->bindparam(":sub",$restaurant->getSuburb());
                $statement->bindparam(":dir",$restaurant->getAddress());
                $statement->bindparam(":pric",$restaurant->getPrice());
                $statement->bindparam(":menu",$restaurant->getMenu());
                $statement->bindparam(":fod",$restaurant->getFOD());
                $statement->bindparam(":hmde",$restaurant->getHomeMade());
                $statement->bindparam(":amer",$restaurant->getAmerican());
                $statement->bindparam(":mex",$restaurant->getMexican());
                $statement->bindparam(":asi",$restaurant->getAsian());
                $statement->execute();   
                return true;

            }catch(PDOException $ex){
                echo $ex->getMessage();
                die($ex->getMessage());
            }
        }

        public function getAllRestaurants()
        {
            try
            {
                $statement = $this->Db->prepare('SELECT * FROM restaurante');
                $statement->execute();
                $dataRows = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $dataRows;
            }catch(PDOException $ex)
            {
                echo $ex->getMessage();
                die($ex->getMessage());
            }
        }

        public function getRestaurantById($id)
        {
            try{
                $statement = $this->Db->prepare('SELECT * FROM restaurante WHERE id=:id');
                $statement->bindparam(":id", $id);
                $statement->execute();
                $dataRows = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $dataRows;
            }catch(PDOException $ex)
            {
                echo $ex->getMessage();
                die($ex->getMessage());
            }
        }

        public function getComidaCorridaRestaurants()
        {
            try
            {
                $statement = $this->Db->prepare('SELECT * FROM restaurante WHERE comida_corrida = 1');
                $statement->execute();
                $dataRows = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $dataRows;
            }catch(PDOException $ex)
            {
                echo $ex->getMessage();
                die($ex->getMessage());
            }
        }

        public function getMexicanaRestaurants()
        {
            try
            {
                $statement = $this->Db->prepare('SELECT * FROM restaurante WHERE mexicana = 1');
                $statement->execute();
                $dataRows = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $dataRows;
            }catch(PDOException $ex)
            {
                echo $ex->getMessage();
                die($ex->getMessage());
            }
        }

        public function getAmericanaRestaurants()
        {
            try
            {
                $statement = $this->Db->prepare('SELECT * FROM restaurante WHERE americana = 1');
                $statement->execute();
                $dataRows = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $dataRows;
            }catch(PDOException $ex)
            {
                echo $ex->getMessage();
                die($ex->getMessage());
            }
        }

        public function getAsiaticaRestaurants()
        {
            try
            {
                $statement = $this->Db->prepare('SELECT * FROM restaurante WHERE asiatica = 1');
                $statement->execute();
                $dataRows = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $dataRows;
            }catch(PDOException $ex)
            {
                echo $ex->getMessage();
                die($ex->getMessage());
            }
        }

    }
?>