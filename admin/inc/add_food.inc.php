<?php
// don't run if file requested directly from url

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    exit("<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\">\r\n<html><head>\r\n<title>404 Not Found</title>\r\n</head><body>\r\n<h1>Not Found</h1>\r\n<p>The requested URL " . $_SERVER['SCRIPT_NAME'] . " was not found on this server.</p>\r\n</body></html>");
}

if (empty($_POST) || empty($_FILES)) {
   die( '<div class="alert alert-danger" role="alert">' .
    'Missing data' .
    '</div>');
}

function uploadImage($image_attr) {
    /**
     * Image unique name and targets
     */
    $image = $_FILES[$image_attr];
    $img_name = $image["name"];
    $upload_dir = '/admin/uploads/';
    $extension = explode('.',$img_name)[1];
    $new_name =  uniqid("food_");
    $image_target = __DIR__.'/../../'. $upload_dir.$new_name.'.'.$extension;

    /**
     * Verification
     */
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($image_target, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES[$image_attr]["tmp_name"]);
        if ($check !== false) {
            die ( "File is an image - " . $check["mime"] . ".");
            $uploadOk = 1 ;
        } else {
           die ( '<div class="alert alert-danger" role="alert">' .
            'File is not an image.' .
            '</div>');
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($image_target)) {
        die ( '<div class="alert alert-danger" role="alert">' .
        'Sorry, file already exists.' .
        '</div>');
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES[$image_attr]["size"] > 500000) {
        die( '<div class="alert alert-danger" role="alert">' .
        'Sorry, your file is too large.' .
        '</div>');
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        die ( '<div class="alert alert-danger" role="alert">' .
        'Sorry, only JPG, JPEG, PNG & GIF files are allowed.' .
        '</div>');
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        die ( "Sorry, your file was not uploaded.");
        // if everything is ok, try to upload file
    } else {
        if (!move_uploaded_file($_FILES[$image_attr]["tmp_name"], $image_target)) {
            die( '<div class="alert alert-danger" role="alert">' .
            'Sorry, there was an error uploading your file.'.
            '</div>');
        }
    }

    return $upload_dir . $new_name . '.' . $extension; // name will be saved in DB

}
function saveToDatabase($f_name, $f_description, $f_price, $f_image_name) {
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

    // prepare and bind
    if ( ! is_numeric($f_price))
    {
        $die_msg = '<div class="alert alert-danger" role="alert">' .
                        'Price Should Be Only Numbers' .
                    '</div>';

        die($die_msg);
    }

    $f_price = abs($f_price);
    $stmt = $conn->prepare("INSERT INTO food (name, description, price, image) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssds", $f_name, $f_description, $f_price ,$f_image_name);
    $stmt->execute();

   

    echo  '<div class="alert alert-success" role="alert">'.
            $f_name . ' Added successfully'.
        '</div>';
        $stmt->close();
        $conn->close();
   
}
