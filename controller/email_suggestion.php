<?php

if(isset($_POST['registerRestaurant'])){
    $name = $_POST['restaurantName'];
$suburb = $_POST['restaurantSuburb'];
$address = $_POST['restaurantAddress'];
$price = $_POST['restaurantPrice'];

$foodServing = $_POST['restaurantFoodServing'];
$food_of_day = false;
$menu = false;
foreach ($foodServing as $serving)
{
    if($serving == 0) $food_of_day = true;
    if($serving == 1) $menu = true;
}

$foodType = $_POST['restaurantFoodType'];
$home_made = false;
$mexican = false;
$american = false;
$asian = false;

foreach ($foodType as $type)
{
    if($type == 0) $home_made = true;
    if($type == 1) $mexican = true;
    if($type == 2) $american = true;
    if($type == 3) $asian = true;
}
$stuff = basename($_FILES['imageUpload']['name']);

$msg = 'Nombre:     '.$name.'
Colonia:     '.$suburb.'
Direccion:   '.$address.'
Precio:      '.$price.'
Comida dia:  '.$food_of_day.'
Menu:        '.$menu.'
Cacera:      '.$home_made.'
Mexicana:    '.$mexican.'
Americana:   '.$american.'
Asiatica:    '.$asian.'
Imagen:      '.$stuff;

mail("k.rbandala@gmail.com","Recommendation",$msg);
echo("<script>alert('Correo enviado exitosamente');</script>");
header('refresh:.1;url="../index.php"');
}
else{
    header('location: ../index.php');
}


?>