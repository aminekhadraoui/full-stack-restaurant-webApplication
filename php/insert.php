



         <?php  
$conn = mysqli_connect("localhost","root","","restaurant");

if (array_key_exists('order',$_POST)){
  if(isset( $_POST['food'])){
    $mail=$_POST['mail'];
    $r=mysqli_query($conn,"select name from user where email='$mail'");
    $row=mysqli_fetch_array($r);
    $name=$row['name'];
    $addr=$_POST['address'];
   $idd = $_POST['food'];
   $phone= $_POST['phone'];
   $sug= $_POST['sug'];
$req="insert into  commande values('$name','$mail','$addr','$phone','$sug','$idd')";
$res=mysqli_query($conn,$req);
echo "<script>alert('Order Placed Successfully!, You Will Be Disconnected !.'); window.location='../index.php';</script>";
   }
 }

?>








<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<script type="text/javascript">
	function redirect(url,seconds)
{
	var ss = seconds * 1000;
	window.setTimeout('window.location="'+url+'"; ',ss);
}

</script>
</head>
<body>








</script>
</body>

</html>