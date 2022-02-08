<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Food</title>
    <link rel="stylesheet" href="/admin/commande/bootstrap-4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <?php

    require_once '../inc/food_detail.inc.php';

    if (empty($_GET['id'])) die('
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">404</h4>
            <p>No id is given</p>
            <hr>
            <p class="mb-0"> <a href="/admin/commande/" class="btn btn-primary">Go Back</a> </p>
        </div>
    ');

    $food = getFood($_GET['id']);

    if (empty($_FILES) && empty($_POST)) {
    ?>

        <section class="jumbotron container">
            <form method="POST" action="" enctype="multipart/form-data">
                <h5 class="text-center" id="exampleModalLabel">Modifier Food</h5>

                <div class="bg my-2">
                    <div class="input-cont">

                        <div class="row">
                            <div class="col-3">
                                <label for="name" class="label-name">
                                    <span class="content-name">
                                        Nom Food
                                    </span>
                                </label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="f_name" value="<?php echo $food['name'] ?>" autocomplete="off" required>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="bg my-2">
                    <div class="input-cont">

                        <div class="row">
                            <div class="col-3">
                                <label for="name" class="label-name">
                                    <span class="content-name">
                                        Description
                                    </span>
                                </label>
                            </div>
                            <div class="col">
                                <textarea class="form-control" size="35" name="f_description" autocomplete="off" required><?php echo $food['description'] ?></textarea>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="bg my-2">
                    <div class="input-cont">

                        <div class="row">
                            <div class="col-3">
                                <label for="name" class="label-name">
                                    <span class="content-name">
                                        Prix
                                    </span>
                                </label>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" value="<?php echo $food['price'] ?>" name="f_price" autocomplete="off" required>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="bg">
                    <div class="input-cont">

                        <label for="name" class="label-name">
                            <span class="content-name">
                                Images Upload
                            </span>
                        </label>
                        <input type="file" name="f_image" class="uploadnew" value="Upload Image">
                    </div>
                </div>






                <div class="modal-footer">
                    <a href="/admin/commande/food.php" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </section>

    <?php } else {
        require_once '../inc/edit_food.inc.php';

        editFood($_GET['id'], $_POST['f_name'], $_POST['f_description'], $_POST['f_price'], $_FILES['f_image']['name']);
        echo '<a href="/admin/commande/food.php" class="btn btn-primary">Go Back</a>';
    } ?>
</body>

</html>