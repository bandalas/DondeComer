<?php
    class adminDAO
    {
        var $Db;

        public function __construct($DB_CON)
        {
            $this->Db = $DB_CON;
        }

        public function getAdmin($username, $password)
        {
            try
            {
                $statement = $this->Db->prepare("SELECT * FROM administrador WHERE usuario=:username and contrasenia=:password");
                $statement->bindparam(":username", $username);
                $statement->bindparam(":password", $password);
                $statement->execute();
                $dataRows = $statement->fetch(PDO::FETCH_ASSOC);
                return $dataRows;
    
            } catch (PDOException $ex)
            {
                echo $ex->getMessage();
                die($ex->getMessage()); 
            }
        }
    }
?>