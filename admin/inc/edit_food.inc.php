<?php

function editFood($id, $f_name, $f_description, $f_price, $f_image_name) {
    /**
     * 1 : Get food data
     * 2 : Check if user uploaded new image
     * 3 : Delete old img, upload the new one
     * 4 : Set the new data
     */

    // DB conncetion

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "restaurant";

    $stmt = null;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        $die_msg = '<div class="alert alert-danger" role="alert">' .
        'Connection failed' .
        '</div>';
        die($die_msg);
    }

    $food = getFood($id);

    // 2
    if (!empty($f_image_name)) {
        // 3
        // new image
        require_once '../inc/add_food.inc.php';
        deleteImage($food["image"]);
        $f_image_name = uploadImage('f_image');



        $stmt = $conn->prepare("UPDATE food SET name=?, description=?, price=?, image=? WHERE id=?");

        $stmt->bind_param("ssdsi", $f_name,
            $f_description,
            $f_price,
            $f_image_name,
            $id
        );
    } else {
        // prepare and bind
        $stmt = $conn->prepare("UPDATE food SET name=?, description=?, price=? WHERE id=?");
        $stmt->bind_param("ssdi", $f_name, $f_description, $f_price, $id);
    }

    // 4

    $stmt->execute();

    echo '<div class="alert alert-success" role="alert">' .
    $f_name . ' Updated successfully' .
    '</div>';

    $stmt->close();
    $conn->close();

}

function deleteImage($file_path) {
    $image_target = __DIR__ . '/../../' . $file_path;
    if (file_exists($image_target)) {
        unlink($image_target);
    }
}
