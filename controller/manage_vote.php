<?php
require_once('/Applications/MAMP/htdocs/app/dataAccess/db_connect.php');
require_once('/Applications/MAMP/htdocs/app/dataAccess/restaurantDAO.php');
require_once('/Applications/MAMP/htdocs/app/dataAccess/voteDAO.php');
require_once('/Applications/MAMP/htdocs/app/model/Restaurant.php');
require_once('/Applications/MAMP/htdocs/app/template/restaurant_card.php');

    function getRestaurantFromId($id)
    {
        $restaurant_dao = new restaurantDAO(getDB());
        $res = $restaurant_dao->getRestaurantById($id)[0];
        
        return new Restaurant($res['id'],$res['nombre'], $res['image'], $res['colonia'],
                              $res['direccion'], $res['precio'], $res['menu'],
                              $res['comida_dia'], $res['comida_corrida'],
                              $res['americana'], $res['mexicana'], $res['asiatica']);

    }

    if(isset($_POST['registerVote']))
    {
        $id = $_POST['id'];
        $cookie_name = "vote";
        if(!isset($_COOKIE[$cookie_name])) {
            $vote_dao = new voteDAO(getDB());
            $vote_dao->registerVote($id);
            setcookie($cookie_name, 1, time()+86400, "/");
            echo "<script type='text/javascript'>alert('Voto registrado.\nRecuerda que sólo puedes votar una vez al día')</script>";
            header("refresh:0.01;url=../index.php" );
        }
        else{
            echo "<script type='text/javascript'>alert('Sólo puede votar una vez al día')</script>";
            header("refresh:0.01;url=../index.php" );

        }
    }
?>