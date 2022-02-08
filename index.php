<?php
$conn = mysqli_connect("localhost","root","","restaurant");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title></title>

    
    <link rel="stylesheet" type="text/css" href="style.css">

    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/select.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/07cc86c233.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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


.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(66 , 103 , 178);
  margin:0 8px;
  color:#4267B2;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
  color:#4267b2dc;
  box-shadow:0 0 0 1px #4267b2dc;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
 
  font-size:13px;
  margin-bottom:0;
}



.closebtn:hover {
  color: black;
}
/* Full-width input fields */
.input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.grid-container {
  display: grid;
  grid-gap: 50px;
  grid-template-columns: auto auto auto;
  background-color: black;
  padding: 10px;
}

.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
</style>
    
</head>
<body>
<script type="text/javascript" src="js/main.js"></script>
<!--Body container start-->
<div class="container">

  <!--header section-->
    <header id="header">

  <hr class="horizontal-line-0">

  <!--Navbar start-->
    <nav  id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-light sticky-top">

        <a class="navbar-brand" href="#nav-bar"><ion-icon class="logo-icon" name="fast-food"></ion-icon> restaurant<ion-icon class="logo-icon" name="beer"></ion-icon></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#nav-bar">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about-section">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#menu-section">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact-section">Order</a>
            </li>
            
            <!--<li class="nav-item">
                <a class="nav-link" href="admin/index.html">Login admin</a>
            </li>-->
            <li class="nav-item">
                <a class="nav-link" href="user/index.php">food</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="user/login.html">Register/Log in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin/">admin panel</a>
            </li>
            

          </ul>

        </div>

    </nav>
  <!--Navbar end-->
  

  <hr class="horizontal-line-1">

  <!--Header image and comapany name and slogan start-->
  <div class="container">
    <div class="row"> 
      <div class="col-md-6">

        <!--<img id="header-img"  src="https://image.freepik.com/free-vector/fast-food-seamless-pattern_1284-10646.jpg" class="img-fluid" alt="fast-food image">-->
        
        
        
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" data-interval="5000">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img id="header-img" src="http://www.annugeo.com/images/photos/ag42-restaurant_el_brija.jpg" class="d-block w-100" alt="carousel-img-0">
            </div>
            <div class="carousel-item">
              <img id="header-img" src="https://theafricacookbook.com/wp-content/uploads/2019/11/shutterstock_780590413.jpg" class="d-block w-100" alt="carousel-img-1">
            </div>
            <div class="carousel-item">
              <img id="header-img" src="https://theafricacookbook.com/wp-content/uploads/2019/11/shutterstock_556127671.jpg" class="d-block w-100" alt="carousel-img-2">
            </div>
            <div class="carousel-item">
              <img id="header-img" src="https://thumbs-prod.si-cdn.com/o-Z4VPURtdwasStYc7LoB_R-AY8=/fit-in/1072x0/https://public-media.si-cdn.com/filer/6e/ff/6eff6d30-374e-4ef8-830f-d1ca233d1bc9/tunisia-brik.jpg" class="d-block w-100" alt="carousel-img-3">
            </div>
            <div class="carousel-item">
              <img id="header-img" src="https://nomadparadise.com/wp-content/uploads/2020/08/tunisian-food-11-1024x640.jpg" class="d-block w-100" alt="carousel-img-4">
            </div>
            <div class="carousel-item">
              <img id="header-img" src="https://thumbs-prod.si-cdn.com/RgKjmQUSpfySreqKM-ZNZDh22ls=/fit-in/1072x0/https://public-media.si-cdn.com/filer/6d/73/6d731dff-6cc1-4eb1-ae4e-23d40aef5bb9/tunisia-ojja.jpg" class="d-block w-100" alt="carousel-img-5">
            </div>
            <div class="carousel-item">
              <img id="header-img" src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_665,h_500/http://www.tripinsiders.net/wp-content/uploads/2017/07/fricasse.jpg" class="d-block w-100" alt="carousel-img-6">
            </div>
            <div class="carousel-item">
              <img id="header-img" src="https://media-cdn.tripadvisor.com/media/photo-s/0d/71/66/c0/traditional-tunisian.jpg" class="d-block w-100" alt="carousel-img-7">
            </div>
            <div class="carousel-item">
              <img id="header-img" src="https://i2.wp.com/www.vagabondjourney.com/travelogue/wp-content/uploads/couscous-tunisia-food.jpg" class="d-block w-100" alt="carousel-img-8">
            </div>
            <div class="carousel-item">
              <img id="header-img" src="https://cuisine.nessma.tv/uploads/1/2019-05/8bb8b4e9292878898b8678ac2f04b31e.jpg" class="d-block w-100" alt="carousel-img-9">
            </div>
            
          </div>
        </div>
        
        

      </div>
      <div class="col-md-6">
        <div class="card box">
          <div class="card-body">
            <h2 class="welcome">Welcome</h2>
            <h1 class="logo-words"><ion-icon class="logo-icon" name="fast-food"></ion-icon>To BRIJA <ion-icon class="logo-icon" name="beer"></ion-icon></h1>
            <p class="slogan">Taste the best in town <i class="fas fa-utensils"></i></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </header>
  <!--Header image and comapany name and slogan end-->

  <hr class="horizontal-line-2">

  <!--main section start-->
  <main>

    <!--About section starts-->

    <section id="about-section">

      <h1 class="text-center about">About Us</h1>

      <p class="about-p"> In a pleasant and warm setting, the restaurant offers delicious dishes that you can enjoy in the large room or under the beautiful shaded terrace surrounded by magnificent arcades. the restaurant welcomes you every day and is also at your disposal for all types of events. It’s a two-fork tourist restaurant 
  </p>
    </section>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <video class="img-fluid" id="video" autoplay muted loop>

                <source 

                src="https://assets.mixkit.co/videos/preview/mixkit-customers-in-a-minimalist-style-restaurant-4385-large.mp4"
                
                type="video/mp4">
          
                Your browser does not support the video type.
          
              </video>
            </div>
          </div>
        </div>

        <div class="col-md-6">

          <div class="card">
            <div class="card-body">

              <div>
              	<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=kairouan%20brija&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embedded maps google</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
              
              </div>

              <h4 class="location"><ion-icon name="location-outline"></ion-icon> kairouan, Oqba Ibn Nafaâ, Kairouan 3100. </h4>
              <h6 class="location-p">adress: El brija, près de la grande Mosquée OKBA 3100 Kairouan, Tunisia</h6>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--About section ends-->

    <hr class="horizontal-line-3">

  
    <section id="menu-section">

        <h1 class="text-center menu">Menu</h1>
        
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <div class="card" style="width: 18rem;">
                <img src="https://image.freepik.com/free-vector/breakfast-icons-set_1284-12814.jpg" class="card-img-top" alt="Breakfast-img">
                <div class="card-body">
                  <h5 class="card-title">Breakfast</h5>
                  <p class="card-text"> Breakfast is the most important meal of the day. It’s the perfect thing to wake-up to after a long, hard night of sleep. It is important because it tastes absolutely delicious, it’s an important source of energy for the day, and it helps with weight loss.  </p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Try It With Us<span class="badge badge-pill badge-primary"> We Are The Best Service</span></li>
                 <!-- <li class="list-group-item">A second item<span class="badge badge-pill badge-primary"> $0.0</span></li>
                  <li class="list-group-item">A third item<span class="badge badge-pill badge-primary"> $0.0</span></li>
                </ul>-->    
                <div class="card-body">
                  
                  <!-- ***************************** --> 
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">show</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="row">
      <div class="col-sm">
        <img style="width: 300px;"src="img/break.jpg">
      </div>
      <div class="col-sm">
      <?php   

