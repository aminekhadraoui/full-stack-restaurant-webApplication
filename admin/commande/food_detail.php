<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Detail</title>
    <link rel="stylesheet" href="/admin/commande/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link href="../css/lightbox.min.css" rel="stylesheet">
</head>

<body>
    <div style="display: flex; align-items: center; justify-content: center; width: 100%; height: 100vh;">
        <div>
            <?php

            if (empty($_GET['id'])) die('
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">404</h4>
            <p>No id is given</p>
            <hr>
            <p class="mb-0"> <a href="/admin/commande/" class="btn btn-primary">Go Back</a> </p>
        </div>
    ');
            require_once '../inc/food_detail.inc.php';
            render(getFood($_GET['id']));
            ?>
            <a class="btn btn-primary" href="/admin/commande/food.php">Go Back</a>
        </div>

    </div>
    <script src="/jquery-3.6.0.min.js"></script>
    <script src="../js/lightbox.min.js"></script>
</body>

</html>