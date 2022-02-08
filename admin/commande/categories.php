




<!DOCTYPE html>
<html>
<head>
  <title></title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.css"/>
<link rel="stylesheet" href="1.3.0/css/line-awesome.min.css"/>
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
$('#exampleModal').modal("show");
</script>


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

.uploadnew{
  background-color: #124536;
  color:white;
  padding: 20px 40px 20px 40px
}
.uploadbtn{
  padding: 20px 40px 20px 40px;
  border: none;
  background-color: #125496;
  color: white
}
.uploadbtn:hover{
  background-color: #659823
}

</style>
</head>
<body>

<section>

  <script type="text/javascript">
    
  </script>

<div style="font-family: 'Oswald', sans-serif;">
<button type="button" class="btn btn-primary" onclick="location.href='index.php'"> <i class="las la-arrow-left"></i> Go Back Admin Dashboard </button>
<button type="button" class="btn btn-primary" onclick="location.href='food.php'"> <i class="las la-arrow-left"></i> Go to Food  </button>


</div>
  <!--for demo wrap-->
  <h1 style="margin-top: 20px; color:white">Liste Of Categories Descriptions</h1>
  
 <br> <br>
 <br>
 <br>
 <br>
 <br>
 <br>


<h3>   Breakfast </h3>
<form method="POST" action="updatecat.php" >
<?php   
$conn = mysqli_connect("localhost","root","","restaurant");
$q = mysqli_query($conn, "select * from cat where catid= 1 ");
$n= mysqli_num_rows($q);
for($x = 0; $x < $n;$x++)
{
  $row = mysqli_fetch_array($q, MYSQLI_BOTH);
  $desc=$row["description"]; 
}

?>    
<input  value="1" hidden  name="id" /> 

 <textarea rows = "5" cols = "60" name = "description"  >

 <?php echo $desc ?>
 

         </textarea><br>
         <input type = "submit" value = "Update Breakfast" />

</form>

         <br>
         <br>
         <br>

<h3>   Lunch </h3>

<form method="POST" action="updatecat.php" >
<?php   
$conn = mysqli_connect("localhost","root","","restaurant");
$q = mysqli_query($conn, "select * from cat where catid= 2 ");
$n= mysqli_num_rows($q);
for($x = 0; $x < $n;$x++)
{
  $row = mysqli_fetch_array($q, MYSQLI_BOTH);
  $desc=$row["description"]; 
}

?>    
<input  value="2" hidden  name="id" />  
 <textarea rows = "5" cols = "60" name = "description"  >
 
 <?php echo $desc ?>
             
 

         </textarea><br>
         <input type = "submit" value = "Update Launch" />


</form>            


         

         <br>
         <br>
         <br>

         <h3>   Dinner </h3>
         <form method="POST" action="updatecat.php" >
<?php   
$conn = mysqli_connect("localhost","root","","restaurant");
$q = mysqli_query($conn, "select * from cat where catid= 3 ");
$n= mysqli_num_rows($q);
for($x = 0; $x < $n;$x++)
{
  $row = mysqli_fetch_array($q, MYSQLI_BOTH);
  $desc=$row["description"]; 
}

?>    
<input  value="3" hidden  name="id" />  
 <textarea rows = "5" cols = "60" name = "description"  >
 
 <?php echo $desc ?>
             
 

         </textarea><br>
         <input type = "submit" value = "Update Dinner" />


</form>   



</body>
</html>



