<?php
require_once('controller/manage_vote.php');
$id=$_GET['restaurante'];
if(!isset($id) || empty($id))
{
    header("location: index.php");
}
$restaurant = getRestaurantFromId($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dónde comer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="public_html/styles/vote_style.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Dónde Comer</a>
    </nav>
    <div id="content">
        <div id="information">
            <div class="avatar-rounded">
                <div class="avatar">
                    <?php
                        echo('<img src="/app/uploads/'.$restaurant->getImage().'" alt="">');
                    ?>
                </div>
            </div>
            <div id="info">
                <?php
                    echo('<h2>'.$restaurant->getName().'</h2>');
                    echo('<h3 class="address">'.$restaurant->getAddress().'</h2>');
                ?>
                <div class="details">
                    <?php
                        drawDetailsInfoCard($restaurant);
                    ?>
                </div>
            </div>
            <div id="data-footer">
                <form action="controller/manage_vote.php" method="post">
                    <input type="number" class="invisible" name="id" value="<?php echo $id; ?>">
                    <input type="submit" class="btn btn-primary" value="Votar" name="registerVote">
                </form>
            </div>
        </div>
    </div>
</body>
</html>