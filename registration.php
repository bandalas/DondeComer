<!-- 
        MAKES SURE ONLY A LOGGED IN PERSON CAN ACCESS
-->
<?php
    session_start();
    if(!isset($_SESSION['admin'])) {
        header("Location: login.php");
    }
    else {
        $user=$_SESSION['admin'];
    }
?>
<!--===============================================================================================-->	

<!-- 
        RESTAURANT REGISTRATION PAGE
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Foraneo con hambre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="public_html/styles/dashboardstyle.css">
    <link rel="stylesheet" href="public_html/styles/shared_style.css">
    <link rel="stylesheet" href="public_html/styles/index_style.css">
    <!-- Images -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- JQuery JS -->
    <script src="public_html/js/libs/jquery.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed" rel="stylesheet">
</head>
<body>
    <div id="wrapper" class="active">
    <?php
        require_once('template/navbar_dashboard.php');
    ?>
        <div id="page-content-wrapper">
            <div id="top-navbar" class="navbar navbar-default navbar-fixed-top">
                <div class="nav-left">
                    <i class="fas fa-bars men" href="#menu-toggle" id="menu-toggle"></i>
                </div>
                <div class="nav-right">
                    <a href="controller/logout.php?logout">Cerrar Sesión</a>
                </div>
            </div>
            <form method="post" action="controller/register_restaurant.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="restaurantName">Nombre</label>
                    <input type="text" class="form-control col-6" name="restaurantName">
                </div>
                <div class="form-group">
                    <label for="restaurantSuburb">Colonia</label>
                    <input type="text" class="form-control col-6" name="restaurantSuburb">
                </div>
                <div class="form-group">
                    <label for="restaurantAddress">Direccion</label>
                    <input type="text" class="form-control col-6" name="restaurantAddress">
                </div>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="restaurantPrice" value=0> $
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="restaurantPrice" value=1> $$
                        </label>
                    </div>
                    <div class="form-check form-check-inline disabled">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="restaurantPrice" value=2> $$$
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="restaurantFoodServing[]" value=0> Comida del día
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="restaurantFoodServing[]" value=1> Menú
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="restaurantFoodType[]" value=0> Comida corrida
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="restaurantFoodType[]" value=1> Mexicana
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="restaurantFoodType[]" value=2> Americana
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="restaurantFoodType[]" value=3> Asiatica
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Seleccionar imagen</label>
                    <input type="file" class="form-control-file" name="imageUpload">
                    <small id="fileHelp" class="form-text text-muted">Seleccione la imagen correspondiente al restaurante</small>
                </div>
                <input type="submit" class="filter-item" value="Registrar" name="registerRestaurant">
            </form>
        </div>
    </div>
    <script src="public_html/js/index.js"></script>
</body>
</html>
