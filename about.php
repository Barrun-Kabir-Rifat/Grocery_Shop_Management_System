<?php

@include 'config.php';

session_start();

// ✅ Optional: get user_id if logged in, but do not force login
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
<h3>🥦 Why Choose Us?</h3>
<pre>
<p> we believe that healthy living starts with what you eat. That’s why we provide 100% organic,
farm-fresh groceries — free from harmful chemicals and preservatives.
✅ What Makes Us Different:
🌱 100% Organic & Natural – Free from harmful chemicals and pesticides
🍎 Always Fresh – Farm-to-home delivery with guaranteed freshness
💚 Healthy Choices – Packed with nutrition for you and your family
⚡ Fast & Reliable Delivery – Groceries delivered right to your doorstep
🤝 Trusted by Customers – Quality products at fair prices
</p>
</pre>
         <a href="contact.php" class="btn">contact us</a>
      </div>
<br><br>
      <div class="box">
         <img src="images/about-img-2.png" alt="">
<pre>
 <h3>🛒 What We Provide?</h3>     
<p>we offer everything you need to keep your kitchen stocked and your family healthy:
🥦 Fresh Fruits & Vegetables – Handpicked, farm-fresh, and chemical-free
🥛 Dairy & Eggs – Pure milk, yogurt, butter, and farm-fresh eggs
🥩 Meat & Fish – Fresh, hygienic, and carefully handled for your safety
🍚 Grains & Staples – Rice, lentils, pulses, and spices for your daily needs
🍪 Snacks & Beverages – Healthy snacks, juices, tea, and coffee
🧴 Household Essentials – Cleaning products, personal care, and more</p>
</pre>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/rifat.jpg" alt="">
         <p>I love shopping here! The fruits and vegetables are
             always fresh and delivered on time. Finally, a grocery store I can trust for organic products</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rifat</h3>
      </div>

      <div class="box">
         <img src="images/showrov.jpg" alt="">
         <p>Great experience every time. Prices are fair, and the 
            delivery is super fast. The mangoes I ordered were sweet and juicy — just perfect!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Showrov</h3>
      </div>

      <div class="box">
         <img src="images/asif.jpg" alt="">
         <p>This is my go-to place for monthly groceries. 
            I really appreciate that everything is chemical-free and safe for my kids</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Asif</h3>
      </div>

      <div class="box">
         <img src="images/mahbub.jpg" alt="">
         <p>Excellent customer service! They always respond quickly and make sure I get fresh items. Highly recommended.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Mahbub</h3>
      </div>

      <div class="box">
         <img src="images/nahif.jpg" alt="">
         <p>Love how easy it is to shop here. The website is simple, 
            and I always get exactly what I ordered. Quality is top-notch.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nahif</h3>
      </div>

      <div class="box">
         <img src="images/amil.jpg" alt="">
         <p>Best online grocery store! I have tried others, 
            but this one stands out for its freshness and reliability. Keep up the good work!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Amil</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>