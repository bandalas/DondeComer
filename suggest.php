<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Donde comer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public_html/styles/suggestion.css">
</head>
<body>
    <div id="form-input">
        <form method="post" action="controller/email_suggestion.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="restaurantName">Nombre</label>
                <input type="text" class="form-control col-6" name="restaurantName" required>
            </div>
            <div class="form-group">
                <label for="restaurantSuburb">Colonia</label>
                <input type="text" class="form-control col-6" name="restaurantSuburb" required>
            </div>
            <div class="form-group">
                <label for="restaurantAddress">Direccion</label>
                <input type="text" class="form-control col-6" name="restaurantAddress" required>
            </div>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="restaurantPrice" value=0  required> $
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
                        <input class="form-check-input" type="checkbox" name="restaurantFoodServing[]" value=0  > Comida del día
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
                <input type="file" class="form-control-file" name="imageUpload" required>
                <small id="fileHelp" class="form-text text-muted">Seleccione la imagen correspondiente al restaurante</small>
            </div>
            <input type="submit" class="filter-item" value="Enviar" name="registerRestaurant">
        </form>
    </div>
</body>
</html>