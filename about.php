<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> 

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
<style>
   <?php include "css/style.css" ?>
   <?php include "css/component.css" ?>

</style> 
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/home-img-3.png" alt="">
         <h3>why choose us?</h3>
         <p>To get the best fit in the best price</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/why-1.png" alt="">
         <h3>what we provide?</h3>
         <p>We the Oilopedia team provides different categories of oils like medicinal,cooking,hair oils and so. we make sure that the oils are in good quality with resonable price.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <!-- <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div> -->

      <div class="box">
         <img src="images/profile.jpg" alt="">
         <p>I am really happy with the products i received from the Oilopedia. What I really loved about them is their quality of the products. plus Oilopedia's customer service is really nice. I will definiteky by many products in future.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Dalia Jose</h3>
      </div>

      <div class="box">
         <img src="images/profile.jpg" alt="">
         <p>I am really happy with the products i received from the Oilopedia. What I really loved about them is their quality of the products. plus Oilopedia's customer service is really nice. I will definiteky by many products in future.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jhananithaa</h3>
      </div>

      <div class="box">
         <img src="images/profile.jpg" alt="">
         <p>I am really happy with the products i received from the Oilopedia. What I really loved about them is their quality of the products. plus Oilopedia's customer service is really nice. I will definiteky by many products in future.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ishita Kumari</h3>
      </div>

      <div class="box">
         <img src="images/profile.jpg" alt="">
         <p>I am really happy with the products i received from the Oilopedia. What I really loved about them is their quality of the products. plus Oilopedia's customer service is really nice. I will definiteky by many products in future.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Vaishnavi Sabarish</h3>
      </div>
   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>