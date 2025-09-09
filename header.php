<?php

if(isset($message)){
   foreach($message as $msg){
      echo '
      <div class="message">
         <span>'.$msg.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">FreshBasket<span>.</span></a>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="shop.php">shop</a>
         <a href="orders.php">orders</a>
         <a href="about.php">about</a>
         <a href="contact.php">contact</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <a href="search_page.php" class="fas fa-search"></a>

         <?php if(!empty($user_id)): ?>
            <?php
               $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
               $count_cart_items->execute([$user_id]);
               $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
               $count_wishlist_items->execute([$user_id]);
            ?>
            <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?= $count_wishlist_items->rowCount(); ?>)</span></a>
            <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $count_cart_items->rowCount(); ?>)</span></a>
         <?php else: ?>
            <!-- Guests just see login/register buttons -->
            <a href="login.php" class="fas fa-heart"></a>
            <a href="login.php" class="fas fa-shopping-cart"></a>
         <?php endif; ?>
      </div>

      <div class="profile">
         <?php if(!empty($user_id)): ?>
            <?php
               $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
               $select_profile->execute([$user_id]);
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            ?>
            <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
            <p><?= $fetch_profile['name']; ?></p>
            <a href="user_profile_update.php" class="btn">update profile</a>
            <a href="logout.php" class="delete-btn">logout</a>
         <?php else: ?>
            <div class="flex-btn">
               <a href="login.php" class="option-btn">login</a>
               <a href="register.php" class="option-btn">register</a>
            </div>
         <?php endif; ?>
      </div>

   </div>

</header>
