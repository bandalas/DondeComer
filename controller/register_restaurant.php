<?php
    include('../dataAccess/db_connect.php');
    include('../dataAccess/restaurantDAO.php');
    include('../model/Restaurant.php');

    if(isset($_POST['registerRestaurant']))
    {
        $name = $_POST['restaurantName'];
        $suburb = $_POST['restaurantSuburb'];
        $address = $_POST['restaurantAddress'];
        $price = $_POST['restaurantPrice'];

        $foodServing = $_POST['restaurantFoodServing'];
        $food_of_day = 0;
        $menu = 0;
        foreach ($foodServing as $serving)
        {
            if($serving == 0) $food_of_day = 1;
            if($serving == 1) $menu = 1;
        }

        $foodType = $_POST['restaurantFoodType'];
        $home_made = 0;
        $mexican = 0;
        $american = 0;
        $asian = 0;
        foreach ($foodType as $type)
        {
            if($type == 0) $home_made = 1;
            if($type == 1) $mexican = 1;
            if($type == 2) $american = 1;
            if($type == 3) $asian = 1;
        }

        $target_dir = '../uploads/';
        $stuff = basename($_FILES['imageUpload']['name']);
        $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
        if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
            
        } else {
            echo "Sorry, there was an error uploading your file.";
            header();
        }
        $image = basename( $_FILES["imageUpload"]["name"],".jpg");
        $image = $image.".jpg";
        $db = getDB();
        $restaurant_dao = new restaurantDAO($db);
        $restaurant = new Restaurant(0,$name, $image, $suburb, $address, $price, $menu, $food_of_day, $home_made, $american, $mexican, $asian);
        $result = $restaurant_dao->storeRestaurant($restaurant);
        echo "<script type='text/javascript'>alert('Restaurante registrado')</script>";
        header("refresh:0.01;url=../dashboard.php" );  
    }else{
        header('Location:../dashboard.php');
    }

     
    
?>