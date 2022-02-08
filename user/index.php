<?php


include 'db.conn.php';


$sql  = "SELECT * FROM
	         food ORDER BY id DESC";

$stmt = $conn->prepare($sql);
$stmt->execute();

$foods = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    body {
      display: flex;
      align-items: center;
      flex-direction: column;
      font-family: 'Roboto', sans-serif;
    }

    .error {
      color: #a00;
    }

    .gallery img {
      width: 127px;
    }

    /************/
    .image-ratio {
      position: relative;
      overflow: hidden;
    }

    .image-ratio:before {
      content: "";
      display: block;
      padding-top: 100%;
    }

    .image-ratio .ratio-inner {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      width: 100%;
      height: 100%;
    }

    .image-ratio .ratio-inner img {
      width: 100%;
      min-height: 100%;
    }

    .text-center {
      text-align: center;
    }

    p {
      font-weight: 400;
    }

    body {
      font-family: "Nunito", sans-serif;
    }

    .page-title {
      color: #9a3299;
      margin: 0 0 5px;
    }

    .page-description {
      font-size: 16px;
      color: #777;
      margin: 0 0 20px;
    }

    .food-card {
      width: 300px;
      margin: 20px 0px 20px 20px;
      display: inline-block;
      margin-bottom: 30px;
    }

    .food-card .card {
      position: relative;
      text-align: left;
    }

    .food-card .card .cat-flag {
      position: absolute;
      top: 8px;
      left: -5px;
      z-index: 2;
      font-size: 13px;
      font-weight: 400;
      padding: 3px 5px 3px 5px;
      color: #fff;
      border-top-right-radius: 3px;
      border-bottom-right-radius: 3px;
      background-color: #2266aa;
    }

    .food-card .card .cat-flag:not(.style-2):before,
    .food-card .card .cat-flag:not(.style-2):after {
      content: "";
      display: block;
      position: absolute;
      right: 100%;
      border-right: 10px solid #2266aa;
    }

    .food-card .card .cat-flag:not(.style-2):before {
      top: 0;
      border-bottom: 13px solid transparent;
      border-top: 0 solid transparent;
    }

    .food-card .card .cat-flag:not(.style-2):after {
      bottom: 0;
      border-top: 13px solid transparent;
      border-bottom: 0 solid transparent;
    }

    .food-card .card .cat-flag.style-2 {
      left: -20px;
    }

    .food-card .card .cat-flag.style-2:after {
      content: "";
      border-right: 20px solid #184e84;
      border-bottom: 10px solid transparent;
      border-left: 0 solid transparent;
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 2;
    }

    .food-card .card .card-img {
      text-align: center;
      background-color: #000;
    }

    .food-card .card .card-img img {
      transition: transform 0.7s;
      opacity: 0.8;
    }

    .food-card .card:before {
      content: "";
      position: absolute;
      bottom: 0;
      right: 0;
      left: 0;
      z-index: 1;
      height: 70px;
      display: block;
      background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0%, black 100%);
      /* FF3.6-15 */
      background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, black 100%);
      /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, black 100%);
      /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00000000", endColorstr="#000000", GradientType=0);
      /* IE6-9 */
    }

    .food-card .card .card-content {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: 3;
      overflow: hidden;
    }

    .food-card .card .card-content .content {
      transition: transform 0.4s;
      transform: translateY(100%);
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&0+0,1+100 */
      background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0%, black 100%);
      /* FF3.6-15 */
      background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, black 100%);
      /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, black 100%);
      /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00000000", endColorstr="#000000", GradientType=0);
      /* IE6-9 */
    }

    .food-card .card .card-content .title {
      color: #fff;
      font-weight: 600;
      font-size: 24px;
      transform: translateY(-100%);
      transition: transform 0.4s;
      margin-top: 0;
      margin-bottom: 0;
      padding: 0 15px 15px;
    }

    .food-card .card .card-content .description {
      padding: 0 15px;
      color: #fff;
      font-size: 13px;
      margin: 0;
    }

    .food-card .card:hover .card-content .content {
      padding-bottom: 15px;
      transform: translateY(0);
    }

    .food-card .card:hover .card-content .title {
      transform: translateY(0);
    }

    /***************/
    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
    }

    .button1 {
      background-color: white;
      color: black;
      border: 2px solid #4CAF50;
    }

    .button1:hover {
      background-color: #4CAF50;
      color: white;
    }

    .footer-dark .copyright {
  text-align:center;
  padding-top:24px;
 
  font-size:13px;
  margin-bottom:0;
}
  </style>
</head>

<body>

  <a href="../../"><button class="button button1">Go back To Main Site</button></a>
  <h3 > List Of Foods </h3>
  <?php if ($stmt->rowCount() > 0) { ?>
    <div class="gallery">

      <?php foreach ($foods as $food) { ?>



        <div class="food-card">

          <div class="card">
            <h4 class="cat-flag">         food    </h4>
            <div class="card-img image-ratio">
              <div class="ratio-inner"><img src="<?= $food['image'] ?>"></div>
            </div>
            <div class="card-content">
              <div class="content">
              
                <h3 class="title"><?= $food['name'] ?></h3>
                <h8 class="title"><?= $food['price'] ?> dt</h8>

                <p class="description"><?= $food['description'] ?></p>

              </div>
            </div>
          </div>
        </div>



      <?php } ?>
    </div>
  <?php } ?>

  


 
            
          </div>

      </div>
  </footer>
</div>











</body>

</html>