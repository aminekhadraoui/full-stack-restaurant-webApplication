<?php



function getFood($id)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "restaurant";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        $die_msg = '<div class="alert alert-danger" role="alert">' .
            'Connection failed' .
            '</div>';
        die($die_msg);
    }

    $sql = "SELECT * FROM food WHERE id = $id ";
    $invalid_characters = array("$", "%", "#", "<", ">", "|", "'");
    $sql = str_replace($invalid_characters, "", $sql);
    $result = $conn->query($sql);

    if ($result->num_rows <= 0) die('
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">404</h4>
            <p>Food with given id \'' . $_GET['id'] . '\' is not found</p>
            <hr>
            <p class="mb-0"> <a href="/admin/commande/" class="btn btn-primary">Go Back</a> </p>
        </div>
    ');

    $conn->close();
    return $result->fetch_assoc();
}

function render($result)
{
    echo '
            <div class="container jumbotron">
            <div class="row">
                <div class="col-3">
                    Id:
                </div>
                <div class="col">' .
        $result["id"]
        . '</div>
            </div>

            <div class="row">
                <div class="col-3">
                    Name:
                </div>
                <div class="col">' .
        $result["name"]
        . '
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    Description:
                </div>
                <div class="col">' .
        $result["description"]
        . '
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    Price:
                </div>
                <div class="col">
' .
        $result["price"]
        . '
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    Image:
                </div>
                <div class="col">
                    <a href="#food_img" data-lightbox>
                        <img style="width: 500px; height: 250px; object-fit: cover; border-radius: 10px; box-shadow: 7px 4px 10px 3px rgba(0,0,0,0.2);" src="' . $result["image"] . '" />
                    </a>

                    <div id="food_img" class="lightbox-hide">
                    <div class="modal-content">
                        <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center">
                            <img style="width: 80%; height: 80%; object-fit: contain; border-radius: 10px; box-shadow: 7px 4px 10px 3px rgba(0,0,0,0.2);" src="' . $result["image"] . '" />
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    ';
}
