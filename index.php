<?php
    require_once 'controller/data.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Donde Comer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- All CSS Styles  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="public_html/styles/index_style.css" />
    <link rel="stylesheet" href="public_html/styles/shared_style.css">
    <!-- JQuery JS -->
    <script src="public_html/js/libs/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed" rel="stylesheet">
</head>

<body>
    <div id="wrapper" class="active">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Dónde Comer
                    </a>
                </li>
                <li><a href="#" id="homeMade">Comida Corrida</a></li>
                <li><a href="#" id="mexican">Mexicana</a></li>
                <li><a href="#" id="american">Americana</a></li>
                <li><a href="#" id="asian">Asiatica</a></li>
            </ul>
        </div>
      
        <div id="page-content-wrapper">

            <div id="top-navbar" class="navbar navbar-default navbar-fixed-top">
                <div class="nav-left">
                    <i class="fas fa-bars men" href="#menu-toggle" id="menu-toggle"></i>
                </div>
                <div class="nav-right">
                    <a href="#auxiliar" id="register-restaurant">Registra tu restaurante</a>
                </div>
            </div>
            
            <section id="info">
                <div class="jumbotron">
                    <h1>Dónde Comer</h1>
                    <div class="line"> </div>
                    <h3>Comida a tu presupuesto</h3>
                </div>
                <div id="auxiliar"></div>
            </section>
            
            <section id="restaurant-list">
                <div id="title">
                    <h4>Restraurantes</h4>
                    <p> Da click en uno de los siguientes botones<br>
                        para filtrar cada restaurante por su categoría.
                    </p>
                    <div class="div-line"></div>
                    <div id="filter-list">
                        <ul class="list-unstyled d-inline-flex">
                            <li class="filter-item" id="home-list"> 
                                <a href="#auxiliar">Todos</a>
                            </li>
                            <li class="filter-item" id="homeMade-list">
                                <a href="#auxiliar">Comida Corrida</a>
                            </li>
                            <li class="filter-item" id="mexican-list">
                                <a href="#auxiliar">Mexicana</a>
                            </li>
                            <li class="filter-item" id="american-list">
                                <a href="#auxiliar">Americana</a>
                            </li>
                            <li class="filter-item" id="asian-list">
                                <a href="#auxiliar">Asiatica</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="content">
                    <div id="cards-list">
                        <?php
                            $all_restaurants = getRestaurants();
                            foreach ($all_restaurants as $restaurant) {
                                drawRestaurantInfoCard($restaurant);
                            }
                        ?>
                        
                    </div>
                </div>
            </section>
        </div>
        
    </div>

    <script src="public_html/js/landing.js"></script>
    <script src="public_html/js/index.js"></script>
</body>

</html>