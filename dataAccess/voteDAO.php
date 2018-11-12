<?php
    class voteDAO
    {
        var $Db;

        public function __construct($DB_CON)
        {
            $this->Db = $DB_CON;
        }

        public function registerVote($restaurant_id)
        {
            try
            {
                $total = $this->getNumberVotes($restaurant_id)['total'];
                $total+=1;
                $statement = $this->Db->prepare("INSERT INTO `votacion`(`restaurante_id`,`total`) 
                                                VALUES(:id,:total)
                                                ON DUPLICATE KEY UPDATE
                                                `total` = $total");
                $statement->bindparam(":id", $restaurant_id);
                $statement->bindparam(":total", $total);
                $statement->execute();
                return true;

            } catch (PDOException $ex)
            {
                echo $ex->getMessage();
                die($ex->getMessage()); 
            }
        }

        public function getNumberVotes($restaurant_id)
        {
            try{
                $statement = $this->Db->prepare("SELECT `total` FROM `votacion` WHERE restaurante_id=:id");
                $statement->bindparam(":id", $restaurant_id);
                $statement->execute();
                $dataRows = $statement->fetch(PDO::FETCH_ASSOC);
                return $dataRows;
            }catch (PDOException $ex)
            {
                echo $ex->getMessage();
                die($ex->getMessage()); 
            }
        }

        
    }
?>
