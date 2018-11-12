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
    include('controller/dashboard.php');
    include('template/restaurant_card.php');
?>
<!--===============================================================================================-->	

<!-- 
        RESTAURANT ADMIN DASHBOARD
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Donde comer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!-- Styles -->
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
            
            <div id="cards-list">
                <?php
                    $records = getRestaurants();
                    foreach ($records as $record)
                    {
                        drawRestaurantInfoCardForAdminView($record);
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="public_html/js/index.js"></script>
</body>
</html>