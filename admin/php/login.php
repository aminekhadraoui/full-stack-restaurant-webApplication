<?php
$db= mysqli_connect("localhost","root","");
mysqli_select_db($db,"restaurant");
//get POST Data
$user=$_POST["username"];
$password=$_POST["password"];
//mysql query
$sql = "select * from admin";
$result = mysqli_query($db,$sql);

$row = mysqli_fetch_array($result, MYSQLI_NUM);
if($row[0]==$user and $row[1] == $password){
	header('Location: ../commande/index.php');
}
/*sleep(15);
header('location: http://localhost:8012/project/');
exit;
*/

 else{
    echo "ERROR" ;
    mysqli_error($db);
}

//modal
?>