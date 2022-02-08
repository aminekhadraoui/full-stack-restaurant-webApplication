<?php


$conn = mysqli_connect("localhost", "root", "", "restaurant");


if (array_key_exists('sup', $_POST)) {
  if (isset($_POST['supp'])) {
    $idd = $_POST['supp'];
    $req = "DELETE FROM user WHERE email = '$idd' ";
    $rd = mysqli_query($conn, $req);
    if (mysqli_affected_rows($conn) > 0) {
      echo "<script> alert('Deleted Successfully')</script>";
    }
  }
}

/*supprimier from commande */

if (array_key_exists('supc', $_POST)) {
  if (isset($_POST['supc'])) {
    $idd = $_POST['suppc'];
    $req = "DELETE FROM commande WHERE sug = '$idd' ";
    $rd = mysqli_query($conn, $req);
    if (mysqli_affected_rows($conn) > 0) {
      echo "<script> alert('Order Deleted Successfully')</script>";
    }
  }
}


?>



<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="/admin/commande/1.3.0/css/line-awesome.min.css" />
  <title>Commandes</title>
  <style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Sancreek&display=swap");

    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Sancreek", cursive;
    }

    .container {
      width: 100%;
      min-height: 100vh;
      background-color: #222;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .uploadnew {
      background-color: #124536;
      color: white;
      padding: 20px 40px 20px 40px
    }

    .uploadbtn {
      padding: 20px 40px 20px 40px;
      border: none;
      background-color: #125496;
      color: white
    }

    .uploadbtn:hover {
      background-color: #659823
    }
  </style>
</head>

<body>




  <section>




    <button style="background-color:red;color:white;" type="button" class="btn btn-primary" onclick="location.href='../index.html'"> <i class="
la la-close"></i> SignOut</button>
    <br>

    <br>


    <br>
   

    <br>
    
      <h3 style="margin-top: 20px; color:white">Admin Dashboard Of BRIJA Restaurent</h3>
    

    <button type="button" class="btn btn-primary" onclick="location.href='../../index.php'"> <i class="las la-arrow-left"></i> Go Back to main site</button>


    <br>
    <br>


    <div style="font-family: 'Oswald', sans-serif;">

      <table>
        <tr>
          <td>
            <button type="button" class="btn btn-success" onclick="location.href='food.php'">Go To Food Management</button>
          </td>
        </tr>

        <tr>
          <td>
            <button type="button" class="btn btn-success" onclick="location.href='categories.php'">Go To Categories Managements</button>
          </td>
        </tr>
      </table>
    </div>

   

  <!-- Add food Modal -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 
</body>

</html>