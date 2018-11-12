<?php
    require_once('/Applications/MAMP/htdocs/app/dataAccess/voteDAO.php');
    require_once('/Applications/MAMP/htdocs/app/dataAccess/db_connect.php');

    function drawRestaurantInfoCard($restaurant)
    {
        echo('<div class="card-item">');
            echo('<div class="card-photo">');
                echo('<img src="/app/uploads/'.$restaurant->getImage().'" alt="">');
            echo('</div>');
            echo('<div class="card-info">');
                echo('<div class="top-info">');
                    echo('<div class="row">');
                        echo('<div class="col restaurant-name">'.$restaurant->getName().'</div>');
                    echo('</div>');
                    echo('<div class="row basic-info">');
                        echo('<div class="col restaurant-suburb">'.$restaurant->getSuburb().'</div>');
                        echo('<div class="col restaurant-price">'.convertPrice($restaurant->getPrice()).'</div>');
                    echo('</div>');
                echo('</div>');
                echo('<div class="card-item-footer">');
                    echo('<div class="box-left">');
                        echo('<i class="far fa-heart"></i>');
                        $num = getNum($restaurant->getId())['total'];
                        $num = empty($num) ? 0 : $num;
                        echo('<span class="num-votes">'.$num.'</span>');
                    echo('</div>');
                    echo('<div class="box-right">');
                        if(checkIfActive($restaurant->getMenu()))
                        {
                            echo('<span class="badge badge-pill badge-menu">Menu</span>');
                        }
                        if(checkIfActive($restaurant->getFOD()))
                        {
                            echo('<span class="badge badge-pill badge-fod">Menu del día</span>');
                        }
                        if(checkIfActive($restaurant->getHomeMade()))
                        {
                            echo('<span class="badge badge-pill badge-hm">Comida corrida</span>');
                        }
                        if(checkIfActive($restaurant->getAmerican()))
                        {
                            echo('<span class="badge badge-pill badge-mexican">Mexicana</span>');
                        }
                        if(checkIfActive($restaurant->getMexican()))
                        {
                            echo('<span class="badge badge-pill badge-american">Americana</span>');
                        }
                        if(checkIfActive($restaurant->getAsian()))
                        {
                            echo('<span class="badge badge-pill badge-asian">Asiatica</span>');
                        }
                        
                    echo('</div>');
                    echo('<a href="vote.php?restaurante='.$restaurant->getId().'"><button class="vote-bttn">Vota</button></a>');
                echo('</div>');
            echo('</div>');
        echo('</div>');
    }

    function drawRestaurantInfoCardForAdminView($restaurant)
    {
        echo('<div class="card-item">');
            echo('<div class="card-photo">');
                echo('<img src="/app/uploads/'.$restaurant->getImage().'" alt="">');
            echo('</div>');
            echo('<div class="card-info">');
                echo('<div class="top-info">');
                    echo('<div class="row">');
                        echo('<div class="col restaurant-name">'.$restaurant->getName().'</div>');
                    echo('</div>');
                    echo('<div class="row basic-info">');
                        echo('<div class="col restaurant-suburb">'.$restaurant->getSuburb().'</div>');
                        echo('<div class="col restaurant-price">'.convertPrice($restaurant->getPrice()).'</div>');
                    echo('</div>');
                echo('</div>');
                echo('<div class="card-item-footer">');
                    echo('<div class="box-left">');
                        echo('<i class="far fa-heart"></i>');
                        $num = getNum($restaurant->getId())['total'];
                        $num = empty($num) ? 0 : $num;
                        echo('<span class="num-votes">'.$num.'</span>');
                    echo('</div>');
                    echo('<div class="box-right">');
                        if(checkIfActive($restaurant->getMenu()))
                        {
                            echo('<span class="badge badge-pill badge-menu">Menu</span>');
                        }
                        if(checkIfActive($restaurant->getFOD()))
                        {
                            echo('<span class="badge badge-pill badge-fod">Menu del día</span>');
                        }
                        if(checkIfActive($restaurant->getHomeMade()))
                        {
                            echo('<span class="badge badge-pill badge-hm">Comida corrida</span>');
                        }
                        if(checkIfActive($restaurant->getAmerican()))
                        {
                            echo('<span class="badge badge-pill badge-mexican">Mexicana</span>');
                        }
                        if(checkIfActive($restaurant->getMexican()))
                        {
                            echo('<span class="badge badge-pill badge-american">Americana</span>');
                        }
                        if(checkIfActive($restaurant->getAsian()))
                        {
                            echo('<span class="badge badge-pill badge-asian">Asiatica</span>');
                        }
                        
                    echo('</div>');
                echo('</div>');
            echo('</div>');
        echo('</div>');
    }

    function drawDetailsInfoCard($restaurant)
    {
        echo('<div class="box-right">');
        if(checkIfActive($restaurant->getMenu()))
        {
           echo('<span class="item-badge">Menu</span>');
        }
        if(checkIfActive($restaurant->getFOD()))
        {
            echo('<span class="item-badge">Menu del día</span>');
        }
        if(checkIfActive($restaurant->getHomeMade()))
        {
            echo('<span class="item-badge">Comida corrida</span>');
        }
        if(checkIfActive($restaurant->getAmerican()))
        {
            echo('<span class="item-badge">Mexicana</span>');
        }
        if(checkIfActive($restaurant->getMexican()))
        {
            echo('<span class="item-badge">Americana</span>');
        }
        if(checkIfActive($restaurant->getAsian()))
        {
            echo('<span class="item-badge">Asiatica</span>');
        }
        echo('</div>');
    }

    function checkIfActive($element)
    {
        return $element == 1;
    }

    function convertPrice($price)
    {
        if($price == 0) return '$';
        if($price == 1) return '$$';
        else return '$$$';
    }

    function getNum($id)
    {
        return (new voteDAO(getDB()))->getNumberVotes($id);
    }

?>

    
