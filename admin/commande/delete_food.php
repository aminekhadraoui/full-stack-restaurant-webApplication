<?php 
if (empty($_GET['id'])) die('
 <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">404</h4>
            <p>No id is given</p>
            <hr>
            <p class="mb-0"> <a href="/admin/commande/" class="btn btn-primary">Go Back</a> </p>
        </div>
');
delete($_GET['id']);

function delete($id) {
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


    $sql = "DELETE FROM food WHERE id = $id ";
    $invalid_characters = array("$", "%", "#", "<", ">", "|", "'");
    $sql = str_replace($invalid_characters, "", $sql);

    if ($conn->query($sql) === TRUE) {
        header("Location: /admin/commande/food.php");
        die();
    } else {
        die('
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Error</h4>
            <p>'. $conn->error .'</p>
            <hr>
            <p class="mb-0"> <a href="/admin/commande/" class="btn btn-primary">Go Back</a> </p>
        </div>
    ');

    } 


    $conn->close();
}

?>