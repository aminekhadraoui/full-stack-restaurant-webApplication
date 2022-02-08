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
              <a class="nav-link" href="INDEX.PHP">Home<span class="sr-only">(current)</span></a>
            </li>
           

            <li class="nav-item">
              <a class="nav-link" href="user/login.html">Register/Log in</a>
            </li>
            

          </ul>

        </div>

    </nav>
  <!--Navbar end-->
  

  
      <!-- Dev. by munkgorn -->

          </form>
        </div>
      </section>
      <!--contact section end-->
  </main>
  <!--main section end-->

  <hr class="horizontal-line-5">
  <BR>
  

  <p class="copyright">  <center> <h2>  Keep In Touch With Us</h2></center></p>
  <BR>
  <BR>
  


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
