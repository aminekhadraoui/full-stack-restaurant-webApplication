<?php

renderTable(getData());

function getData($id = null) {
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

    $sql = "SELECT * FROM food";
    $result = $conn->query($sql);

    

    $conn->close();
    return $result;
}
function renderTable($result) {
    $table = '
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
    ';
    
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
        
            $table .= '<tbody>
            <tr>
                <td>'. $row["id"] . '</td>
                <td>' . $row["name"] . '</td>
                <td>' . $row["description"] . '</td>
                <td>' . $row["price"] . '</td>
                <td> 
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    
                    <a href="/admin/commande/food_detail.php?id='. $row["id"] . '" class="btn btn-info">View</a>
                    <a href="/admin/commande/edit_food.php?id=' . $row["id"] . '" type="button" class="btn btn-success">Edit</a>
                    <a href="/admin/commande/delete_food.php?id='. $row["id"] . '" class="btn btn-danger delete-food" >Delete</a>
                    </div>
                </td>
            </tr>';
        }
        $table .= '
        </tbody>
    </table>
    ';
    } else {
        $table .=
        '
        <tr>
                <td colspan="5">0 Rows | Data</td>
        </tr>';
    }

    echo $table;
    
}
?>