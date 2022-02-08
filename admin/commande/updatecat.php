<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";
$des=$_POST["description"];
$id=$_POST['id'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE cat SET description='$des' WHERE catid=$id";

if (mysqli_query($conn, $sql)) {
  echo " updated successfully";
} else {
  echo "Error updating : " . mysqli_error($conn);
}

mysqli_close($conn);
echo "<script>alert('Update Successfully'); window.location='categories.php';</script>";
?>