$q = mysqli_query($conn, "select * from cat where catid= 1 ");
$n= mysqli_num_rows($q);
for($x = 0; $x < $n;$x++)
{
  $row = mysqli_fetch_array($q, MYSQLI_BOTH);
  printf("<p>
  %s
  </p>",$row["description"]); 
}

?>      </div>
     
    </div>  
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!--************************************************-->


                  
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="card" style="width: 18rem;">
                <img src="https://img.freepik.com/free-vector/boxed-lunches-set_1284-22197.jpg?size=338&ext=jpg" class="card-img-top" alt="Lunch-img">
                <div class="card-body">
                  <h5 class="card-title">Lunch</h5>
                  <p class="card-text">It’s not easy to squeeze in a lunch break, but it’s often needed for our health and sanity. Lunch is a vital meal for everyone. It provides energy and nutrients to keep the body and brain working through the afternoon. According to experts, lunch provides nourishment to the body and brain and reduces stress and eating lunch provides a break from the activities of the day and gives energy for the rest of the afternoon. </p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Try It With Us<span class="badge badge-pill badge-primary">We Are The Best Service</span></li>
                  <!--<li class="list-group-item">A second item<span class="badge badge-pill badge-primary"> $0.0</span></li>
                  <li class="list-group-item">A third item<span class="badge badge-pill badge-primary"> $0.0</span></li>
                </ul>-->
                <div class="card-body">
                    <!-- ***************************** -->
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">show</button>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">

    <div class="row">
      <div class="col-sm">
        <img style="width: 300px;"src="img/lunch.jpg">
      </div>
      <div class="col-sm">
      <?php   

$q = mysqli_query($conn, "select * from cat where catid= 2 ");
$n= mysqli_num_rows($q);
for($x = 0; $x < $n;$x++)
{
  $row = mysqli_fetch_array($q, MYSQLI_BOTH);
  printf("<p>
  %s
  </p>",$row["description"]); 
}

?>      </div>
     
    </div>  
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!--************************************************-->


                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="card" style="width: 18rem;">
                <img src="https://image.freepik.com/free-vector/illustration-drawing-style-food-collection_53876-17798.jpg" class="card-img-top" alt="Dinner-img">
                <div class="card-body">
                  <h5 class="card-title">Dinner</h5>
                  <p class="card-text">Dinner is an important meal, but you can experiment with a range of great foods. Having a healthy dinner is linked to good sleep, good choices at breakfast and lunch, lower inflammation, greater resilience to stress, better digestion, stable blood sugar and lower anxiety.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Try It With Us<span class="badge badge-pill badge-primary"> We Are The Best Service</span></li>
                  <!--<li class="list-group-item">A second item<span class="badge badge-pill badge-primary"> $0.0</span></li>
                  <li class="list-group-item">A third item<span class="badge badge-pill badge-primary"> $0.0</span></li>-->
                </ul>
                <div class="card-body">
                      <!-- ***************************** -->
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">show</button>

<div id="id03" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
   
    <div class="row">
      <div class="col-sm">
        <img style="width: 300px;"src="img/dinner.jpg">
      </div>
      <div class="col-sm">
      <?php   

$q = mysqli_query($conn, "select * from cat where catid= 3 ");
$n= mysqli_num_rows($q);
for($x = 0; $x < $n;$x++)
{
  $row = mysqli_fetch_array($q, MYSQLI_BOTH);
  printf("<p>
  %s
  </p>",$row["description"]); 
}

?>      </div>
     
    </div>  
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!--************************************************-->



                
<div id="id04" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="row">
      <div class="col-sm">
        <img style="width: 300px;"src="img/start.jpg">
      </div>
      <div class="col-sm">

      












    </div>
     
    </div>  
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id04');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!--************************************************-->

                </div>
              </div>
            </div>
            
          </div>
        </div>

      </section>
      <!--Memu section end-->

      <hr class="horizontal-line-4">

      <!--contact section start-->
      <section id="contact-section">
        <div class="container">

          <h1 class="text-center contact">Order Now</h1>

          <form id="form" action="php/insert.php" method="post">
            
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="address">Address</label>
              <input type="text" placeholder="Enter your address" class="form-control" name="address" id="address">
            </div>
            <div class="form-group col-md-6">
              <label for="phone">Phone</label>
              <input type="tel" placeholder="Enter your contact number" class="form-control" name="phone" id="phone" required>
            </div>
            </div>
            <div class="form-group">
              <label for="comment">Any comment or suggestion</label>
              <textarea placeholder="Enter your comment or suggestion here..." class="form-control" id="comment" rows="1" name="textarea"></textarea>
            </div>
          
<!-- Use This! #just fix width+height IMG  -->
<select name="food" id="pet-select">
    <option value="">--Please choose an option--</option>
    <option value="breakfast">Breakfast</option>
    <option value="launch">Launch</option>
    <option value="dinner">Dinner</option>
   
</select>





<!-- End This -->

            <input id="submit" type="submit" class="btn btn-primary btn-block"  value="Log In Please" disabled>
      <!-- Dev. by munkgorn -->

          </form>
        </div>
      </section>
      <!--contact section end-->
  </main>
  <!--main section end-->

  <hr class="horizontal-line-5">

  

  <div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                
                <div class="col-sm-6 col-md-3 item">
                    <div class="col item social"><a href="https://www.facebook.com/ElBrija.laClasse/"><i class="icon ion-social-facebook"></i></a>                     <h6> Facebook  </h6>
</div>
                </div>
                <div class="col-md-3 item text">
                    <h3><ion-icon name="call"></ion-icon> 77 229 019</h3>
                    <h3><ion-icon name="mail"></ion-icon> info@resto-elbrija.com</h3>
                </div>

                <div class="col-md-4 item text">
                    
                 <h1 class="logo-words footer-logo"><ion-icon class="logo-icon" name="fast-food"></ion-icon> El BRIJA <ion-icon class="logo-icon" name="beer"></ion-icon></h1>
                  <p class="footer-slogan slogan">Taste the best in town <i class="fas fa-utensils"></i></p> 
              </div>
              
            </div>
            </div>
    </footer>
</div>
  <!--footer section start-->

  <!--Body container end-->
</div>

     <!--Ionicons icons pack-->
     <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

     <!--External jS file-->
     <script type="text/javascript" src="script.js"></script>

     <!--Bootstrap jS bundle-->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
