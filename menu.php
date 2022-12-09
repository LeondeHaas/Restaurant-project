<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/mediaqueries.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Oswald:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Oswald:wght@600&display=swap');
</style>
<header>
   <nav class="navbar">
    <div class="content">
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="index.php">HOME</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="menu.php">MENU</a></li>
        <li><a href="#">RESERVATION</a></li>
        <li><a href="#">LOCATIONS</a></li>
        <li><a href="#">CONTACT</a></li>
        <li><a href="#">LOGIN</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
 </header>
<!-- <header>
    <div class="main-header-container">
        <input class="dark-mode-toggle" type="checkbox">
        <a href="index.html"><li class="hover-underline-animation">HOME</li></a>
        <li class="hover-underline-animation">ABOUT US</li>
        <a href="menu.html"><li class="hover-underline-animation">MENU</li></a>
        <li class="hover-underline-animation">RESERVATION</li>
        <li class="hover-underline-animation">LOCATIONS</li>
        <li class="hover-underline-animation">CONTACT</li>
    </div>
</header> -->
<body>
    <div class="main-banner-container">
        <div class="left-banner-container" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true">
            <h3>Welcome</h3>
            <h1>LEON'S BIGGEST<br> RESTAURANT</h1>
            <div class="container-lines">
                <div class="lines"></div>
                <img src="Images/restaurant (2412).png" alt="">
                <div class="lines"></div>
            </div>
            <button>BOOK A RESERVATION</button>
        </div>
        <div class="right-banner-container"></div>
    </div>
   <div class="main-menu-container">
    <div class="card-container">
      <div class="image"><img src="Images/quinoa-bowl-with-egg-avocado-cucumber-lentil-h-2022-02-02-04-51-23-utc-removebg-preview.png" alt=""></div>
      <div class="item-name"><h1>Quinoa bowl</h1></div>
      <div class="price"><h3>$7,99</h3></div>
      <div class="item-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quis, incidunt veritatis fugit, molestias temporibus unde animi odio velit quaerat iste optio magnam praesentium aut!</div>
      <div class="type"><h3>MAIN</h3></div>
    </div>
    </div>






    <!-- <div class="item-card-2"></div>
    <div class="item-card-3"></div>
    <div class="item-card-1"></div>
    <div class="item-card-2"></div>
    <div class="item-card-3"></div> -->
   </div>
</body>
<footer>
   <?php
    include("includes/footer.php")
    ?>
</footer>
<script src="Javascript/mobile-header.js"></script>
<script src="Javascript/script.js" defer></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
    </script>
</html>