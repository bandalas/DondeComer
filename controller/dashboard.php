<?php
    include('/Applications/MAMP/htdocs/app/dataAccess/db_connect.php');
    include('/Applications/MAMP/htdocs/app/dataAccess/restaurantDAO.php');
    include('/Applications/MAMP/htdocs/app/model/Restaurant.php');
 
    function getRestaurants()
    {
        $db = getDB();
        $restaurant_dao = new restaurantDAO($db);
        $records = $restaurant_dao->getAllRestaurants();
        $completeResult = [];
        foreach ($records as $res) {
            $restaurant = new Restaurant($res['id'],$res['nombre'], $res['image'], $res['colonia'],
                                         $res['direccion'], $res['precio'], $res['menu'],
                                         $res['comida_dia'], $res['comida_corrida'],
                                         $res['americana'], $res['mexicana'], $res['asiatica']);
            array_push($completeResult, $restaurant);
        }
        return $completeResult;
    }

?>