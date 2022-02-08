<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Food</title>
    <link rel="stylesheet" href="/admin/commande/bootstrap-4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
        require_once '../inc/add_food.inc.php';
        saveToDatabase($_POST['f_name'], $_POST['f_description'], $_POST['f_price'], uploadImage("f_image"));
        ?>
        <div class="row">
            <div class="col">
                <a href="/admin/commande/food.php" class="btn btn-primary">Food</a>
            </div>
            <div class="col">
                <a href="/admin/commande/categories.php" class="btn btn-primary">Categories</a>
            </div>
        </div>
    </div>
</body>

</html>