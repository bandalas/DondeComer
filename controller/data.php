<?php
    require_once('/Applications/MAMP/htdocs/app/dataAccess/db_connect.php');
    require_once('/Applications/MAMP/htdocs/app/dataAccess/restaurantDAO.php');
    require_once('/Applications/MAMP/htdocs/app/model/Restaurant.php');
    require_once('/Applications/MAMP/htdocs/app/template/restaurant_card.php');

    if(isset($_POST['action']) & !empty($_POST['action'])) 
    {
        $action = $_POST['action'];
        switch($action) {
            case 'comida_corrida' : 
                $data = getComidaCorridaRestaurants(); 
                drawCardsFromData($data);
                break;
            case 'home' : 
                $data = getRestaurants();
                drawCardsFromData($data);
                break;
            case 'mexicana' :
                $data = getMexicanaRestaurants();
                drawCardsFromData($data);
                break;
            case 'asiatica':
                $data = getAsiaticaRestaurants();
                drawCardsFromData($data);
                break;
            case 'americana' :
                $data = getAmericanaRestaurants();
                drawCardsFromData($data);
                break;
        }
    }

    function getRestaurants()
    {   
        $records = getRestaurantDAO()->getAllRestaurants();
        return constructRestaurantArrayFromQuery($records);
    }

    function getComidaCorridaRestaurants()
    {
        $records = getRestaurantDAO()->getComidaCorridaRestaurants();
        return constructRestaurantArrayFromQuery($records);
    }

    function getMexicanaRestaurants()
    {
        $records = getRestaurantDAO()->getMexicanaRestaurants();
        return constructRestaurantArrayFromQuery($records);
    }

    function getAmericanaRestaurants()
    {
        $records = getRestaurantDAO()->getAmericanaRestaurants();
        return constructRestaurantArrayFromQuery($records);
    }

    function getAsiaticaRestaurants()
    {
        $records = getRestaurantDAO()->getAsiaticaRestaurants();
        return constructRestaurantArrayFromQuery($records);
    }

    function getRestaurantDAO()
    {
        return new restaurantDAO(getDB());
    }

    function constructRestaurantArrayFromQuery($array)
    {
        $queriedRestaurants = [];
        foreach ($array as $res) {
            $restaurant = new Restaurant($res['id'],$res['nombre'], $res['image'], $res['colonia'],
                                        $res['direccion'], $res['precio'], $res['menu'],
                                        $res['comida_dia'], $res['comida_corrida'],
                                        $res['americana'], $res['mexicana'], $res['asiatica']);
            array_push($queriedRestaurants, $restaurant);
        }
        return $queriedRestaurants;
    }

    function drawCardsFromData($array)
    {
        foreach ($array as $restaurant)
        {
            drawRestaurantInfoCard($restaurant);
        }
    }

?>